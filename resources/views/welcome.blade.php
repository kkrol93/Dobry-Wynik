@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-between">

        <div class="col-md-5 card-panel">
            <p class="title-smaller">Dobry Wynik<i class="far fa-check-square"></i></p>
            <p>to korepetycje z matematyki dla uczniów na każdym poziomie edukacji, również dla studentów.</p>
            <p> W ofercie znajduje się też kurs maturalny z matematyki na poziomie podstawowym oraz rozszerzonym, a
                także korepetycje
                z chemii oraz fizyki na poziomie podstawowym (szkoła podstawowa, gimnazjum, szkoła średnia).</p>
        </div>
        <div class="col1 align-self-center"><i class="fas fa-check"></i></div>
        <div class="col-md-5 card-panel">
            <p>Zajęcia prowadzone są indywidualnie albo w małych grupach, dzięki czemu jestem w stanie w pełni
                dostosować się
                do tempa pracy oraz poziomu zaawansowania uczniów.</p>
            <p>W 99% przypadków takie podejście, połączone z różnymi metodami przekazywania wiedzy, daje zadowalające
                efekty,
                które nie tylko przekładają się na lepsze oceny oraz wyniki egzaminów, ale przede wszystkim na
                zrozumienie
                zagadnień, które dotychczas były niejasne. Nie stosuję nauczania na pamięć ani nie wprowadzam
                schematycznego
                podejścia do problemów.</p>
        </div>
        <div class="col-12 card-panel margin">
            Zapraszam do zapoznania się ze szczegółową ofertą korepetycji i kursu maturalnego oraz z opiniami uczniów
            oraz rodziców,
            z którymi pracowałam.
        </div>
    </div>
</div>


<div class="contact">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 title">Kontakt</div>
            <div class="col-md-5"> <i class="fas fa-envelope"></i>kontakt@dobrywynik.pl </div>
            <div class="col-md-5"> <i class="fas fa-phone"></i>883 751 106</div>
            <div class="col-12 local">Wszystkie zajęcia odbywają się w siedzibie firmy na ul. Zwierzynieckiej 10 (przy
                rondzie Kaponiera).</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
        <div class="col-12 alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session()->has('message'))
        <div class="col-5 alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

        <form class="col-md-8" method="POST" action="{{ action('HomeController@send') }}">
            @csrf
            <section class='rating-widget'>

                <!-- Rating Stars Box -->
                <div class='rating-stars text-center'>
                    <ul id='stars'>
                        <li class='star' title='Poor' data-value='1'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Fair' data-value='2'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Good' data-value='3'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Excellent' data-value='4'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                    </ul>
                </div>
            </section>
            <div style="clear:both"></div>
            <div class="form-group">
                <label for="title">Tytuł</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="">
            </div>
            <div class="form-group">
                <label for="review">Twoja Opinia</label>
                <textarea class="form-control" id="review" name="review" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="email">Adres e-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="">
            </div>
            <div class="form-group">
                <label for="name">Imię</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" required>
                <label class="form-check-label" for="defaultCheck1">
                    Oświadczam, że ta opinia to moje własne zdanie o współpracy
                </label>

            </div>
            <input type="hidden" id="rate" value="" name="rate">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>Wyślij</button>
        </form>
    </div>
</div>
@endsection