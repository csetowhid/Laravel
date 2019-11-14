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

          <!--Services-->
      <section id="serviceheader" class="text-center text-light">
        <div class="container">
          <div class="row">
            <div class="col">
              <h2 class="text-light">Blog</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, dicta.</p>
            </div>
          </div>
        </div>
      </section>
      <!--Blog Section-->
      <div id="blogsection" class="py-5">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="card-columns">
                <div class="card">
                  <img src="Images/image1.jpeg" class="img-fluid card-img-top">
                  <div class="card-body">
                    <div class="card-title">
                      <h4>Blog Post One</h4>
                      <small class="text-muted">Written By Towhid</small>
                      <hr>
                      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem magni, beatae rerum iure. Molestiae, quo adipisci suscipit, rerum esse quaerat!</p>
                      <a href="#" class="btn btn-block btn-dark">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <img src="Images/image2.jpeg" class="img-fluid card-img-top">
                  <div class="card-body">
                    <div class="card-title">
                      <h4>Blog Post Two</h4>
                      <small class="text-muted">Written By Towhid</small>
                      <hr>
                      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem magni, beatae rerum iure. Molestiae, quo adipisci suscipit, rerum esse quaerat!</p>
                      <a href="#" class="btn btn-block btn-dark">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <img src="Images/image6.jpeg" class="img-fluid card-img-top">
                  <div class="card-body">
                    <div class="card-title">
                      <h4>Blog Post Three</h4>
                      <small class="text-muted">Written By Towhid</small>
                      <hr>
                      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem magni, beatae rerum iure. Molestiae, quo adipisci suscipit, rerum esse quaerat!</p>
                      <a href="#" class="btn btn-block btn-dark">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!--Copyright-->
    <section id="copyright" class="text-center py-3 text-light">
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