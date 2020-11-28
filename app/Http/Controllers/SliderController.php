<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSlide;
use App\Resolution;
use App\Slide;
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
        $slides = Slide::all();
        return view('slide.index', [
            'resolutions' => $resolutions,
            'slides' => $slides
        ]);
    }

    public function store(StoreSlide $request)
    {
        Slide::insert([
            'name' => $request->name,
            'date_from' => $request->date_from,
            'date_to' => $request->date_to,
            'file' => $request->file,
            'resolution_id' => $request->resolution_id,
            'show_time' => $request->show_time,
            'order' => $request->order,
            'is_default' => (bool)$request->is_default,
            'is_active' => (bool)$request->is_active,
        ]);
        return redirect()->back()->withSuccess('Слайд добавлен');
    }
}
