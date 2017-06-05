<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
  public function index()
  {


    $todos = Todo::paginate(10);
    return view('todo.index', compact('todos'));


    //dd($todos);

    //return 'hello';

  }

  public function create()
  {
     return view('Todo.create');

  }


 }
