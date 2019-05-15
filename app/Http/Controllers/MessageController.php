<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;

class MessageController extends Controller
{
    public function index()
    {
        return Message::all();
    }
}
