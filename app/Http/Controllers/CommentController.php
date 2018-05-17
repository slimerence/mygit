<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class CommentController extends Controller
{
    public function add(Request $request){
        return redirect('/');
    }
}
