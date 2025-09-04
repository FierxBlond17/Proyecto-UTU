<?php

namespace App\Controllers;
use App\Core\Controller;    

class PruebaController extends Controller
{
    // Método para manejar la ruta principal de este controlador
    public function index()
    {
        return $this->render('prueba', [
            'title' => 'Página de Prueba mi bro'
        ]);
    }

}