<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{


    public function index(Request $request)
    {
        $users = 4;
        $subscribers = 4;
        $allSubscribers = 4;
        $courses = 44;
        return view('index', [
            'users' => $users,
            'subscribers' => $subscribers,
            'allSubscribers' => $allSubscribers,
            'courses' => $courses,
        ]);
    }

    public function myProfile()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }

    public function update_profile(UserUpdateRequest $request): RedirectResponse
    {
        $user = auth()->user();
        $user->update($request->validated());
        session()->flash('success', 'تم تعديل البيانات بنجاح');
        return back();
    }

    public function printInvoice(Invoice $invoice)
    {
        return view('print_invoice', compact('invoice'));
    }

    public function myInvoices(Request $request)
    {
        $invoices = [];
        $customer = auth()->user();
        if ($customer) {
            $invoices = $customer->invoices()->when($request->q, function ($q) use ($request) {
                $q->where('number', $request->q);
            })->get();
        }
        return view('welcome', compact('invoices'));
    }

    public function getCustomers()
    {
        $items = User::where('type', 'customer')->get();
        return view('customers', compact('items'));
    }

    public function getStores()
    {
        $items = User::where('type', 'store')->get();
        return view('stores', compact('items'));
    }

    public function all_invoices()
    {
        $items =  Invoice::get();
        return view('invoices', compact('items'));
    }
}
