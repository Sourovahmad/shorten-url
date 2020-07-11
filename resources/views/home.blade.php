@extends('layout.app');
@section('content')



@if( isset($notFound))


<div class="bg-danger"> Your url not found </div>


@endif



<div class=" container-fluid ">

    <div class="row  bg-dark m-5 my-5">


        <div class="col col-12 text-light  mt-5 h-100">




            <form method="post" action="{{route('urlstore')}}">
                @csrf

                <div class="form-group">
                    <label for="Url">Enter Your URL</label>
                    <input type="text" name="url" class="form-control" id="Url" aria-describedby="emailHelp" placeholder="Enter Url">

                </div>




                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </form>




        </div>


    </div>



</div>



<div class="container">

    <div class="row jumbotron">

        <div class="col col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">

            <p class="jumbotext">
                A web service is indivisual for your web and everything for you
                theres you can found all of services like web hosting,E-commacre devlopment
                all is here ..

            </p>
        </div>

        <div class="col col-xs-12  col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <button type="button" class="btn btn-outline btn-light btn-lg"> web service</button>


        </div>


    </div>


</div>





@endsection