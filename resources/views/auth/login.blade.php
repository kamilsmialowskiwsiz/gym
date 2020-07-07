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
          <main class="login-main">
            <section class="administration-section">
              <h1>Logowanie</h1>
              <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-wrapper">
                  <div class="input-wrapper">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="login-input" name="email" value="" required="" autofocus="">
                  </div>
                  <div class="input-wrapper">
                    <label for="password">Hasło:</label
                    ><input id="password" type="password" class="form-control" name="password" required="">
                  </div>
                </div>
                <div class="btn-wrapper">
                  <button type="submit" class="submit-btn">Zaloguj</button>
                </div>
              </form>
            </section>
          </main>

          <footer class="page-footer">
               <p>Copyright &copy; Kamil Śmiałowski</p>
          </footer>
     </div>
</body>
</html>
