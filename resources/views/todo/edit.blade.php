@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit</h1>

    <form method="post" action="/todo/{{ $todo->id}}">
    {{ csrf_field() }}

  <div class="form-group">
    <label for="title">TITLE</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="title" value="{{ $todo->title}}">
  </div>

  <div class="form-group">
    <label for="url">URL</label>
    <input type="text" class="form-control" name="url" id="url" placeholder="www.xample.com"value="{{ $todo->url}}">
  </div>

  <div class="form-group">
    <label for="description">DesCriPtion</label>
    <input type="text" class="form-control" name="description" id="description" placeholder="description"value="{{ $todo->description}}">
  </div>

  <button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
@endsection
