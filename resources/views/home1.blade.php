@extends('tampilan')
@section('content')
<!-- Section-->
<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="py-5">
    <div class="carousel-inner">

        <div class="carousel-item active">
          <img class="d-block w-150" src="https://asset.kompas.com/crops/rU8yOenBG3LknB75juyp2xBEqPk=/0x0:0x0/750x500/data/photo/2017/02/22/2214559office-space780x390.jpg" alt="..."  width="1200" height="400">
        </div>
      <div class="carousel-item">
        <img class="d-block w-150" src="https://tse1.mm.bing.net/th?id=OIP.uE_AmH-1U1Yo3P4QEyBelgHaDj&pid=Api&P=0&h=180" alt="..."  width="1200" height="400">
      </div>
      <div class="carousel-item">
        <img class="d-block w-150" src="https://tse4.mm.bing.net/th?id=OIP.OZWTodhr8ruoJHZ9ABhSrAHaE8&pid=Api&P=0&h=180" alt="..."  width="1200" height="400">
      </div>
      <div class="carousel-item">
        <img class="d-block w-150" src="https://tse4.mm.bing.net/th?id=OIP.BVO1cGVvaU5S8PFGaYZPiQHaD5&pid=Api&P=0&h=180" alt="..."  width="1200" height="400">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
  </div>
</div>
<div class="container pt-3" style="background-color: rgb(249, 249, 250)">
<h3 class="fw-bold text-center">Data Karyawan</h3>
  <div class="row justify-content-center">
    @foreach ($_administrators as $item)
       <div class="col col-md-4 mb-5 text-center">
            <div class="card mt-5 ms-4" style="width: 18rem;">
                <!-- Product image-->
                  <img class="mx-auto rounded-circle"  src="/storage/{{ $item->foto }}" width="200" alt="">
                 <div class="card-body" style="color: rgb(75, 104, 158)">                          
                    <h5 class="card-text">{{$item->id_karyawan}}</h5>
                    <p class="card-text">{{$item->nama_karyawan}}</p>
                    <p class="card-text">{{$item->tm}}</p>
                    <p class="card-text">{{$item->jk}}</p>
                    <p class="card-text">{{$item->alamat}}</p>
                    <a href="administrator/edit/{{ $item->id_karyawan }}" class="btn mt-auto text-white" style="background-color: blue">Edit</a>
                    {{-- <a href="home/card/{{ $item->kdproduk }}" class="btn mt-auto text-white" style="background-color: rgb(36, 79, 197)">View Options</a> --}}
                 </div>
            </div>
        </div>
        @endforeach                           
    </div>
</div>
</div>
</div>
</section>

@endsection
