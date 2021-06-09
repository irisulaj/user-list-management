<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
            $title = 'User registration app!';
 
        return view('pages.index') ->with('title', $title);
    }

    public function login(){
        $title = 'User Login';
    
    return view('pages.login') ->with('title', $title);
}

public function addusers(){
    $title = 'Add Users';

return view('pages.users') ->with('title', $title);
}

    
}
