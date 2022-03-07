<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Crud Laravel</title>
  </head>
  <style>
    body{
        background-image: url("https://lh3.googleusercontent.com/p/AF1QipOqTEQIDgtF9pD4dmW7gKgFG1fbDMbdHU5nU0f4=s600-h600");
        background-size:cover;
        background-repeat: no-repeat;
    }
    footer{
        margin-top: 45%;
    }
    a{
        color: #3A6EA5;
    }
  </style>
  <body>

    <nav class="navbar navbar-expand-sm justify-content-center" style="background-color: #042a2b;" >
      <a class="btn btn-success" href="/catalogo">
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/14/b3/db/27/billy-bob.jpg" width="100" height="80"  alt="">
        MENU BILLY BOB
      </a>
    </nav>
  
  <footer class="text-center text-white" style="background-color: #042a2b;">
      <div class="container p-4">
        <section class="">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
              <div class="ratio ratio-16x9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5801.356228850597!2d-5.853011622933432!3d43.36284321652916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd368cfc6439ece7%3A0x63b9561bd7a52243!2sBilly%20Bob!5e0!3m2!1ses!2ses!4v1644965144895!5m2!1ses!2ses" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <p>C. Fray Ceferino, 11, 33001 Oviedo, Asturias</p>
            </div>
          </div>
        </section>
      </div>

      <div class="text-center p-3" style="background-color: #5EB1BF;">
        Jorge Espeso Fernández-CRUD Laravel
      </div>
    </footer>
  </body>
</html>