<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmisionesController extends Controller
{    

    function Index()
    {
        return view ('Admisiones/Administracion/LGrupo.blade.php');
    }

}

