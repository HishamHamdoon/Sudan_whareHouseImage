@foreach($photographers as $photographer)
<p>{{$photographer->id}}</p>
<p>{{$photographer->name}}</p>
<p>{{$photographer->email}}</p>
<p>{{$photographer->birthdate}}</p>
<p>{{$photographer->age}}</p>
<p> <img src="{{asset('images/photog/'. $photographer->photo)}}"  width="250" height="250"></p>


@endforeach