@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table table-striped">
  <h1>Todo</h1>
  <tr>
    <th>id</th>
    <th>TiTle</th>
    <th>URL</th>
    <th>DesCriPtion</th>
    <th>Action</th>
  </tr>
  <a href="todo/create" type="text" class="btn btn-lg btn-primary">ADD</a href="/">
  @foreach ($todos as $todo )


  <tr>
    <td>{{$todo->id}}</td>
    <td>{{$todo->title}}</td>
    <td>{{$todo->url}}</td>
    <td>{{$todo->description}}</td>
    <td><a href="todo/{{$todo->id}}/edit" type="text" class="btn btn-lg btn-default">Edit</a href="/">
        <a href="#" type="text" class="btn btn-lg btn-danger" >delete</a href="/">
    </td>
  </tr>
    @endforeach
</table>
{{$todos->links()}}

</div>
@endsection
