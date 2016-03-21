<?php

class administrativoController extends BaseController{
    public function getDatos()
    {
        return Auth::user()->personal;
    }
    
    public function inicio()
    {
        if(Request::method()=="GET")
        {
            return View::make('administrativo',$this->getDatos());
        }
    }
    
    public function profesores()
    {
        if(Request::method()=="GET")
        {
            return View::make('profesores',$this->getDatos());
        }
    }
    
    public function registrarProfesor()
    {
        if(Request::method()=="GET")
        {
            return View::make('registrarProfesor',$this->getDatos());
        }
        else
        {
            return $this->saveProfesor();
        }
    }
    
    public function saveProfesor()
    {
        $rules=array(
            'curp'=>'required',
            'nombre'=>'required',
            'ap_pa'=>'required',
            'ap_ma'=>'required',
            'tel_par'=>'required',
            'tel_cel'=>'required',
            'email'=>'required',
            'calle'=>'required',
            'numero'=>'required',
            'colonia'=>'required',
            'cod_pos'=>'required',
            'estado'=>'required',
            'cat_fun'=>'required',
            'funcion'=>'required',
            'situ'=>'required',
            'comentarios'=>'required',
            'imagen'=>'required'
        );
        
        $validacion=Validator::make(Input::all(),$rules);
        if($validacion->fails())
            return $validacion->messages();
        
        else
        {
            $file = Input::file('imagen');
            $destino = public_path(). '/media/imagenes/';
            $url_imagen = $file->getClientOriginalName();
            $subir = $file->move($destino,$file->getClientOriginalName());
            
            /*$profesor = new Profesor();
            $profesor-> = Input::get('curp');
            $profesor-> = Input::get('nombre');
            $profesor-> = Input::get('ap_pa');
            $profesor-> = Input::get('ap_ma');
            $profesor-> = Input::get('tel_par');
            $profesor-> = Input::get('tel_cel');
            $profesor-> = Input::get('email');
            $profesor-> = Input::get('calle');
            $profesor-> = Input::get('numero');
            $profesor-> = Input::get('colonia');
            $profesor-> = Input::get('cod_pos');
            $profesor-> = Input::get('estado');
            $profesor-> = Input::get('cat_fun');
            $profesor-> = Input::get('funcion');
            $profesor-> = Input::get('situ');
            $profesor-> = Input::get('comentarios');
            $profesor->imagen = $url_imagen;
            $profesor->save();*/
            
            return Redirect::to('/profesores')->with('status', 'registro_exitoso');
        }
    }
    
    public function modificarProfesor()
    {
        if(Request::method()=="GET")
        {
            return View::make('modificarProfesor',$this->getDatos());
        }
        else
        {
            return $this->buscarProfesorModificar();
        }
    }
    
    public function buscarProfesorModificar()
    {
        $nombre = Input::get('nombre');
        $ap_pa = Input::get('ap_pa');
        $ap_ma = Input::get('ap_ma');
        
        $profesor = DB::table('')->where("nombre", "=", "$nombre")->where("apellido_paterno", "=", "ap_pa")->where("apellido_materno", "=", "ap_ma")->get();
        if(empty($profesor))
        {
            return Redirect::to('/profesores')->with('status', 'registro_no_encontrado');
        }
        else
        {   
            $profe = array('profe' => $profesor);
            return View::make('infoProfesorModificar',$profe);
        }
    }
    
    public function infoProfesorModificar()
    {
        if(Request::method()=="GET")
        {
            return View::make('infoProfesorModificar',$this->getDatos());
        }
        else
        {
            return $this->editarProfesor();
        }
    }
    
