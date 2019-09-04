<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css" integrity="sha256-ujE/ZUB6CMZmyJSgQjXGCF4sRRneOimQplBVLu8OU5w=" crossorigin="anonymous" />
</head>
<body>

    <nav class="navbar" role="navigation" aria-label="main navigation">
       
            <div style="margin-bottom: 30px" id="navbarBasicExample" class="navbar-menu">
              <div class="navbar-start">
                <a href="/" class="navbar-item">
                  Home
                </a>
          
                <a href="/contact" class="navbar-item">
                  Contact Us
                </a>
                
                <a href="/about" class="navbar-item">
                  About Us
                </a>

                <a href="/projects" class="navbar-item">
                  Projects
                </a>
                
              </div>
            </div>
          </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>