<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Client\Request;
use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
//use App\Http\Controllers\

class ContactanosController extends Controller
{
    //
    public function index (){
        return view('contactanos.index');
        
//header("location:welcome.php");

    }
    public function store (Request $request){
        $correo= new ContactanosMailable($request->all());
        Mail::to("juan.jose.netacad@gmail.com")->send($correo);
        return "mensaje enviado";
    }
};

