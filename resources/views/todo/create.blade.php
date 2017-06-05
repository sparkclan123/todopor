@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create</h1>

    <form method="post" action="">
  <div class="form-group">
    <label for="title">TITLE</label>
    <input type="text" class="form-control" id="title" placeholder="title">
  </div>

  <div class="form-group">
    <label for="url">URL</label>
    <input type="text" class="form-control" id="url" placeholder="url">
  </div>

  <div class="form-group">
    <label for="description">DesCriPtion</label>
    <input type="text" class="form-control" id="description" placeholder="description">
  </div>

  <button type="submit" class="btn btn-primary">SAVE</button>
</form>
</div>
@endsection
