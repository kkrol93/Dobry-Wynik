<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Http\Requests\ReviewRequest;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function korepetycje()
    {
        return view('korepetycje');
    }
    public function kursMaturalny()
    {
        return view('kurs-maturalny');
    }
    public function matematyka()
    {
        return view('matematyka');
    }
    public function opinie()
    {
        $reviews = Review::paginate(10);

        return view('opinie', compact('reviews'));
    }
    public function cennik()
    {
        return view('cennik');
    }
    public function kontakt()
    {
        return view('kontakt');
    }
    public function send(ReviewRequest $request)
    {
        $validated = $request->validated();

        $Review = Review::create($request->all());

        return redirect('/')->with('message', 'Dziękuję za opinię! :)');
    }
}
