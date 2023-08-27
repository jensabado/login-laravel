<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function login_submit(Request $request)
    {

        $data = $request->all();

        // echo "<pre>"; print_r($data); die;

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:30',
        ]);

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $data = Admin::where('email', $request->input('email'))
            ->where('is_deleted', 0)
            ->first();

            // echo bcrypt('password123');

        if ($data && $data->status == 0 && Hash::check($request->input('password'), $data->password)) {
            if($request->has('remember')) {
                Cookie::queue('bnhs_admin_email', $request->input('email'), time() + (86400 * 30), '/');
                Cookie::queue('bnhs_admin_password', $request->input('password'), time() + (86400 * 30), '/');
            } else {
                Cookie::queue('bnhs_admin_email', '');
                Cookie::queue('bnhs_admin_password', '');
            }

            Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);
            return redirect()->route('admin.home');
        } else if ($data && $data->status != 0 && Hash::check($request->input('password'), $data->password)) {
            Session::flash('custom_error', 'Your account is disabled.');
            return back()
                ->withInput($request->only('email'));
        } else {
            Session::flash('custom_error', 'Invalid credentials.');
            return back()
                ->withInput($request->only('email'));
        }
    }

    public function logout_submit()
    {
        Auth::logout();

        return redirect('admin/login');
    }
}
