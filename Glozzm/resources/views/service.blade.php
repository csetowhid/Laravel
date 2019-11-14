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
              <h2 class="text-light">Services</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, dicta.</p>
            </div>
          </div>
        </div>
      </section>
      <!--Price Table-->
      <section is="pricetable" class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="caed text-center">
                <div class="card-header">
                  <h3>Service Plan One</h3>
                </div>
                <div class="card-body">
                  <div class="card-title">
                    <h3>$59.99/Month</h3>
                  </div>
                    <div class="card-text lead mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ratione!</div>
                    <ul class="list-group mt-3">
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature One
                      </li>
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature Two
                      </li>
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature Three
                      </li>
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature Four
                      </li>
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature Five
                      </li>
                    </ul>
                    <a href="#" class="btn btn-block btn-primary mt-2">Order Now</a>
                </div>
                <div class="card-footer">
                  <p class="text-muted">1 Year Plan</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="caed text-center">
                <div class="card-header">
                  <h3>Service Plan Two</h3>
                </div>
                <div class="card-body">
                  <div class="card-title">
                    <h3>$69.99/Month</h3>
                  </div>
                    <div class="card-text lead mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ratione!</div>
                    <ul class="list-group mt-3">
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature One
                      </li>
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature Two
                      </li>
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature Three
                      </li>
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature Four
                      </li>
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature Five
                      </li>
                    </ul>
                    <a href="#" class="btn btn-block btn-primary mt-2">Order Now</a>
                </div>
                <div class="card-footer">
                  <p class="text-muted">1 Year Plan</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="caed text-center">
                <div class="card-header">
                  <h3>Service Plan Three</h3>
                </div>
                <div class="card-body">
                  <div class="card-title">
                    <h3>$79.99/Month</h3>
                  </div>
                    <div class="card-text lead mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ratione!</div>
                    <ul class="list-group mt-3">
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature One
                      </li>
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature Two
                      </li>
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature Three
                      </li>
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature Four
                      </li>
                      <li class="list-group-item">
                        <i class="fas fa-check"></i>
                        Feature Five
                      </li>
                    </ul>
                    <a href="#" class="btn btn-block btn-primary mt-2">Order Now</a>
                </div>
                <div class="card-footer">
                  <p class="text-muted">1 Year Plan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Question-->
      <section id="ques" class="py-5 bg-dark text-light">
        <div class="container">
          <div class="row text-center">
            <div class="col">
              <h2 class="text-light">Frequently Asked Question</h2>
            </div>
            
          </div>
          <div class="row mt-5">
              <div class="col-md-6">
                <div class="card bg-light text-dark my-2">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <a href="#collapseOne" class="text-dark" data-toggle="collapse">
                      Question One</a>
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse p-2" data-parent="#ques">
                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ex earum atque aliquam fuga cumque.</p>
                  </div>
                </div>
                <div class="card bg-light text-dark my-2">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <a href="#collapseTwo" class="text-dark" data-toggle="collapse">
                      Question Two</a>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse p-2" data-parent="#ques">
                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ex earum atque aliquam fuga cumque.</p>
                  </div>
                </div>
                <div class="card bg-light text-dark my-2">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <a href="#collapseThree" class="text-dark" data-toggle="collapse">
                      Question Three</a>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse p-2" data-parent="#ques">
                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ex earum atque aliquam fuga cumque.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card bg-light text-dark my-2">
                  <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                      <a href="#collapseFour" class="text-dark" data-toggle="collapse">
                      Question Four</a>
                    </h5>
                  </div>
                  <div id="collapseFour" class="collapse p-2" data-parent="#ques">
                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ex earum atque aliquam fuga cumque.</p>
                  </div>
                </div>
                <div class="card bg-light text-dark my-2">
                  <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                      <a href="#collapseFive" class="text-dark" data-toggle="collapse">
                      Question Five</a>
                    </h5>
                  </div>
                  <div id="collapseFive" class="collapse p-2" data-parent="#ques">
                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ex earum atque aliquam fuga cumque.</p>
                  </div>
                </div>
                <div class="card bg-light text-dark my-2">
                  <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                      <a href="#collapseSix" class="text-dark" data-toggle="collapse">
                      Question Six</a>
                    </h5>
                  </div>
                  <div id="collapseSix" class="collapse p-2" data-parent="#ques">
                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ex earum atque aliquam fuga cumque.</p>
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