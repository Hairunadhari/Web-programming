@extends('landing-page.layouts.app')
@section('content')
<style>
     .icon{
        width: max-content;
        padding: 0px 5px 0px 5px;
        border-radius: 20px;
        border: 1px solid black;
    }
</style>

<div class=" p-5" id="destinations">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item"><a href="/destinations">Destination</a></li>
        <li class="breadcrumb-item active" aria-current="page">Booking</li>
      </ol>
    <h3 class="mb-3">Booking Destination</h3>

    <div class="mb-3">
        <div class="row d-flex justify-content-center">
           <img style="height: 500px;  border-radius: 1rem" src="{{asset('assets-landingpage/img/5.jpg')}}" alt="">
        </div>
        <div class="row pt-4">
            <div class="col-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, molestiae doloremque in iure dolorum porro corporis voluptatum officia ratione. Quo impedit cumque veritatis nostrum, qui voluptas ipsam harum, modi necessitatibus hic aspernatur reiciendis doloremque laborum quaerat. Necessitatibus architecto tempora id, sapiente nihil reprehenderit sit voluptas natus corporis repudiandae repellat obcaecati. Pariatur numquam perferendis sapiente maiores fugiat voluptatem et voluptate nam sint harum culpa, aliquid doloremque tempore corporis aspernatur fuga nemo eius deserunt minima quos. Animi reiciendis fugit sit nesciunt cumque enim provident quas repudiandae iusto amet eligendi ex repellat iste reprehenderit placeat exercitationem, obcaecati vero deleniti atque, rem magnam cupiditate odio rerum? Inventore illo in aperiam dolorem, repellat hic error repellendus laborum, vel soluta maxime quaerat, totam veniam reiciendis accusantium ullam odio doloremque. Impedit quam nisi iure recusandae nulla distinctio alias eum autem magnam. Placeat dolorem amet aperiam nesciunt temporibus. Magnam quis odit facere debitis recusandae provident ad consectetur officia ipsam, soluta eius incidunt tempore beatae blanditiis cumque distinctio ipsum quisquam, fugit neque quas voluptas possimus facilis fuga necessitatibus. Aliquid harum consequuntur at maxime enim ab doloremque delectus, asperiores possimus distinctio architecto ipsa labore inventore ex, pariatur fuga odio natus amet optio aspernatur voluptas sequi laboriosam assumenda! Quisquam ea reprehenderit maiores id, enim, recusandae a quos praesentium dignissimos nemo deserunt quam veritatis quibusdam possimus laudantium vel fugit ducimus! Velit sint optio culpa ducimus fugiat expedita, asperiores doloremque repellat provident consectetur dolores est sunt similique aliquam, animi dolorem ipsa odio illo perferendis illum suscipit quod facilis. Laboriosam esse magnam eaque, numquam nostrum quia dicta fuga ex inventore doloribus molestiae vitae ipsum fugit libero, praesentium hic incidunt aliquam impedit. Nemo fugiat iusto, laudantium ad, dolorum nobis quae ipsa consectetur quibusdam ut molestiae iure porro. Inventore delectus reprehenderit assumenda soluta repellendus earum vitae laboriosam, nostrum natus iusto quia voluptatum fugit molestias possimus deserunt!
            </div>
            <div class="col-4">
                <div class="p-3" style="border: 2px solid rgb(0, 108, 228); border-radius: 10px">
                <form >
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">No Telp</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">From</label>
                      <input type="date" class="form-control" >
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">To</label>
                      <input type="date" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="">Number of pax</label>
                        <div class="d-flex gap-3 mt-2">
                            <div class="icon" id="min" onclick="min()">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <input type="text"   name="qty" id="qty" readonly value="1" style="color: black; width: 20px;">
                            <div class="icon" id="plus" onclick="plus()">                                        
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Total Harga</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="text-center">
                        <a href="/" style="padding-inline: 40px" class="btn btn-primary">Save</a>
                    </div>
                  </form>
                </div>

            </div>
        </div>
       
    </div>

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
