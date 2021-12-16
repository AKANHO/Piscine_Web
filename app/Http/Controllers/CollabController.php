<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollabController extends Controller
{
    public function createUserCollab(Request $request)
    {
        return view('collaborateurs.createCollab');
    }

    public function UserCollab(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);
    }

    public function strore(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|email',
            'email' => 'bail|required|max:500'
        ]);

        $collaborateur = new \App\Models\collaborateur;
        $collaborateur->email = $request->names;
        $collaborateur->message = $request->email;
        $collaborateur->save();
        
        return "C'est bien enregistré !";
    }
}
