<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\MessageController;

class MessageController extends Controller;


public function showAll() {
    return view('messages');
}