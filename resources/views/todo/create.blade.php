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
    <h1>Create</h1>

    <form method="post" action="/todo">
    {{ csrf_field() }}

  <div class="form-group">
    <label for="title">TITLE</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="title">
  </div>

  <div class="form-group">
    <label for="url">URL</label>
    <input type="text" class="form-control" name="url" id="url" placeholder="www.xample.com">
  </div>

  <div class="form-group">
    <label for="description">URL</label>
    <input type="text" class="form-control" name="description" id="description" placeholder="description">
  </div>


      <div>
    <input type="text" name="date" id="dateInput" value="" />
      </div>



  <center><button type="submit" class="btn btn-primary">Submit</button></center>
</form>
</div>
@endsection
