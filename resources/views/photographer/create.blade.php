@extends('layouts.app')
@section('content')
@if(session('msg'))
<p class="container alert alert-success">{{session('msg')}}</p>
@endif
<h1 class="text-center mb-5">{{trans('en.Add New Photo')}}</h1>
<form action="{{url('save')}}" method="post"  enctype="multipart/form-data" class="container  form-group ">
    @csrf
    <div class="form-control">
    <input type="text" name="ph_name" id="" placeholder="name">
    </div>
    <div class="form-control">
        <input type="text" name="ph_title" id="" placeholder="title" class="form-control">
    </div>
   
    <div class="form-control">
    <input type="date" name="ph_body" id="" placeholder="birthdate" class="form-control">
    </div>

    <div class="form-control">
    <input type="file" name="ph_photo" id="" placeholder="photo" class="form-control">
    </div>
    <div class="from-control">
    <input type="submit" name="submit" id="" class="btn btn-primary" value="Send" class="form-control">
    </div>
</form>
@endsection