<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $name = "Fabiano";
        $idade = 18;

        $arr = [10,20,30,40,50];

        $nomes = ["Matheus", "Maria", "João","Saulo"];

        return view('welcome',
        [
            'name' => $name,
            'idade' => $idade,
            'profissao' => 'Programador',
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create(){
        return view('events.create');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
}
