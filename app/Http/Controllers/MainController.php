<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Config;
use App\Posts;
use App\User;
use Mail;

class MainController extends Controller
{
    
  /**
  * Get home page
  */
  public function getHome() {

    return view('home', $this->data);
  }

}
