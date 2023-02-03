<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Accounts - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
              <a class="navbar-brand" href="index.html">
                <h1 class="tm-site-title mb-0">Product Admin</h1>
              </a>
              <button
                class="navbar-toggler ml-auto mr-0"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fas fa-bars tm-nav-icon"></i>
              </button>
      
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/redirect')}}">
                      <i class="fas fa-tachometer-alt"></i> Dashboard
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false">
                      <i class="far fa-file-alt"></i>
                      <span> Reports <i class="fas fa-angle-down"></i> </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Daily Report</a>
                      <a class="dropdown-item" href="#">Weekly Report</a>
                      <a class="dropdown-item" href="#">Yearly Report</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{url('/products')}}">
                      <i class="fas fa-shopping-cart"></i> Products
                    </a>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link active" href="{{url('/message')}}">
                      <i class="far fa-user"></i>
                      Message
                  </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false">
                      <i class="fas fa-cog"></i>
                      <span> Settings <i class="fas fa-angle-down"></i> </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Profile</a>
                      <a class="dropdown-item" href="#">Billing</a>
                      <a class="dropdown-item" href="#">Customize</a>
                    </div>
                  </li>
                </ul>
                <ul class="navbar-nav">
                  <li class="nav-item">
                      Admin, <b>    <form method="POST" action="{{ route('logout') }}">
                        @csrf
      
                        <x-dropdown-link :href="route('logout')" 
                        onclick="return confirm('You are Suru Log Out')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form></b>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
      <div class="container mt-5">
        <div class="row tm-content-row">
            {{-- <h3 class="text-center">Message</h3> --}}
          <div class="col-4 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                 
                
                  @foreach ($contacts as $contact)  
                  <h5 class="name">
                    <a href="{{url('show_msg', $contact->user_id)}}">
                        {{$contact->user_name}}
                <br>
                    <small>{{$contact->user_email}}</small>  
                </a>
                </h5>
                       
                  @endforeach
            </div>
          </div>
          <div class="col-8 tm-block-col">
            <div class="tm-bg-primary-dark tm-block ">
            
            </div>
          </div>
        </div>
    </div>
      <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2023</b> All rights reserved. 
            
            Md Ibrahim Bashar
          </p>
        </div>
      </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>


<style>
    .message{
        background-color: rgb(66, 80, 238);
        color: #fff;
        padding: 5px;
        font-size: 18px;
        font-weight: 500;
        border-radius: 10px;
        background-size: auto;
    }
    .name{
        background-color: #fff;
        color: black;
        padding: 10px;
        border: 2px solid black;
        cursor: pointer;
    }
    </style>