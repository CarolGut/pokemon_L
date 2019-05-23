<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class tsController extends Controller{
    //
    public function prueba ($pr){
        return 'Estoy dentro de  prueba controller  y recibi este parametro '. $pr;
    }
}
