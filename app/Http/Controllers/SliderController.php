<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSlide;
use App\Resolution;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $resolutions = Resolution::all();
        return view('slides', [
            'resolutions' => $resolutions
        ]);
    }

    public function store(StoreSlide $request)
    {
        return redirect()->back()->withSuccess('Слайд добавлен');
    }
}
