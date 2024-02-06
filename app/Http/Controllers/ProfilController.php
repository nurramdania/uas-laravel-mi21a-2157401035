<?php

namespace App\Http\Controllers;


use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class ProfilController extends Controller
{
    function Profil() {
        return view('Profil');
    }
}
