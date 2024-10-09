@extends("layout")
@section('naslovStranice')
    Shop
@endsection

@section('sadrzajStranice')
    @foreach($phones as $singlePhone)
        @if($singlePhone == 'iPhone 11' || $singlePhone == 'Samsung Galaxy S23 Ultra')
            <p>{{ $loop->iteration }}. {{ $singlePhone }} - <b>VELIKO SNIŽENJE</b></p>
        @else
            <p>{{ $loop->iteration }}. {{ $singlePhone }}</p>
        @endif
    @endforeach
@endsection
