<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Comment;

class HomeController extends Controller
{
    public function home(){
        $messages=Message::all();
        $comments=Comment::all();
        //dd($messages);
        return view('index',['messages'=>$messages,'comments'=>$comments]);
    }

    public function update(Request $request){
        //$message = Message::create([$request->all()]);
        //dd($request->all());
        $message = Message::create($request->get('message'));


        return redirect ('/');
    }

    public function destroy(Request $request, Message $message){
        if($message->delete())
            return redirect('/');
    }
}
