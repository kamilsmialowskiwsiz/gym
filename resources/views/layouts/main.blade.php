<!DOCTYPE html>
<html lang="pl">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title')</title>
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
     <div class="loading-screen"></div>
     <header class="page-header">
          <div class="header-wrapper">
               <h1>Calypso Rzeszów</h1>
               <button class="nav-btn">menu</button>
               <nav class="page-nav">
                    <ul class="nav-list">
                         <li class="nav-list-items" data-destination=".exercises-section">Harmonogram</li>
                         <li class="nav-list-items" data-destination=".about-section">Dla klientów</li>
                         <li class="nav-list-items" data-destination=".contact-section">Kontakt</li>
                    </ul>
               </nav>
          </div>
     </header>

     @yield('home')

     @yield('schedules')

     @yield('customers')

     @yield('contact')

     <footer>
          Copyright &copy; Kamil Śmiałowski
     </footer>
     <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
