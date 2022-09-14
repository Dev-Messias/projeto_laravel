<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //rota principal
    public function index() {
        $nome = "Messias";
        $idade = 25;
    
        $arr = [1,2,3,4,5];
    
        return view('welcome',
         [
            'nome' => $nome, 
            'idade' => $idade, 
            'arr' => $arr
        ]);
    }

    public function create(){
        return View('events.create');
    }
}
