<?php

namespace App\Http\Controllers;

use App\Mail\Contact_it;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Frontend_itController extends Controller
{
    //
     //
     public function index()
     {
         return view('frontend_it/index');
     }
     public function apropos()
     {
         return view('frontend_it/apropos');
     }
     
     public function temoignages()
     {
         return view('frontend_it/temoignages');
     }
     public function contact()
     {
         return view('frontend_it/contact');
     }
 
     public function store(Request $request)
     {
       //
 
         //$request->validate([
             
            // 'g-recaptcha-response' => 'recaptcha',
         //]);
         
         $contenu = [
             'name' => $request->name,
             'email' => $request->email ,
             'subject' => $request->subject,
             'message'=>$request->message,
         ];
 
         $email = 'contact@prestitoinvestimento-globale.org';
 
 
         try{
             # code...
             Mail::to($email)->queue(new Contact_it($contenu));
 
             return redirect()->route('accueil_it')->with('success', 'Posta inviata con successo.');
 
         } catch(\Exception $e){
              //Get error here
             //Auth::login($user);
             return redirect()->route('accueil_it')->with('Error', 'Impossibile inviare e-mail');
 
 
 
 }
 
     }
}
