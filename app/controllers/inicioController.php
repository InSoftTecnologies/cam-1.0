<?php

class inicioController extends BaseController{
    
    public function inicio()
    {
        if(Request::method()=="GET")
        {
            return View::make('index');
        }
    }
    
    public function nosotros()
    {
        if(Request::method()=="GET")
        {
            return View::make('nosotros');
        }
    }
    
    public function contacto()
    {
        if(Request::method()=="GET")
        {
            return View::make('contacto');
        }
    }
    
    public function acceso()
    {
        if(Request::method()=="GET")
        {
            return View::make('login');
        }
        else
        {
            
            if(Auth::attempt(Input::all()))
            {
                return Redirect::intended('/administrativo');
            }
            else
            {
                return View::make('login')->with('status','fallo');
            }
        }
    }
    
    public function registrarse()
    {
        if(Request::method()=="GET")
        {
            return View::make('registrarse');
        }
    }
    public function salir()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}