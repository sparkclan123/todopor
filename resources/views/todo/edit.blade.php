 @extends('layouts.app')

@section('content')
  <link rel="stylesheet" media="all" type="text/css" href="{{ asset('car/jquery-ui.css')}} "/>
  <link rel="stylesheet" media="all" type="text/css" href="{{ asset('car/jquery-ui-timepicker-addon.css')}}" />
<script src="{{ asset('car/jquery-1.10.2.min.js') }}"></script>
  <script src="{{ asset('car/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('car/jquery-ui-timepicker-addon.js') }}"></script>
    <script src="{{ asset('car/jquery-ui-sliderAccess.js') }}"></script>

  <script type="text/javascript">
$(function(){
  $("#dateInput").datepicker({
    dateFormat: 'yy-mm-dd'
  });
});
</script>
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


  <<div>
<input type="text" name="date" id="dateInput" value="{{ $todo->date}}" />
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
@endsection
