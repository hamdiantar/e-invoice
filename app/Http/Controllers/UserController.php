<?php

namespace App\Http\Controllers;

use App\MailGet\SendEmailVerifications;
use App\Models\User;
use App\Services\DatatableService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Throwable;

class UserController extends Controller
{
    /**
     * @var DatatableService
     */
    protected $datatableService;

    /**
     * @param DatatableService $datatableService
     */
    public function __construct(DatatableService $datatableService)
    {
        $this->datatableService = $datatableService;
        $this->middleware('permission:subscriber-read|subscriber-create|subscriber-edit|subscriber-delete', ['only' => ['index','store']]);
        $this->middleware('permission:subscriber-create', ['only' => ['create','store']]);
        $this->middleware('permission:subscriber-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:subscriber-delete', ['only' => ['destroy']]);
    }
    /**
     * @throws Throwable
     */
    public function index(Request $request)
    {
       $items = User::withCount('courses')->where('is_admin', 0);
        if ($request->ajax()) {
            return $this->datatableService->dataTableColumns($items);
        } else {
            return view('users.index', [
                'items' => $items,
                'js_columns' => User::$dataTableColumns,
            ]);
        }
    }

    public function lockUser(User $user): RedirectResponse
    {
        $user->update([
            'status' => 0
        ]);
        session()->flash('success', 'user has been locked successfully');
        $route = request()->has('roles') ? 'users_with_roles.index' : 'users.index';
        return redirect()->route($route);
    }

    public function unlockUser(User $user): RedirectResponse
    {
        $user->update([
            'status' => 1
        ]);
        session()->flash('success', 'user has been locked successfully');
        $route = request()->has('roles') ? 'users_with_roles.index' : 'users.index';
        return redirect()->route($route);
    }

    public function ActivateEmail(User $user): RedirectResponse
    {
        $user->update([
            'email_verified_at' => now()
        ]);
        session()->flash('success', 'E-Mail has been Activated successfully');
        return redirect()->route('users.index');
    }

    public function activateEmailsForAllUsers(): RedirectResponse
    {
        User::where('email_verified_at', null)->update([
            'email_verified_at' => now()
        ]);
        session()->flash('success', 'تم تفعيل كل المشتركيين بنجاح');
        return redirect()->route('users.index');
    }

    public function getUserCourses(User $user): JsonResponse
    {
       $view = view('users.ajax_response', compact('user'))->render();
       return response()->json([
           'view' => $view
       ]);
    }
}
