@extends('layout.app');
@section('content')



@if( isset($notFound))


<div class="bg-danger"> Your url not found </div>


@endif



<div class="container bg-dark h-50">

    <div class="row mt-5">


        <div class="col col-12 text-light  mt-5">




        <form method="post" action="{{route('urlstore')}}">
            @csrf

                <div class="form-group">
                    <label for="Url">Enter Url</label>
                    <input type="text"    name="url" class="form-control" id="Url" aria-describedby="emailHelp" placeholder="Enter Url">

                </div>
                <div class="form-group">
                    <label for="custom Url">custom Url</label>
                    <input type="text" name="shorten"  class="form-control" id="custom Url" placeholder="custom Url">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>




        </div>


    </div>



</div>






@endsection