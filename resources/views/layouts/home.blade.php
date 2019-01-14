<!doctype html>
<html lang="{{ app()->getLocale() }}">
          <head>
        
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
        
            <title>Landing Page - Start Bootstrap Theme</title>
        
            <!-- Bootstrap core CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
{{--             
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
         --}}
            <!-- Custom fonts for this template -->
            <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
            <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        
            <!-- Custom styles for this template -->
            <link href="css/landing-page.min.css" rel="stylesheet">
            <link href="css/stylish-portfolio.min.css" rel="stylesheet">
          </head>
        
          <body>
            
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    @if (Route::has('login'))
                    @auth

                    <a href="{{  url('/cek')  }}" class="navbar-brand">APBDesa Ngawi</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="{{  url('/daftardesa')  }}">Daftar Desa<span class="sr-only"></span></a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Timeline
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            </div>
                            
                          </li>
                        </ul>
                        
                      </div>
                  </div>
                    @else
                    <a href="{{  url('/')  }}" class="navbar-brand" (current) >APBDesa Ngawi</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="{{  url('/daftardesa')  }}">Daftar Desa<span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Timeline
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                        
                      </li>
                    </ul>
                    
                  </div>
                  <form class="form-inline my-2 my-lg-0">
                           
                      <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                 
                    </form>
                  </div>
                </nav>
                @endauth
                @endif 
                  {{--  @if (Route::has('login'))
                        @auth
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a href="{{  url('/cek')  }}" class="navbar-brand">APBDesa Ngawi</a>
                        <a href="" class="navbar">Daftar Desa</a>
                        
                      </div>
                        @else
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       
                        <a href="" class="navbar">Daftar Desa</a>
                        
                      </div>
                        <form class="form-inline my-2 my-lg-0">
                           
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                       
                          </form>
                          
                    @endauth
                    @endif  --}}
                    
                
              </div>
            </div>
            </nav>

            {{--  <!-- Navigation -->
            <nav class="navbar navbar-light bg-light static-top">
                    @if (Route::has('login'))
              <div class="container">
                    @auth
                    <a href="{{ url('/cek') }}">Home</a>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                @else
                    <a href="{{  url('/')  }}" class="navbar-brand">APBDesa Ngawi</a>
                    <a href="{{ url('/daftardesa') }}" class="navbar">Daftar Desa</a>
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                @endauth
              </div>
              @endif
            </nav>  --}}
        


            <div class="content">

                @yield('content')
            </div>
            <!-- Footer -->
            <footer class="footer bg-light">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item">
                        <a href="#">About</a>
                      </li>
                      <li class="list-inline-item">&sdot;</li>
                      <li class="list-inline-item">
                        <a href="#">Contact</a>
                      </li>
                      <li class="list-inline-item">&sdot;</li>
                      <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                      </li>
                      <li class="list-inline-item">&sdot;</li>
                      <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                      </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
                  </div>
                  <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item mr-3">
                        <a href="#">
                          <i class="fab fa-facebook fa-2x fa-fw"></i>
                        </a>
                      </li>
                      <li class="list-inline-item mr-3">
                        <a href="#">
                          <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-instagram fa-2x fa-fw"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </footer>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
        <!-- Custom scripts for this template -->
        <script src="js/stylish-portfolio.min.js"></script>
    </body>
    
    </html>

    {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif --}}