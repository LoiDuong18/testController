<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
     * Store a new user.
     *
     * @param    Request  $request
     * @return  Response
     */
    public function Store(Request $request)
    {
      $name = $request ->input('name');
    }
}
