@extends('layout.app');
@section('content')
      

<div class="container" style="margin-top:200px;">
          
<div class="row">
        
<p> please wait we are making your url in =  <span id="countdowntimer">10 </span> Seconds</p>

<script type="text/javascript">
    var timeleft = 10;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>


<a href="{{$mainUrl->url}}">go tu url </a>

</div>
 
</div>


@endsection