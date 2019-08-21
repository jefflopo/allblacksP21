<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContatoController extends Controller
{
    public function index()
    {
        return view('contato');
    }
    
    public function enviar(Request $request)
    {
        $dadosEmail = array(
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'assunto' => $request->input('assunto'),
            'mensagem' => $request->input('mensagem'),
        );
        
        Mail::send( 'email.contato', $dadosEmail, function($message){
            $message->from('formulario@p21sistemas.net', 'Formulário de Contato');
            $message->subject('Mensagem Enviada pelo formulário de Contato');
            $message->to('jeffersonlopo@gmail.com');
        } );
        
        return redirect('contato')->with('success', 'Mensagem Enviada, em breve entraremos em contato!!');
    }
}