    public function editarProfesor()
    {
        
        $rules = array(
            
            'curp' => 'required',
            'nombre' => 'required',
            'ap_pa' => 'required',
            'ap_ma' => 'required',
            'tel_par' => 'required',
            'tel_cel' => 'required',
            'email' => 'required',
            'calle' => 'required',
            'numero' => 'required',
            'colonia' => 'required',
            'cod_pos' => 'required',
            'estado' => 'required',
            'cat_fun' => 'required',
            'funcion' => 'required',
            'situ' => 'required'
            
        );
        
        $validation = Validator::make(Input::all(), $rules);
        if($validation->fails())
        {
            return Redirect::back()->with_input()->with_errors($validation);
        }
        
        /*$profesor = ::find(Input::get('id'));
        $profesor->  = Input::get('curp');
        $profesor->  = Input::get('nombre');
        $profesor->  = Input::get('ap_pa');
        $profesor->  = Input::get('ap_ma');
        $profesor->  = Input::get('tel_par');
        $profesor->  = Input::get('tel_cel');
        $profesor->  = Input::get('email');
        $profesor->  = Input::get('calle');
        $profesor->  = Input::get('numero');
        $profesor->  = Input::get('colonia');
        $profesor->  = Input::get('cod_pos');
        $profesor->  = Input::get('estado');
        $profesor->  = Input::get('cat_fun');
        $profesor->  = Input::get('funcion');
        $profesor->  = Input::get('situ');
        $profesor->Save();*/
        
        return Redirect::to('/directorioProfesores')->with('status', 'profesor_editado');
        
    }
    
    public function eliminarProfesor()
    {
        if(Request::method()=="GET")
        {
            return View::make('eliminarProfesor',$this->getDatos());
        }
        else
        {
            return $this->buscarProfesorEliminar();
        }
    }
    
    public function buscarProfesorEliminar()
    {
        $nombre = Input::get('nombre');
        $ap_pa = Input::get('ap_pa');
        $ap_ma = Input::get('ap_ma');
        
        $profesor = DB::table('')->where("nombre", "=", "$nombre")->where("apellido_paterno", "=", "ap_pa")->where("apellido_materno", "=", "ap_ma")->get();
        if(empty($profesor))
        {
            return Redirect::to('/profesores')->with('status', 'registro_no_encontrado');
        }
        else
        {   
            $profe = array('profe' => $profesor);
            return View::make('infoProfesorEliminar',$profe);
        }
    }
    
    public function infoProfesorEliminar()
    {
        if(Request::method()=="GET")
        {
            return View::make('infoProfesorEliminar',$this->getDatos());
        }
        else
        {
            return $this->eliminarProfe();
        }
    }
    
    public function eliminarProfe()
    {
        
        
        
        return Redirect::to('/directorioProfesores')->with('status', 'profesor_eliminado');
        
    }
    
    public function alumnos()
    {
        if(Request::method()=="GET")
        {
            return View::make('alumnos',$this->getDatos());
        }
    }
    
    public function registrarAlumno()
    {
        if(Request::method()=="GET")
        {
            return View::make('registrarAlumno',$this->getDatos());
        }
        else
        {
            return $this->saveAlumno();
        }
    }
    
