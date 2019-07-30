<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class ToDosController extends Controller
{

    public function index () {
        


        return view('todos.index')->with('todos', Todo::all());
    }

    public function show ($todoId) {

        return view('todos.show')->with('todo', Todo::find($todoId));

    }

    public function create() {
        return view('todos.create');
    }
    public function store(){

        $data = request()->all();

        $todo = new Todo();

        $todo->name = $data['name'];

        $todo-> description = $data['description'];


        $todo->save();
    
    }
}
