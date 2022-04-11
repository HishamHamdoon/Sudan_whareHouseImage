@extends('layouts.app')
@section('content')
<div class="container">
                <a class="btn btn-primary pull-right" href="{{route('upload_photo')}}">Upload new photo</a>
                @if(session('msg'))
                    <p class="container alert alert-success">{{session('msg')}}</p>
                @endif
                @if(session('message'))
                    <p class="container alert alert-success">{{session('message')}}</p>
                @endif
                 
<table class=" table table-bordered">
    <th>#ID</th>
    <th>Name</th>
    <th>Manage</th>
@if(isset($photos) && $photos->count() > 0)
    @foreach($photos as $photo)                            
    <tr>
        <td>
        {{ $photo->id}}
        </td>
        <td>
        {{ $photo->name}}
        </td>
        <td> <a href="{{route('adminshow',$photo->id)}}">View</a></td>
    </tr>
    @endforeach
</table>
@elseif($photos->count() == 0)             
    <p class="alert alert-danger"> You Don't have any photo try to upload one :)</p>
@endif     
</div>
@endsection
@section('footer')
