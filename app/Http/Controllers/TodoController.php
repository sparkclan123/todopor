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
     return view('todo.create');

  }

  public function store(Request $request)
  {

    Todo::create([
      'title'=>$request->title,
      'url'=>$request->url,
      'description'=>$request->description,
      'status'=>'open',
      'date'=>$request->date,
      'user_id' => auth()->user()->id

    ]);
    return redirect('todo');
    }


public function edit($id)
{
$todo = Todo::find($id);
return view('todo.edit', compact('todo'));
}


public function update(Request $request,$id )
{
  $todo = Todo::find($id);
  $todo->update([
    'title' => $request->title,
    'url' => $request->url,
    'description' => $request->description,
    'date' => $request->date,
    'user_id' => auth()->user()->id
  ]);
return redirect('todo');
}

public function destroy($id)
{
  $todo = Todo::find($id);
  $todo->delete();
  return redirect('todo');
}

public function status($id)
{
  $todo = Todo::find($id);

  if ($todo->status == 'open') {
    $todo->update(['status' => 'close']);
  } else {
    $todo->update(['status' => 'open']);
  }
  return redirect('todo');
 }








}
