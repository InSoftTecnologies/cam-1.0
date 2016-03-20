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
    }
    
    public function registrarse()
    {
        if(Request::method()=="GET")
        {
            return View::make('registrarse');
        }
    }
    
}