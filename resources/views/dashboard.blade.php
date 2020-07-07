@extends('layouts.dlayout')

@section('title')
    Panel administracyjny
@endsection

@section('content')
    <main>
      <section class="administration-section">
      <h1>Panel administracyjny</h1>
      <div class="wrapper">
           <div class="link-conteiner">
                <a href="{{ url('dashboard/create') }}">
                     <img src="{{URL::asset('/image/create.png')}}" alt="Stworz">
                </a>
                <p>Stwórz</p>
           </div>
           <div class="link-conteiner">
                <a href="{{ url('dashboard/modify') }}">
                     <img src="{{URL::asset('/image/delete.png')}}" alt="Usuń">
                </a>
                <p>Usuń / Edytuj</p>
           </div>
      </div>
      </section>
    </main>
@endsection

