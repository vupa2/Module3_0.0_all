<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class AuthController extends Controller
{
    public function show()
    {
        if (session()->has('login')) {
            return redirect()->back();
        }
        return view('auth_fake.frontend.login');
    }

    public function login(Request $request)
    {
        // Lấy thông tin đang nhập từ request gửi lên từ trình duyệt
        $username = $request->username;
        $password = $request->password;

        // Kiểm tra thông tin đăng nhập
        if ($username === 'admin' && $password === '123456') {

            //Nếu thông tin đăng nhập chính xác, Tạo một Session xác nhận đăng nhập thành công
            session()->push('login', true);

            // Đi đến route show.blog, để chuyển hướng người dùng đến trang blog
            return redirect()->route('posts.index');
        }

        // Nếu thông tin đăng nhập không chính xác, gán thông báo vào Session
        $message = Lang::get('failed login');
        session()->flash('login-fail', $message);

        // Quay trở lại trang đăng nhập
        return redirect()->route('auth.show');
    }

    public function logout(Request $request)
    {
        // Xóa Session login, đưa người dùng về trạng thái chưa đăng nhập
        $request->session()->forget(['login', 'login-fail']);
        return redirect()->route('posts.index');
    }
}
