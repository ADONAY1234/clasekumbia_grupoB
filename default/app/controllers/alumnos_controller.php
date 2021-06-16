<?php
class AlumnosController extends AppController
{
    public function index($pages = 1);
    {
       view::template('pantalla'); 
       $this->titulo = (Listado Alumnos);

        $this->listAlumnos= (new Alumnos)->getAlumnos($pages);
    }
    public function contactos ();
    {
        view::template('pantalla'); 

        

    }
    public function create ();
        View::template('pantalla');
        if Input::hasPost('alumnos'); {
    }
            $alumno = Alumnos Input:post('alumnos');
            else {
                Flash::error('Alumno';)
                Input::delete();
            }           
        
    }
    public funtion edil(id){
        $alumno= new Alumnnos();
        if(Input::hasPost('alumnos')){
            if($alumnos-> Input::('post alumnos') ){
                flash::reld('Alumno Actualizado con esto');

        }

    }
}