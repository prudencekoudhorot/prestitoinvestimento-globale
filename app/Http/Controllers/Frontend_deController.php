<?php

namespace App\Http\Controllers;

use App\Mail\Contact_de;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Frontend_deController extends Controller
{
    //
     //
     public function index_de()
     {
         return view('frontend_de/index');
     }
     public function apropos()
     {
         return view('frontend_de/apropos');
     }
     
     public function temoignages()
     {
         return view('frontend_de/temoignages');
     }
     public function contact()
     {
         return view('frontend_de/contact');
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
             Mail::to($email)->queue(new Contact_de($contenu));
 
             return redirect()->route('accueil_de')->with('success', 'Mail erfolgreich gesendet.');
 
         } catch(\Exception $e){
              //Get error here
             //Auth::login($user);
             return redirect()->route('accueil_de')->with('Error', 'E-Mail konnte nicht gesendet werden');
 
 
 
 }
 
     }
}
