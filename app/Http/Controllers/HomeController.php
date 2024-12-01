<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){
        
        // $email  = [
        //     'title' => 'Đơn hàng của bạn',
        //     'name' => 'Bạn',
        //     'body' => 'nội dung thư:'
        // ];

        // Mail::to('huyvu.ted@gmail.com')->send(new TestMail($email));
        // return 'Mail đã được gửi đi';

        return view('home.index');
    }

    public function contact(){
        return view('home.contact');
    }

    //1. lấy dữ liệu từ đường link
    //2. lấy dữ liệu từ form
    //3. Truyền dữ liệu từ controller ra view
    //4. {{$tên biến }} để hiển thị nội dung
    //5. {!!$ten bien!!} Chuyển nội dung có chứa html thành html

    public function login(Request $res){

        ///tạo tài khoản admin
        //use Illuminate\Support\Facades\Hash; thư viện mã hóa password

        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@itc.edu.vn',
        //     'password' => Hash::make(123456),//Mã hóa password
        //     'role' => 'admin'
        // ]);

        // User::create([
        //     'name' => 'user1',
        //     'email' => 'user1@itc.edu.vn',
        //     'password' => Hash::make(123456),//Mã hóa password
        // ]);


        if($res->isMethod('POST')){


            $user = $res->validate(
                [
                    'name' => 'required',
                    'password' => 'required'
                ]
            ,[
                'name.required' => 'Vui lòng nhập tên tài khoản',
                'password.required' => 'Vui lòng nhập tên tài khoản',
                'password.min' => 'Vui lòng nhập ít nhất 8 ký tự'
            ]);

            if(Auth::attempt($user)){
                //Làm mới Sesion user
                $res->session()->regenerate();

                return redirect()->action([HomeController::class, 'index']);
            }   
        }
        return view('home.login');//Get
    }

    public function logout(Request $request):RedirectResponse {
        Auth::logout();
        //Xóa dữ liệu phiên làm việc hiện tại
        $request->session()->invalidate();
        //Tạo mới mã csrf
        $request->session()->regenerateToken();
        //Chuyển hướng trang web
        return redirect('/');
    }
}