    public function saveAlumno()
    {
        $rules=array(
            'curp'=>'required',
            'nombre'=>'required',
            'ap_pa'=>'required',
            'ap_ma'=>'required',
            'sexo'=>'required',
            'taller'=>'required',
            'tel_cel'=>'required',
            'tel_emer'=>'required',
            'nombre_tr'=>'required',
            'ap_pa_tr'=>'required',
            'ap_ma_tr'=>'required',
            'tel_par_tr'=>'required',
            'tel_cel_tr'=>'required',
            'calle_tr'=>'required',
            'numero_tr'=>'required',
            'colonia_tr'=>'required',
            'cod_pos_tr'=>'required',
            'estado_tr'=>'required',
            'disc'=>'required',
            'peso'=>'required',
            'talla'=>'required',
            'med_apr'=>'required',
            'med_res'=>'required',
            'tip_san'=>'required',
            'serv_medic'=>'required',
            'num_afi'=>'required',
            'res_fis'=>'required',
            'imagen'=>'required'
        );
        
        $validacion=Validator::make(Input::all(),$rules);
        if($validacion->fails())
            return $validacion->messages();
        
        else
        {
            $file = Input::file('imagen');
            $destino = public_path(). '/media/imagenes/';
            $url_imagen = $file->getClientOriginalName();
            $subir = $file->move($destino,$file->getClientOriginalName());
            
            /*$alumno = new Alumno();
            $alumno-> = Input::get('curp');
            $alumno-> = Input::get('nombre');
            $alumno-> = Input::get('ap_pa');
            $alumno-> = Input::get('ap_ma');
            $alumno-> = Input::get('sexo');
            $alumno-> = Input::get('taller');
            $alumno-> = Input::get('tel_cel');
            $alumno-> = Input::get('tel_emer');
            $alumno-> = Input::get('nombre_tr');
            $alumno-> = Input::get('ap_pa_tr');
            $alumno-> = Input::get('ap_ma_tr');
            $alumno-> = Input::get('tel_par_tr');
            $alumno-> = Input::get('tel_cel_tr');
            $alumno-> = Input::get('calle_tr');
            $alumno-> = Input::get('numero_tr');
            $alumno-> = Input::get('colonia_tr');
            $alumno-> = Input::get('cod_pos_tr');
            $alumno-> = Input::get('estado_tr');
            $alumno-> = Input::get('disc');
            $alumno-> = Input::get('peso');
            $alumno-> = Input::get('talla');
            $alumno-> = Input::get('med_apr');
            $alumno-> = Input::get('med_res');
            $alumno-> = Input::get('tip_san');
            $alumno-> = Input::get('serv_medic');
            $alumno-> = Input::get('num_afi');
            $alumno-> = Input::get('res_fis');
            $alumno->imagen = $url_imagen;
            $alumno->save();*/
            
            return Redirect::to('/alumnos')->with('status', 'registro_exitoso');
        }
    }
    
    public function modificarAlumno()
    {
        if(Request::method()=="GET")
        {
            return View::make('modificarAlumno',$this->getDatos());
        }
        else
        {
            return $this->buscarAlumno();
        }
    }
    
    public function buscarAlumno()
    {
        $nombre = Input::get('nombre');
        $ap_pa = Input::get('ap_pa');
        $ap_ma = Input::get('ap_ma');
        
        $alumno = DB::table('')->where("nombre", "=", "$nombre")->where("apellido_paterno", "=", "ap_pa")->where("apellido_materno", "=", "ap_ma")->get();
        if(empty($alumno))
        {
            return Redirect::to('/alumnos')->with('status', 'registro_no_encontrado');
        }
        else
        {   
            $alum = array('alum' => $alumno);
            return View::make('editarAlumno',$profe);
        }
    }
    
    public function eliminarAlumno()
    {
        if(Request::method()=="GET")
        {
            return View::make('eliminarAlumno',$this->getDatos());
        }
    }
    
    public function usuarios()
    {
        if(Request::method()=="GET")
        {
            return View::make('usuarios',$this->getDatos());
        }
    }
    
    public function registrarUsuario()
    {
        if(Request::method()=="GET")
        {
            return View::make('registrarUsuario',$this->getDatos());
        }
    }
    
    public function modificarUsuario()
    {
        if(Request::method()=="GET")
        {
            return View::make('modificarUsuario',$this->getDatos());
        }
    }
    
    public function eliminarUsuario()
    {
        if(Request::method()=="GET")
        {
            return View::make('eliminarUsuario',$this->getDatos());
        }
    }
    
    public function inventario()
    {
        if(Request::method()=="GET")
        {
            return View::make('inventario',$this->getDatos());
        }
    }
    
    public function directorios()
    {
        if(Request::method()=="GET")
        {
            return View::make('directorios',$this->getDatos());
        }
    }
    
}