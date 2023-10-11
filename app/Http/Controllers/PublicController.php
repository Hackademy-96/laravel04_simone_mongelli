<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    //!funzione home page
    public function welcome(){

        $articles = Article::all();
        
        return view('welcome',compact('articles'));

    }
    
    
    //!funzione contatti
    public function contatti(){
        
        return view('contatti');
    }
    
    //!funzione contatti

    public function ringraziamento(){

        return view('ringraziamento');
    }









    public function contattaci_submit(Request $request){

        $email=$request->input('email');
        $name=$request->input('name');
        $message=$request->input('message');

        $user_data = compact('email','name','message');

        
        Mail::to($email)->send(new ContactMail($user_data));
        Mail::to('prestoLove@hack96.com')->send(new AdminMail($user_data));

        return redirect(route('ringraziamento'))->with('message', 'Messaggio inviato! Grazie per averci contattato.');

    }
}
