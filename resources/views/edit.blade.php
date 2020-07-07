@extends('layouts.dlayout')

@section('title')

    Edycja prezentacji

@endsection

@section('content')

    <main>
        <section class="administration-section">
            <h1>Edytuj</h1>
                <form method="post" action="{{url('dashboard', $schedule->id) }}" enctype="multipart/form-data" class="create-form">
                @method('PATCH')
                @csrf
                 <div class="input-wrapper"><label for="tytuł">Tytuł</label><input type="text" name="title" value="{{$schedule->title}}">
                 </div>
                 <div class="input-wrapper"><label for="opis">Opis:</label><input type="text" name="description" value="{{$schedule->description}}">
                 </div>
                 <div class="input-wrapper"><label for="Obrazek">Obrazek</label><input type="file"
                           name="name_of_image" value="{{$schedule->name_of_image}}">
                 </div>
                 <div class="input-wrapper"><label for="Prezentacja">Prezentacja</label><input type="file"
                           name="filename" value="{{$schedule->filename}}"></div>
                 <div class="wrapper"><button type="submit" class="submit-btn">Edytuj</button></div>
            </form>
        </section>
    </main>

@endsection
