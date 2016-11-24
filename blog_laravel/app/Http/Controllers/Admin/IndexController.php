<?php

namespace blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use blog\Http\Controllers\Controller;


class IndexController extends Controller
{
  public function index()
    {
		    return view("admin.admin");
    }
}
