<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage( string $locale) {
        dd('maintenant');
        // Sauvegarde de la valeur locale dans la session
        Session::put('local',$locale);

        // Redirection sur la page courant 
        return redirect()->back();
    }

    }
