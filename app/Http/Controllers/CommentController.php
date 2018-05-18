<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Comment;

class CommentController extends Controller
{
    public function add(Request $request){
        dd($request->all());

        $content = Comment::create($request->get('comment'));
        return redirect('/');
    }
}
