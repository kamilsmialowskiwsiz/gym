@extends('layouts.dlayout')

@section('title')

    Dodawanie prezentacji

@endsection

@section('content')

    <main>
        <section class="administration-section">
            <h1>Stwórz</h1>
            <form action="{{URL('/')}}" method="post" enctype="multipart/form-data" class="create-form">
                {{ csrf_field() }}
                 <div class="input-wrapper"><label for="tytuł">Tytuł</label><input type="text" name="title">
                 </div>
                 <div class="input-wrapper"><label for="opis">Opis:</label><input type="text" name="description">
                 </div>
                 <div class="input-wrapper"><label for="Obrazek">Obrazek</label><input type="file"
                           name="name_of_image">
                 </div>
                 <div class="input-wrapper"><label for="Prezentacja">Prezentacja</label><input type="file"
                           name="filename"></div>
                 <div class="wrapper"><button type="submit" class="submit-btn">Wyslij</button></div>
            </form>
        </section>
    </main>

@endsection
