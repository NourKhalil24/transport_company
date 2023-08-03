<?php

namespace App\Http\Controllers;
use App\Models\ContactNOOR;

class contactController extends Controller
{
    
    

    public function show(){
        $contact=ContactNOOR::select('id','user_id','email','comment')->get();
        return view('contact.show',compact( 'contact'));
    }
    }