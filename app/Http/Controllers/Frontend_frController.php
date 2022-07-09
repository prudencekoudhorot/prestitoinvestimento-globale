<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Frontend_frController extends Controller
{
    //
    public function index_fr()
    {
        return view('frontend_fr/index');
    }
    public function apropos()
    {
        return view('frontend_fr/apropos');
    }
    
    public function temoignages()
    {
        return view('frontend_fr/temoignages');
    }
    public function contact()
    {
        return view('frontend_fr/contact');
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
            Mail::to($email)->queue(new Contact($contenu));

            return redirect()->route('accueil')->with('success', 'Mail envoyé avec succès.');

        } catch(\Exception $e){
             //Get error here
            //Auth::login($user);
            return redirect()->route('accueil')->with('Error', 'Echec d\'envoie du mail');



}

    }
}
