<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instance; 

class LinkController extends Controller
{
    public function getLink(){
        //Exemple d'envoie donnée Json vers côté frontend. A chnager en fonction des utilisateurs.
        return response()->json(['link' => 'https://kyfrcorporation.with7.dolicloud.com']);
    }
}
