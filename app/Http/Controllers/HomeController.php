<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Obtenemos los formularios que ha completado el usuario
        $forms = Auth::user()->forms;

        //obtenemos la fecha actual
        $actual_month = date('M');

        //Seteamos el valor de que no se ha realizado ningun formulario
        $form_completed = false;

        foreach($forms as $form){
            //Si se ha realizado algún formulario este mes retornamos true
            if($form->created_at->format('M') == $actual_month)
                $form_completed = true;
        }

        $last_form = Auth::user()->forms->last();

        //Retornamos valor a la vista de si completo o no un formulario este mes
        return view('home')->with('form_completed',$form_completed)->with('last_form',$last_form);
    }
}
