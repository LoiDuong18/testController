<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class youtube extends Controller
{
    public function index($request)
    {
      return ["request" =>$request];
    }
    public function setcookie()
    {
      $response = new Response();
      $response ->withcookie('hahha','hooo',0.1);
      return $response;
    }
    public function getcookie(Request $request)
    {
      return $request->cookie('hahha');
    }
}
