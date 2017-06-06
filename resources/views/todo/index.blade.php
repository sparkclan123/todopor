@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="/css/suwit.css">
<div class="container">
  <h1>Todo</h1>
  <table class="table table-striped">

  <tr>
    <th>id</th>
    <th>TiTle</th>
    <th>URL</th>
    <th>DesCriPtion</th>
    <th>Status</th>
    <th>ปุ่ม</th>
    <th>Action</th>
  </tr>
  <a href="todo/create" type="text" class="btn btn-lg btn-primary">ADD</a href="/">


  @foreach ($todos as $todo )


  <tr>
    <td>{{$todo->id}}</td>
    <td>{{$todo->title}}</td>
    <td>{{$todo->url}}</td>
    <td>{{$todo->description}}</td>
    <td>{{$todo->status}}</td>

    <td>
      <form method="post" action="/todo/{{ $todo->id}}/kuy">
      <input name="_token" type="hidden" value="{{ csrf_token() }}">
      <input name="_method" type="hidden" value="DELETE">
        <button type="submit" class="btn  btn-lg btn-danger">chang</button>
    </form>
   </td>

    <td>
        <form method="post" action="/todo/{{ $todo->id}}">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <input name="_method" type="hidden" value="DELETE">

      <a href="/todo/{{$todo->id}}/edit" type="text" class="btn btn-lg btn-default">Edit
      </a>
        <button type="submit" class="btn  btn-lg btn-danger">Delete</button>
      </form>
    </td>
  </tr>
    @endforeach
</table>
{{$todos->links()}}

</div>
@endsection
