<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('pageTitle') - TJ's Glass.</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
        @yield('assets')
        <style>
            @media (min-width: 992px) {
                .navbar-brand {
                    margin-left:100px;
                }

                ul.navbar-nav {
                    margin-right:100px;
                }
            }
            body {
                background-color: #fefefe;
            }
            nav {
                position: absolute;
                top:0;
                left:0;
                background-image: linear-gradient(to bottom, rgba(0,255,0,0.2), rgba(0,52,0,0));
            }
            nav > a > span  {
                color: white;
                font-size:1.5rem;
                font-weight: bold;
            }
            a.nav-link {
                color: white !important;
            }
            a.nav-link:hover {
                color: #cecece !important;
            }
        </style>
    </head>
    <body>
        <!-- NAVBAR -->

        <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/">
                    <span>TJ's Glass</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav text-center ml-auto" style="font-size: 1.05rem;">
                    <li class="nav-item">
                      <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/partners">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>

              <!-- BODY -->
        @yield('content')

        <!-- FOOTER -->
            
        <!-- BOOTSTRAP -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <!-- LOAD PAGE SCRIPTS -->
        @yield('scripts')
    </body>
</html>
