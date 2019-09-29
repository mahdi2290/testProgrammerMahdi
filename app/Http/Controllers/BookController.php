<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BookController extends Controller
{
  public function book() {
      $data = "Semua data";
      return response()->json($data, 200);
  }

  public function bookAuth() {
      $data = "Hi, " . Auth::user()->name;
      return response()->json($data, 200);
  }
}
