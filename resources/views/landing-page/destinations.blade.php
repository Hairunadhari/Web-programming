@extends('landing-page.layouts.app')
@section('content')
<style>
    .image-container {
        position: relative;
        text-align: center;
    }

    .image-container img {
        width: 100%;
        height: auto;
        border-radius: 20px;
    }

    .title-overlay {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: white;
        font-size: 18px;
        font-weight: bold;
    }
    .icon{
        width: max-content;
        padding: 0px 5px 0px 5px;
        border-radius: 20px;
        border: 1px solid black;
    }
    .price{
        background-color: #1A1A1A;
        width: max-content;
        padding: 10px;
        color: white;
        border-radius: 20px
    }
</style>

<div class=" p-5" id="destinations">
    <h3 class="mb-3">Destinations</h3>

    @foreach ($data as $item)

    <div class="card mb-3" style="width: 100%;">
        <div class="row">
            <div class="col-5">
                <div class="image-container">
                    <img src="{{ Storage::url('image/' . $item->image) }}" style="height: 20rem; border-radius: 20px"
                        class="card-img-top p-2" alt="...">
                    <h5 class="title-overlay">{{$item->nama_kota}}</h5>
                </div>
            </div>
            <div class="col-7">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">{{$item->description}}</p>
                    <div class="price">
                      <p class="card-text"><i class="fa-solid fa-tag"></i> Rp {{ number_format($item->harga, 0, ',', '.') }} <small>/pax</small> </p>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Choose Date</h5>
                    <form>
                        <div class="row">
                            <div class="col-4">
                                <label class="form-label">From</label>
                                <input type="date" name="from_date" required class="form-control">
                            </div>
                            <div class="col-4">
                                <label class="form-label">To</label>
                                <input type="date" name="to_date" required class="form-control">
                            </div>
                            <div class="col-4">
                                <label for="">Number of pax</label>
                                <div class="d-flex gap-3 mt-2">
                                    <div class="icon" id="min" onclick="min()">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input type="text"  name="qty" id="qty" readonly value="1" style="color: black; width: 20px;">
                                    <div class="icon" id="plus" onclick="plus()">                                        
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn text-white mt-3 fw-bold" style="background-color: #01AAA7; border-radius: 20px">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
        
       
    </div>

    @endforeach
</div>

<script>
    var qty = 0;

    function plus() {
        qty += 1;
        document.getElementById("qty").value = qty;
    };

    function min() {
        if (qty > 1 ) {
            qty -= 1;
            document.getElementById("qty").value = qty;
        }
    };
</script>

@endsection
