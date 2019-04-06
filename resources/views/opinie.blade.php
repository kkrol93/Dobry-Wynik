@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-around">
        <div class="col-12 title-content">
            Opinie
        </div>
        @foreach ($reviews as $review)

        <div style="margin-bottom: 20px;" class="col-md-5 card-panel">
            <div class="row">
                <div class="col-12">Tytuł:</div>
                <div class="col-12">{{ $review->title }}</div>
                <div class="col-12">Ocena:</div>
                <div class="col-12">@for ($i = 0; $i< $review->rate; $i++)
                        <section class='rating-widget'>
                            <!-- Rating Stars Box -->
                            <div class='rating-stars text-center'>
                                <ul>
                                    <li class='star selected'>
                                        <i class="fa fa-star fa-fw"></i>

                                    </li>

                                    </li>
                                </ul>
                            </div>
                        </section>
                        @endfor</div>
                <div style="clear:both;"></div>

                <div class="col-12">Opinia:</div>
                <div class="col-12">{{ $review->review }} - {{ $review->name }}</div>

            </div>
        </div>
        @endforeach

    </div>
    <div class="offset-2 col-4">{{$reviews->render()}}</div>

</div>
@endsection