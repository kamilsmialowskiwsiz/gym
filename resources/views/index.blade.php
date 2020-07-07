@extends('layouts.main')

@section('title')
     Siłownia w Rzeszowie
@endsection

@section('home')
     <section class="intro-section">
          <div class="container">
               <img class="page-logo" src="image/logo.png" alt="Logo strony">
               <h2 class="section-title">Siłownia Calypso</h2>
               <hr class="topology-icon">
               <p class="section-paragraph">ul. Krakowska 20 Rzeszów</p>
          </div>
     </section>
@endsection

@section('schedules')
     <section class="exercises-section">
          <div class="container">
               <h2 class="section-title">Harmonogram</h2>
               <hr class="topology-icon">
               <div class="image-container">
                    @foreach ($schedules as $schedule)
                        <div class="link-holder">
                            <a href="storage/upload/{{$schedule->filename}}" title="{{$schedule->title}}" download>
                                <img class="exercise-img" src="storage/upload/{{$schedule->name_of_image}}"
                                     alt="{{$schedule->title}}">
                                <p class="link-description">{{$schedule->description}}</p>
                            </a>
                        </div>
                    @endforeach
               </div>
          </div>
     </section>
@endsection

@section('customers')
     <section class="about-section">
          <div class="container">
               <h2 class="section-title">Dla klientów</h2>
               <hr class="topology-icon">
               <div class="image-container">
                    <div class="link-holder">
                         <a href="https://www.fabrykasily.pl/cwiczenia/na-klatke-piersiowa" title="Klatka piersiowa" target="_blank">
                              <img class="exercise-img" src="image/chest.jpg" alt="klatka_piersiowa">
                              <p class="link-description">Klatka piersiowa</p>
                         </a>
                    </div>
                    <div class="link-holder">
                         <a href="https://www.fabrykasily.pl/cwiczenia/na-plecy" title="Plecy" target="_blank">
                              <img class="exercise-img" src="image/back.jpg" alt="plecy">
                              <p class="link-description">Plecy
                    </div>
                    <div class="link-holder">
                         <a href="https://www.fabrykasily.pl/cwiczenia/na-barki" title="Barki" target="_blank">
                              <img class="exercise-img" src="image/shoulders.jpg" alt="barki">
                              <p class="link-description">Barki</p>
                         </a>
                    </div>
                    <div class="link-holder">
                         <a href="https://www.fabrykasily.pl/cwiczenia/czworoglowe-uda" title="Nogi" target="_blank">
                              <img class="exercise-img" src="image/legs.jpg" alt="nogi">
                              <p class="link-description">Nogi</p>
                         </a>
                    </div>
               </div>
          </div>
     </section>
@endsection

@section('contact')
     <section class="contact-section">
          <div class="container">
               <h2 class="section-title">Kontakt</h2>
               <hr class="topology-icon">
               @if(count($errors) > 0)
                         <ul>
                              @foreach($errors->all() as $error)
                                   <li>{{$error}}</li>
                              @endforeach 
                         </ul> 
               @endif
               <form action="{{URL('sendemail')}}" method="post" class="form-container" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="text" name="name" placeholder="Imię i nazwisko" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <textarea name="message" placeholder="Wiadomość" required></textarea>
                    <input type="file" name="attachment" required>
                    <div class="wrapper">
                         <button class="form-button" type="submit">Wyślij</button>
                    </div>
               </form>
          </div>
     </section>
@endsection
