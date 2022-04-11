@extends('layouts.app')
@section('content')
<h1 style="text-align:center">Sudan Images Warehouse</h1>
@if(session('msg')){
<p>{{session('msg')}}</p>
}
@endif
<div class="container">
<div class="row">
<div class="col-md-4 jumbotron">
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, laudantium fuga deserunt molestias perspiciatis error id, dignissimos pariatur enim consectetur, repudiandae itaque aliquid suscipit ea? Nobis praesentium error cumque ducimus.</p>
       <button class="btn btn-warning">Ok</button>
</div>
<div class="col-md-4 jumbotron">
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, laudantium fuga deserunt molestias perspiciatis error id, dignissimos pariatur enim consectetur, repudiandae itaque aliquid suscipit ea? Nobis praesentium error cumque ducimus.</p>
       <button class="btn btn-danger">Ok</button>
</div>
<div class="col-md-4 jumbotron">
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, laudantium fuga deserunt molestias perspiciatis error id, dignissimos pariatur enim consectetur, repudiandae itaque aliquid suscipit ea? Nobis praesentium error cumque ducimus.</p>
<button class="btn-lg btn-success">Ok</button>
</div>
</div>
</div>
@endsection