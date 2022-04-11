@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 style="text-align:center"> {{ config('app.name', 'Laravel') }}
        </h1>
        <br>
        @if (session('msg'))
            {
            <p>{{ session('msg') }}</p>
            }
        @endif
        @foreach ($photos as $photo)
            <div class="all-photos col-xs-12 col-sm-12 col-md-6 col-lg-4" style=" box-sizing: border-box;
        float:left;

        margin-bottom:30px;
        margin-right:10p;position:relative">
                <a href="{{ route('showphoto', $photo->id) }}">
                    <img class="photo" src="{{ asset('images/photog/' . $photo->photo) }}" width="100%" height="50%"
                        style="padding:5px"></a>
                <br>
                <div class="links">
                    <a href="{{ route('showphoto', $photo->id) }}" style="margin-left:70px">Details</a>
                    <a href="#">Love</a>
                    <a href="#">Download </a>
                </div>
                <!-- <div class="over" style="position: absolute;background-color:#F00;height:20px;top:300px;margin-left:30px">Download </div> -->
            </div>
        @endforeach
    @endsection
    <div>
