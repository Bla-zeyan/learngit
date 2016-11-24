<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use blog\Http\Requests;

class LoginController extends Controller
{
    public function login()
    {

      if ($inputs = Input::all()) {
        # code...

        dd($inputs);
      }else {
        # code...
        return view('login');
      }
    }

}
