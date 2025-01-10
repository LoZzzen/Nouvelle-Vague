<?php
namespace App\Controllers;

class MonControleur extends BaseController{
   
    public function index()
    {
        return view('index')
        .view('style');
    }

    public function lesTF()
    {
        return view('index')
        .view('tempFort');
    }
    public function connexion()
    {
        return view('index')
        .view('connexion');
    }
}
