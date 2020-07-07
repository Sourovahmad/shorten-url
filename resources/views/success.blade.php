
@extends('layout.app');
@section('content')




<div class="alert alert-success">
  <strong>Success!</strong> Your current url : {{$url->url}} </br>

  Your shorten url  :
{{$url->shorten}}
</div>


       





  @endsection