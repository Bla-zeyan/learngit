<?php

namespace blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use blog\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use blog\Model\User;

class UserController extends Controller
{

  public function login()
  {
    if($data=Input::all()){

      if($data['yzm']!=Session::get('phrase')){
        return back()->with('massage','验证码有误');
      }
      // 验证帐号和密码
       $list=User::first();
         if($data['uname']!=$list->uname||$data['psw']!=$list->psw)
         {
           return back()->with('massage','用户名或密码错误');
         }
      // dump($list);
      // dd($list->uname);
        Session::set('uname',$data['uname']);
        return redirect()->route('index');

    }else {
      return view("admin.login");
    }

  }

  public function outlogin()
  {
      Session::set('uname',null);
      return redirect()->route('login');
  }

  public function code()
  {
    $builder = new CaptchaBuilder;
    $builder->build(150,32);
    Session::set('phrase',$builder->getPhrase()); //存储验证码
    return response($builder->output())->header('Content-type','image/jpeg');

  }


}
