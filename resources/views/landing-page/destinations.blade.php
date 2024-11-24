@extends('landing-page.layouts.app')
@section('content')
<h3 class="mt-3 ps-3">Destinations</h3>
<div class="d-flex p-5 gap-4 justify-content-center" id="destinations">

    @foreach ($data as $item)
        
    <div class="card" style="width: 18rem;">
        <img src="{{ Storage::url('image/' . $item->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$item->nama_kota}}</h5>
            <p class="card-text">{{$item->description}}</p>
            <p class="card-text">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>

        </div>
    </div>
    @endforeach
</div>

@endsection