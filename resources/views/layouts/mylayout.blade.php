<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/@botman/widget@dev"></script>

    <title>Felacia | Order Now</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="" rel="stylesheet">
  </head>

  <body>

    <div id="top1" class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center" style="background-color: #000; border-radius:10px; width:auto; height:auto;">
          <div class="col-4 pt-1">
            <img width="50px" height="auto" src="{{ asset('images/logo.png') }}" alt="">
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo " style="font-size:30px; color:aquamarine; font-family:Verdana, Geneva, Tahoma, sans-serif; text-decoration:none; font-weight:700; " href="#">Felacia</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-outline-secondary m-4 button1111" href="{{route('login')}}">Log In</a>
            <a class="btn btn-outline-secondary button1111" href="{{route('register')}}">Sign up</a>
          </div>
        </div>
        <style>
            .button1111{
                background-color: dimgray;
                font-weight:700;
                color:aquamarine;
                box-shadow: 3 5px 10px rgb(255,255,255);
            }
            .button1111:hover{
                color:#000;
                background-color: white;
                box-shadow: 0 0px 0px rgb(0,0,0);
            }

            .navtext1{
              border-radius:10px;
              text-decoration: none;
              font-weight: 700;
              color: aquamarine;
              font-family: Verdana, Geneva, Tahoma, sans-serif;
              margin:10px;
            }
            .navtext1:hover{
              box-shadow: 0 0px 10px rgb(255,255,255);
              background-color:aquamarine;
              color: #000;
            }
        </style>
      </header>

      <div class="nav-scroller py-1 mb-2" style="background-color: #000; border-radius:10px; height:auto; width:auto;">
        <nav class="nav d-flex justify-content-center">
          <a class="p-2 navtext1" href="#">Home</a>
          <a class="p-2 navtext1" href="#">Order Now</a>
          <a class="p-2 navtext1" href="#">Gallery</a>
          <a class="p-2 navtext1" href="#">About Us</a>
          <a class="p-2 navtext1" href="#">Contact Us</a>
          <a class="p-2 navtext1" href="#">Review Us</a>
        </nav>
      </div>



    @yield('content')

    <footer class="blog-footer m-4">
      <p>Felacia | All Rights Reserved | Copyright 2023 <a href="www.Felacia.Com">Felacia</a> by <a href="https://facebook.com/profile.php?id=100090783195182">CodeZaSoft Solutions</a>.</p>
      <p>
        <a href="#top1">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
