<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmisionesController extends Controller
{    

    function Administracion()
    {
        return view ('Admisiones/Administracion/LGrupo.blade.php');
    }

}

