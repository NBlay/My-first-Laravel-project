<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css" type="text/css">
        <link rel="stylesheet" href="/css/carousel.css" type="text/css">
        <!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
        <title>The Corona</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/3c7f5856f6.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> --}}
@yield('stylesheet')
    </head>
    <body>
      <div class="flex center container1">

        <div class="bar-contact flex">
          <div class="">
              <a class="barLinks" href="#">info@yourwebsite.com</a>
              <a class="barLinks" href="#">123-456-7878</a>
          </div>
          <div class="flex end">

            <div class="">
                <ul class="social flex">
                    <li><a class="barLinks" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="barLinks" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="barLinks" href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="barLinks" href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                    <li><a class="barLinks" href="https://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
                    <li><a class="barLinks" href="https://www.instagram.Com"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>

            <div class="">
              <a class="barLinks" href="/login">Login</a>
              <a class="barLinks" href="/registration">registration</a>
              <a class="barLinks" href="/cart">Cart</a>
            </div>
          </div>
        </div>
      </div>

      <nav class="container">
        <div class="links">
          <div>
            <img class="logo" src="/img/logo.png" alt="">
          </div>
          <div class="links">
            <a href="/">HOME</a>
            <a href="/about">ABOUT</a>
            <a href="/prevention">PREVENTION</a>
            <a href="/products">PRODUCTS</a>
            <a href="/news">NEWS</a>
            <a href="/pages">PAGES</a>
            <a href="/contact">CONTACT</a>
          </div>
        </div>
      </nav>
        <div class="nav">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

          </div>
          <main class="content">
@yield('contenu')
          </main>
          <footer>
            <div class="container">
              <div class="flex evenly">
                <div class="flex column">
                    <p>Important Links</p>
                    <a href="#">coronavirus Pandemic</a>
                    <a href="#">BBC News</a>
                    <a href="#">Covid 19 in USA</a>
                </div>
                <div class="flex column">
                    <p>Pages</p>
                    <a href="#">About</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms and Conditions</a>
                </div>
                <div class="flex column">
                    <p>Contact</p>
                    <a href="#">ABC Street, NewYork.</a>
                    <a href="#">info@yourwebsite.com</a>
                    <a href="#">123-456-7878</a>
                </div>
                <div class="">
                  <p>Social Media</p>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
              <div class="flex center">
                <div class="flex center separate">
                    <p>Copyright ©2020. All Rights Reserved.</p>
                </div>
              </div>
            </div>
          </footer>
          <script>
              $('#myCarousel').carousel({
              pause: 'none'
              })
          </script>

    </body>
</html>
