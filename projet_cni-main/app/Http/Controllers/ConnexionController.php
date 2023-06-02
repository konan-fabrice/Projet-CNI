<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    public function connexion(Request $request)
    {
        $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // L'utilisateur est connecté
        return redirect()->intended('/accueil');
    } else {
        // Les informations d'identification sont incorrectes
        return redirect()->back()->withErrors(['message' => 'Identifiants invalides']);
    }
    }
}
