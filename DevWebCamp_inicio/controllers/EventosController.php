<?php

namespace Controllers;

use Model\Categoria;
use Model\Dia;
use Model\Hora;
use MVC\Router;

class EventosController {

    public static function index(Router $router) {
        $router->render('admin/eventos/index', [
            'titulo' => 'Citas'
        ]);
    }
    public static function crear(Router $router) {
        
        $alertas = [];

        $categorias = Categoria::all('ASC');
        $dias = Dia::all('ASC');
        $horas = Hora::all('ASC');
        
        $router->render('admin/eventos/crear', [
            'titulo' => 'Registrar cita',
            'alertas' => $alertas,
            'categorias' => $categorias,
            'dias' => $dias,
            'horas' => $horas
        ]);
    }
}    