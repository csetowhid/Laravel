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
     
      <!--Slider-->
      <section id="showcase" class="bg-dark">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-slide-to="0" data-target="#mycarousel" class="active"></li>
             <li data-slide-to="1" data-target="#mycarousel"></li>
              <li data-slide-to="2" data-target="#mycarousel"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item carousel-img-1 active">
              <div class="container">
                <div class="carousel-caption mb-5 pb-5">
                  <h2 class="display-4 text-light">Heading One</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam consequuntur, doloremque accusantium numquam perspiciatis officia deleniti dolor. Modi quaerat, similique.</p>
                  <a href="#" class="btn btn-danger">Learn More</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-img-2">
              <div class="container">
                <div class="carousel-caption mb-5 pb-5">
                  <h2 class="display-4 text-light">Heading Two</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam consequuntur, doloremque accusantium numquam perspiciatis officia deleniti dolor. Modi quaerat, similique.</p>
                  <a href="#" class="btn btn-warning">Learn More</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-img-3">
              <div class="container">
                <div class="carousel-caption mb-5 pb-5">
                  <h2 class="display-4 text-light">Heading Three</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam consequuntur, doloremque accusantium numquam perspiciatis officia deleniti dolor. Modi quaerat, similique.</p>
                  <a href="#" class="btn btn-success">Learn More</a>
                </div>
              </div>
            </div>
          </div>
          <a href="#mycarousel" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
           <a href="#mycarousel" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
        </div>
      </section>

    <!--Home Icon-->
    <section id="homeicon" class="py-5 text-center">
      <div class="container">
        <div class="row">
          <div class="me col-md-4">
            <i class="fas fa-cogs"></i>
            <h3 class="my-3">Turning Gears</h3 >
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil distinctio exercitationem nam itaque, aspernatur dolorem optio beatae aut ad perspiciatis.</p>
          </div>
            <div class="me col-md-4"><i class="fa fa-cloud"></i>
            <h3 class="my-3">Sending Data</h3 >
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil distinctio exercitationem nam itaque, aspernatur dolorem optio beatae aut ad perspiciatis.</p></div>
              <div class="me col-md-4"><i class="fa fa-cart-plus"></i>
            <h3 class="my-3">Making Money</h3 >
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil distinctio exercitationem nam itaque, aspernatur dolorem optio beatae aut ad perspiciatis.</p></div>
        </div>
      </div>
    </section>
    <!--Home Get Started-->
    <section id="getstarted" class="py-5 text-center text-light">
      <div class="dark-overlay">
        <div class="container">
          <div class="row">
            <div class="col">
              <h3 class="text-light">Are You Ready To Get Started?</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus repudiandae laborum qui! Tempora assumenda, quos dignissimos. Nihil cumque odio fugiat?</p>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!--Info Section-->
    <section id="homeinfo" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center">
            <h3>Lorem ipsum dolor sit.</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem soluta sequi dolorem nisi voluptate suscipit explicabo, maxime veritatis blanditiis, recusandae.</p>
           <a href="" class="btn btn-outline-dark">Read More</a>
          </div>
          <div class="col-md-6 mt-sm-3">
            <img src="Images/pc.jpeg" class="img-fluid rounded" alt="pc">
          </div>
        </div>
      </div>
    </section>
   
    <!--Home Video Section-->
    <section id="home-video" class="text-center">
      <div class="dark-overlay">
      <div class="container">
        <div class="row">
          <div class="col mt-3 pt-3">
            <div>
              <a href="{{asset('https://www.youtube.com/')}}">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
            <h2 class="mt-3 text-light">Bootstrap 4 Crach Course</h2>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--Photo Gallery-->
    <section id="gallery" class="py-5">
      <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Photo Gallery</h2>
          <p class="lead">Check Out Our Photos</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 pt-3">
          <div>
            <a href="Images/image1.jpeg">
            <img src="Images/image1.jpeg" class="img-fluid"></a>
          </div>
        </div>
        <div class="col-md-4 pt-3">
          <div>
            <a href="Images/image2.jpeg">
            <img src="Images/image2.jpeg" class="img-fluid"></a>
          </div>
        </div>
        <div class="col-md-4 pt-3">
          <div>
            <a href="Images/image3.jpeg">
            <img src="Images/image3.jpeg" class="img-fluid"></a>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-md-4 pt-3">
          <div>
            <a href="Images/image4.jpeg">
            <img src="Images/image4.jpeg" class="img-fluid"></a>
          </div>
        </div>
        <div class="col-md-4 pt-3">
          <div>
            <a href="Images/image5.jpeg">
            <img src="Images/image5.jpeg" class="img-fluid"></a>
          </div>
        </div>
        <div class="col-md-4 pt-3">
          <div>
            <a href="Images/image6.jpeg">
            <img src="Images/image6.jpeg" class="img-fluid"></a>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--News Letter-->
    <section id="newsletter" class="py-5 bg-dark">
      <div class="container text-light text-center">
        <div class="row">
          <div class="col">
            <h2 class="text-light">Sign Up For Our Newsletter</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est accusantium, et fugiat ex eligendi excepturi impedit ipsa rem adipisci voluptatem.</p>
            <form action="#" method="post" class="form-inline justify-content-center" >
              <label class="sr-only" for="name">Name</label>
              <input type="text" placeholder="Enter Name" class="form-control m-2">
               <label class="sr-only" for="email">Email</label>
              <input type="email" placeholder="Enter Email" class="form-control m-2">
              <input type="submit" value="subscribe" class="btn btn-primary m-2">
            </form>
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