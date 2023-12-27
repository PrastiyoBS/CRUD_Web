@extends('layout.navbar')

@section('konten')

  {{-- <section class="content"> --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>About Us Section</title>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
      <link rel="stylesheet" href="{{asset('build/assets/css/tentang.css')}}">


    </head>
    <body>
      <div class="section">
        <div class="container">
          <div class="content-section">
            <div class="title">
              <h1>Tentang kami</h1>
            </div>
            <div class="content">
              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatum, cumque tempora tenetur iure ratione, 
                sapiente soluta iste saepe possimus omnis, maiores deserunt nam corporis minus distinctio a hic laudantium!
                Totam, ut iusto! Iusto tempora praesentium in, doloribus consectetur porro! Non corrupti eius illum ad odit dolores, facilis voluptatibus ducimus quidem praesentium.
              </p>
              <div class="button">
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="social">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="image-section">
            <img src="{{asset('build/assets/img/logo_toko.png')}}" alt="">
          </div>
        </div>
        
      </div>
    </body>
    </html>
  {{-- </section> --}}

@endsection
