@extends('layouts.app')
@section('content')

<h1  class="text-center mb-5">{{trans('en.Edit Phone')}}</h1>
@if(session('msg'))
<p class="container alert alert-success">{{session('msg')}}</p>
@endif
@if(session('message'))
<p class="container alert alert-success">{{session('message')}}</p>
@endif
<div class="container">
<form action="{{route('updatePhoto',$photo->id)}}" method="post" enctype="multipart/form-data" class="form-group" autocomplete="off">
    @csrf
    <label for="ph_name">Photo Name</label>
    <br>
    <input type="text" name="ph_name" id="" placeholder="photo name" class="form-control" value="{{$photo->name}}">
    <br>
    <label for="">Photo Title</label>
    <input type="text" name="ph_title" id="" placeholder="title" class="form-control" value="{{$photo->title}}">
<br>
    <label for="">Photo Body</label>
    <input type="text" name="ph_body" id="" placeholder="body" class="form-control" value="{{$photo->body}}">
<br>
    
    <input type="submit" name="submit" id="" class="btn btn-primary" value="Send" class="form-control">
    </div>
</form>
</div>
@endsection