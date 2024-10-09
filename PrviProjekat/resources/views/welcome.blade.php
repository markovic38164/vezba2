@extends("layout")
@section('naslovStranice')
Home
@endsection
@section('sadrzajStranice')

@if($sati >=0 && $sati <=12)
<p>Dobro jutro!</p>
@else 
<p>Dobar dan! </p>
@endif

<p>Trenutno sati je {{$sati}}</p>
<p>Trenutno vreme je {{$time}}</p>
@endsection