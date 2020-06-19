<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    function getLogin(){
        return view('admin.accounts.index');
    }
    function postLogin(Request $request){
        // dd($request);
        // $data = [
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ];
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8|max:32'
        ];

        $messages = [
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email phải đúng định dạng',
            'password.required' => 'Password là bắt buộc',
            'password.min' => 'Password tối thiểu 8 kí tự',
            'password.max' => 'Password tối thiểu 32 kí tự',
        ];

        // $validator = Validator::make($request->all(), $rules, $messages);
        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }else{
        //     $email = $request->input('email');
        //     $password = $request->input('password');

        //     if(Auth::attempt(['email' => $email, 'password' => $password])){
        //         dd('dang nhap thanh cong');
        //     }
        // }
        $this->validate($request, $rules, $messages);
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            // return redirect()->route('productbrands.index');
            return redirect()->route('home');
        }else{
            // return redirect()->route('home')->with('thongbao', 'Dang nhap khong thanh cong');
            return redirect()->route('productbrands.index');
            // return redirect()->route('home');
            dd($request);
        }
    }
}
