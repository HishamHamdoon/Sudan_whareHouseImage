@foreach($photographers as $photographer)

<p> <img src="{{asset('images/photog/'. $photographer->photo)}}"  width="250" height="250"></p>
<p>{{$photographer->created_at}}</p>

@endforeach