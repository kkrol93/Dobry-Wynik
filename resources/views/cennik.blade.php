@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-arround-center">
        <div class="col-12 title-content">
            Cennik
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Rodzaj zajęć</th>
                        <th scope="col">Cena za 60 minut na 1 osobę</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Korepetycje indywidualne</th>
                        <td>50 zł</td>

                    </tr>
                    <tr>
                        <th scope="row">Korepetycje w parze</th>
                        <td>40 zł</td>

                    </tr>
                    <tr>
                        <th scope="row">Kurs maturalny (poziom podst.) indywidualny</th>
                        <td>50 zł</td>
                    </tr>
                    <tr>
                        <th scope="row">Kurs maturalny (poziom podst.) w grupie 2 os.</th>
                        <td>40 zł</td>
                    </tr>
                    <tr>
                        <th scope="row">Kurs maturalny (poziom podst.) w grupie 3 os.</th>
                        <td>35 zł</td>
                    </tr>
                    <tr>
                        <th scope="row">Kurs maturalny (poziom podst.) w grupie 4 os.</th>
                        <td>30 zł</td>
                    </tr>
                    <tr>
                        <th scope="row">Kurs maturalny (poziom rozsz.) indywidualny</th>
                        <td>60 zł</td>
                    </tr>
                    <tr>
                        <th scope="row">Kurs maturalny (poziom rozsz.) w grupie 2 os.</th>
                        <td>50 zł</td>
                    </tr>
                    <tr>
                        <th scope="row">Kurs maturalny (poziom rozsz.) w grupie 3 os.</th>
                        <td>45 zł</td>
                    </tr>
                    <tr>
                        <th scope="row">Kurs maturalny (poziom rozsz.) w grupie 4 os.</th>
                        <td>40 zł</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection