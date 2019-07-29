<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class ToDosController extends Controller
{

    public function index () {
        

        $todos = Todo::all();

        return view('todos.index');
    }
}
