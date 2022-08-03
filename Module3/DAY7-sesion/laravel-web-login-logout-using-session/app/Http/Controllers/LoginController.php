<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }
    public function login(Request $request){
       
         // Lấy thông tin đang nhập từ request gửi lên từ trình duyệt
    $username = $request->inputUsername;
    $password = $request->inputPassword;

    // dd($request->all());

    // Kiểm tra thông tin đăng nhập
    if ($username == 'admin' && $password == '123456') {

        //Nếu thông tin đăng nhập chính xác, Tạo một Session xác nhận đăng nhập thành công
        $request->session()->put('login', true);

        // Đi đến route show.blog, để chuyển hướng người dùng đến trang blog
        return redirect()->route('show.blog');
    }

    // Nếu thông tin đăng nhập không chính xác, gán thông báo vào Session
    $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
    $request->session()->get('login-fail', $message);

    //Quay trở lại trang đăng nhập
    return view('login');
}
public function store(Request $request)
{
    $this->validate($request, [
        'inputUsername' => 'required',
        'inputPassword' => 'required',
    ]);

    

    // The blog post is valid, store in database...
}
};
