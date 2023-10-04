<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventImage;
use App\Models\Slide;

class WelcomController extends Controller
{
    public function index(Request $request)
    {
        $data = Event::all();
        $slide = Slide::all();

        return view('welcome', [
            'datas' => $data,
            'slides' => $slide
        ]);
    }

    public function detail(Request $request)
    {
        $event = Event::detail($request->id)->get();

        $data = EventImage::all()->where('event_id', $request->id);

        return view('detail', [
            'event' => $event,
            'datas' => $data
        ]);
    }

}
