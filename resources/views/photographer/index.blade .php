@extends('layouts.app')
@section('content')
<div class="container">
<h1 style="text-align:center"> {{ config('app.name', 'Laravel') }}
</h1>
<br>
@if(session('msg')){
<p>{{session('msg')}}</p>
}
@endif
@foreach($photos as $photo)
<div class="all-photos col-xs-12 col-sm-12 col-md-6 col-lg-4" style=" box-sizing: border-box;
    float:left;
    background-color:#EEE;
    margin-bottom:30px;
    margin-right:10p;
">
              <a href="{{route('singlePhoto',$photographer->id)}}">
                <img src="{{asset('images/photog/'. $photo->photo)}}" 
                 width="100%" height="50%" style="padding:5px">
                </a>
                <br>
                <a href="{{route('showphoto',$photo->id)}}">Details</a>
</div> 
@endforeach
@endsection
<div>
