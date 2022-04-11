@extends('layouts.app')
@section('content')
<div class="container">
    <b>Author : </b>{{$photo->name}} <span style="margin-left:30px"></span>
    <b>Email : &nbsp;</b>{{$photo->email}}</p>
    <p> <img src="{{asset('images/photog/'. $photo->photo)}}"  width="1300" height="500"></p>
    Created At : {{$photo->created_at}}
    <br>
    <a href="../"><button class="btn btn-primary"><- Back</button></a>
</div>
@endsection('content')
