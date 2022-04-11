@extends('layouts.app')
@section('content')
 <div class="container">
 <a href="{{route('dashboard')}}"><button class="btn btn-primary">Back</button></a>
 <br><br>
    <div class="row dash-photos" style="float:left">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4"
             style=" box-sizing: border-box;
                    float:left;margin-bottom:30px;
                    margin-right:10p;position:relative;">
                   <img src="{{asset('images/photog/'. $photo->photo)}}" width="400" height="400"  ></td><td>
                       <a href="{{route('deletephoto', $photo->id)}}"><button class="btn btn-danger" 
                       style="position:absolute;margin-top:-400px;margin-left:331px"><div class="fa fa-edit">Delete</div></button></a>
                       <a href="{{route('editphoto', $photo->id)}}"><button class="btn btn-primary" 
                       style="position:absolute;margin-top:-400px;z-index:999;left:20"><i class="fa fa-edit" > </i>Edit</button></a>     
            </div>
    </div>    
</div>
@endsection
