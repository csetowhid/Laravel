<!doctype html>
<html lang="en">
  <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/uikit.min.css')}}">
    <!-- Fonteawesome -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- Custom CSS -->
     <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
     <link rel="shortcut icon" type="image/x-icon" href="{{asset('Images/icon.png')}}">
  </head>
  <body>
      <!--Navigation-->
      <nav class="navbar navbar-dark navbar-expand-md fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{asset('index.html')}}">Glozzom</a>
          <button class="navbar-toggler navbar-toggler-right">
    <span class="navbar-toggler-icon" data-toggle="collapse" data-target="#navbarNav"></span>
  </button>
          <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ml-auto justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('about')}}">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('service')}}">Services</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('blog')}}">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
</ul>
          </div>
        </div>
      </nav>
      
      <!--About Us-->
      <section id="pageheader" class="text-center text-light">
        <div class="container">
          <div class="row">
            <div class="col">
              <h2 class="text-light">About Us</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, dicta.</p>
            </div>
          </div>
        </div>
      </section>
    <!--What we do-->
    <section id="what" class="py-5 ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center">
            <h3>What We do</h3>
            <p class="lead text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cupiditate dolorum delectus explicabo numquam molestiae aut itaque inventore eaque, nostrum.</p>
             <p class="lead text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cupiditate dolorum delectus explicabo numquam molestiae aut itaque inventore eaque, nostrum.</p>
          </div>
          <div class="col-md-6 text-center">
            <img src="Images/image4.jpeg" class="img-fluid rounded-circle">
          </div>
        </div>
      </div>
    </section>
    <!--Icon Box-->
    <section id="iconbox">
      <div class="container">
        <div class="row">
          <div class="col-md-4 pt-3">
            <div class="card bg-success  text-center">
              <div class="card-body text-light">
                <i class="far fa-envelope"></i>
                <h3 class="bt text-light">Lorem Ipsum</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, perspiciatis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 pt-3">
            <div class="card bg-dark text-center">
              <div class="card-body text-light">
                <i class="fas fa-car text-light"></i>
                <h3 class="bt text-light">Lorem Ipsum</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, perspiciatis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 pt-3">
            <div class="card bg-primary text-center">
              <div class="card-body text-light">
                <i class="fas fa-play text-light"></i>
                <h3 class="bt text-light">Lorem Ipsum</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, perspiciatis.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 pt-3">
            <div class="card bg-warning  text-center">
              <div class="card-body text-light">
                <i class="fas fa-tree text-light"></i>
                <h3 class="bt text-light">Lorem Ipsum</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, perspiciatis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 pt-3">
            <div class="card bg-info text-center">
              <div class="card-body text-light">
                <i class="fas fa-cart-arrow-down text-light"></i>
                <h3 class="bt text-light">Lorem Ipsum</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, perspiciatis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 pt-3">
            <div class="card bg-danger text-center">
              <div class="card-body text-light">
                <i class="fas fa-people-carry text-light"></i>
                <h3 class="bt text-light">Lorem Ipsum</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, perspiciatis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        <!--Copyright-->
    <section id="copyright" class="text-center py-3 text-light mt-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <p class="mb-0">Copyright 2019 &copy; Glozzom</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('js/uikit.min.js')}}"></script>
    <script src="{{asset('js/uikit-icons.min.js')}}"></script>
  </body>
</html>