<!DOCTYPE html>
<html lang="pl">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title')</title>
     <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
     <link rel="stylesheet" href="{{ asset('css/dashboardstyle.css') }}">
</head>
<body>
     <div class="container">
          <header class="page-header">
               <a class="go-back" href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a>
               <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>{{ __('Wyloguj') }}</a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
               </form>
          </header>

          @yield('content')

          <footer class="page-footer">
               <p>Copyright &copy; Kamil Śmiałowski</p>
          </footer>
     </div>
</body>
</html>
