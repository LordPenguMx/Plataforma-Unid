<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmisionesController extends Controller
{    

    function Index()
    {
        return view ('admisiones\administracion\lgrupo.blade.php');
    }

}

