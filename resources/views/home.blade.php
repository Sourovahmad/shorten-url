@extends('layout.app');
@section('content')


  
@if( isset($notFound))


<div class="bg-danger"> Your url not found </div>


@endif
  






<section class="full-width-content text-content url-shorten-row" style="background-image:url();background-color:#0b1736;height: 122px;
margin-top: 155;">
  <div class="grid-container">
    <div class="inner-content grid-x grid-margin-x grid-padding-x">
      <div class="cell">
        <div id="form_container" class="t-center mid-container foot-room">

          <form class="form-inline" method="post" action="{{route('urlstore')}}">
            @csrf
            <div class="form-group" style="height: 122px; margin-left:204px; padding: 29px">
              <label for="exampleInputEmail1">Enter your URL :</label>
              <input type="text" class="form-control" id="url" name="url" placeholder="Enter url">

            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Shorten Url :</label>
              <input type="text" class="form-control" name="shorten" placeholder="enter short url">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


          </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
             


</section>




@endsection