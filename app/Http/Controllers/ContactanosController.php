<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }
    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    $email = new ContactanosMailable($request->all());
    Mail::to('levifv.barcelona@gmail.com')->send($email);

    return redirect()->route('contactanos.index')->with('info','message sent');
    }
}
