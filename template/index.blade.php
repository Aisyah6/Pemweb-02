@extends('template/main')

@section('content1')
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
<style>
   body{
        background-color: #F9F9F9;
        font-family: 'Nunito', Arial;
    }
</style>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/img1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/img3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection

@section('content2')
<div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">PRODUK</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">PRODUK</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">PRODUK</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="toko/detail" class="btn">
      <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PRODUK</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </a>
    </div>
  </div>
</div>
@endsection