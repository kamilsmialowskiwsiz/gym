@extends('layouts.dlayout')

@section('content')
    <section class="administration-section">
              <h1>Logowanie</h1>
              <form class="login-form" action="">
                <div class="login-wrapper">
                  <div class="input-wrapper">
                    <label for="login">Login:</label
                    ><input class="login-input" type="text" name="login" />
                  </div>
                  <div class="input-wrapper">
                    <label for="passwd">Hasło:</label
                    ><input class="login-input" type="password" name="passwd" />
                  </div>
                </div>
                <div class="btn-wrapper">
                  <button type="submit" class="submit-btn">Zaloguj</button>
                </div>
              </form>
    </section>
@endsection
