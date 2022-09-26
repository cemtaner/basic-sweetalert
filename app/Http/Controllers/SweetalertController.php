<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends Controller
{
    public function formSubmit()
    {
       
        //return redirect()->route('home')->with(['success'=> 'Your Transaction Completed!']);

        //return back()->with(['success'=> 'Your Transaction Completed!']);

        //return redirect()->route('home')->withErrors(['message'=> 'Your Transaction Could Not Be Completed!']);
        
        //return back()->withErrors(['message'=> 'Your Transaction Could Not Be Completed']); 
    }
}
