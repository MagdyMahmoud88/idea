<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:8'],
        ]);
        if (! Auth::attempt($attributes)) {
            return back()->withErrors(['password' => 'we were unable to authenticate using the provided credentials.'])
                ->withInput();
        }
        $request->session()->regenerate();

        return redirect()->intended('/')->with('success', 'You have successfully logged in');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        //        الوظيفة: يقوم بحذف جميع البيانات الموجودة في الجلسة (Session) الحالية وجعل "معرف الجلسة" (Session ID) غير صالح تماماً.
        $request->session()->invalidate();

        //        هذا السطر مسؤول عن الحماية من هجمات CSRF (تزوير الطلبات عبر المواقع).
        // الوظيفة: يقوم بتوليد "توكن" جديد (CSRF Token) للمستخدم
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have successfully logged out');
    }
}
