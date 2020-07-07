@extends('layout.app');
@section('content')



@if( isset($notFound))


<div class="bg-danger"> Your url not found </div>


@endif



<div class="container bg-dark h-50">

    <div class="row mt-5">


        <div class="col col-12 text-light  mt-5">




            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Url</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Url">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">custom Url</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="custom Url">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>




        </div>


    </div>



</div>






@endsection