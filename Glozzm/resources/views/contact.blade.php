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
              <h2 class="text-light">Contact Us</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, dicta.</p>
            </div>
          </div>
        </div>
      </section>
      <!--Contact Section-->
      <section id="contact" class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <h4 class="text-center">Please Fill Out This Form To Contact Us</h4>
                  <div class="row mt-4">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="First Name" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Last Name" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" placeholder="Email" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Phone Number" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input type="submit" class="btn btn-block btn-dark" value="send">
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body mb-3">
                  <h4>Get In Touch</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, vel.</p>
                  <h4>Address</h4>
                  <p>Home #41 Sonadanga, Khulna</p>
                  <h4>Email</h4>
                  <p>towhidhasang1@gmail.com</p>
                  <h4>Phone</h4>
                  <p>+880 1982525844</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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