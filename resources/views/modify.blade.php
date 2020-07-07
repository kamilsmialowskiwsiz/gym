@extends('layouts.dlayout')

@section('title')

  Modyfikacja prezentacji

@endsection

@section('content')

    <main>
      <section class="administration-section">
        <div class="table-wrapper">
          <ul class="table-list table-template">
            <li class="item"><span class="table-title">ID</span></li>
            <li class="item"><span class="table-title">Tytuł</span></li>
            <li class="item"><span class="table-title">Opis</span></li>
            <li class="item"><span class="table-title">Zdjęcie</span></li>
            <li class="item"><span class="table-title">Rozmiar</span></li>
            <li class="item"><span class="table-title">Plik</span></li>
            <li class="item"><span class="table-title">Rozmiar</span></li>
          </ul>
          @foreach($schedules as $schedule)
          <ul class="table-list table-template">
            <li class="item">{{$schedule->id}}</li>
            <li class="item">{{$schedule->title}}</li>
            <li class="item">{{$schedule->description}}</li>
            <li class="item">{{$schedule->name_of_image}}</li>
            <li class="item">{{$schedule->size_of_image}}</li>
            <li class="item">{{$schedule->filename}}</li>
            <li class="item">{{$schedule->size_of_file}}</li>
            <li class="item">
              <form action="{{url('dashboard', $schedule->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Czy na pewno chcesz usunąć?')" id="delete-btn" class="btn-container">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
              </form>
              <a href="{{url('dashboard/modify/'.$schedule->id.'/edit')}}">
                <button class="btn-container"><i class="far fa-edit"></i></button>
              </a>
            </li>
          </ul>
          @endforeach
        </div>
      </section>
    </main>

@endsection
