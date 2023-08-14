<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\InvoiceRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Invoice;
use App\Models\Item;
use App\Models\User;
use App\Traits\LoggerError;
use App\Traits\UploadFile;
use Exception;
use Illuminate\Http\RedirectResponse;

class InvoiceController extends Controller
{
    use LoggerError, UploadFile;

    public function index()
    {
        $items = [];
        if (auth()->user()->type == 'admin') {
            $items = Invoice::all();
        }
        if (auth()->user()->type == 'store') {
            $storeId = auth()->id();
            $items = Invoice::where('store_id', $storeId)->get();
        }

        return view('invoices.index', compact('items'));
    }

    public function create()
    {
        $customers = User::where('type', 'customer')->get();
        $number = generateRandomInvoiceNumber();
        return view('invoices.create', compact('customers', 'number'));
    }

    public function store(InvoiceRequest $request)
    {
        try {
            $data = $request->only('number', 'date', 'subtotal' , 'total', 'customer_id');
            $data['store_id'] = auth()->id();
            $item = Invoice::create($data);
            if ($item) {
               foreach ($request->items as $product) {
                   Item::create([
                       "qty" => $product['qty'],
                       "price" => $product['price'],
                       "name" => $product['name'],
                       "total" => $product['total'],
                       "invoice_id" => $item->id
                   ]);
               }
            }
            session()->flash('success', 'تم اصدار الفاتورة بنجاح');
            return redirect()->route('invoices.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            session()->flash('error', 'something went wrong');
            return back();
        }
    }

    public function show(int $id)
    {
        $item = Category::findOrFail($id);
        return view('invoices.show', compact('item'));
    }

    public function edit(int $id)
    {
        $item = Category::findOrFail($id);
        return view('invoices.edit', compact('item'));
    }

    public function update(UpdateCategoryRequest $request, int $id): RedirectResponse
    {
        try {
            $data = $request->all();
            $item = Category::findOrFail($id);
            if ($request->hasFile('image')) {
                $this->removeOldImage( public_path('uploads').'/'.optional($item->image)->image);
                $image = $this->upload($request->image);
                $item->image()->delete();
                $item->image()->save(new Image(['image' => $image]));
            }
            $item->update($data);
            session()->flash('success', 'Item has been Updated successfully');
            return redirect()->route('invoices.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            session()->flash('error', 'something went wrong');
            return back();
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        $item = Invoice::findOrFail($id);
        if ($item->items()->exists()) {
            $item->items()->delete();
        }
        $item->delete();
        session()->flash('success', 'تم حذف الفاتورة بنجاح');
        return redirect()->route('invoices.index');
    }
}
