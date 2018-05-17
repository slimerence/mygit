<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class HomeController extends Controller
{
    public function home(){
        $messages=Message::all();
        //dd($messages);
        return view('index',['messages'=>$messages]);
    }

    public function update(Request $request){
        //$message = Message::create([$request->all()]);
        $message = Message::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'comment'=>$request->comment,
        ]);

        return redirect ('/');
    }

    public function destroy(Request $request, Message $message){
        $message->delete();
        return redirect('/');
    }
}
