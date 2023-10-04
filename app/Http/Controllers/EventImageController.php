<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventImage;
use App\Models\Event;
use App\Models\User;

class EventImageController extends Controller
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

    // public function index(){
    //     return view('event.index');
    // }

    // public function getEvents(){
    //     $data = Event::data()->withTrashed()->paginate(8);

    //     return view('event.index',['datas' => $data]);
    // }

    public function index(Request $request)
    {
        // $pencarian = $request->pencarian;

        // if (!empty($pencarian)) {
        //     $data = Event::data()->where('event', 'ilike', '%'.$pencarian.'%')->withTrashed()->paginate(8);   
        // }else {
            $data = EventImage::data()->paginate(10);

            // $events = Event::where('id', '=', $data->event_id)->get();
        // }
        
        return view('eventimage.index', [
            'datas' => $data
            // 'events' => $events
            // 'pencarian' => $pencarian,
        ]);
    }

    public function detail(Request $request)
    {
        $data = Event::where('id', '=', $request->event)->get();

        return view('menu.event.ubah', [
            'data' => $data,
        ]);
    }

    public function create(){
        $events = Event::all();
        return view('eventimage.create',compact('events'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'nullable|mimes:JPEG,jpeg,JPG,jpg,PNG,png|max:350',
        ],
        [
            'foto.mimes' => "Format file yang diperbolahkan JPEG,JPG,PNG.",
            'foto.max' => "Maksimal file 3084 kb.",
            
        ]);

        $tahun = date('Y');
        $bulan = date('m');
        $hari = date('d');
        $jam = date('H');

        $file = '';
        if ($request->hasFile('foto')) { $file = $request->file('foto')->store('event/'.$tahun.'/'.$bulan.'/'.$hari.'/'.$jam.'/'.auth()->user()->id); }

        $student = array(
            'event_id' => $request->event_id,
            'foto' => $file,
        );

        EventImage::create($student);


        return redirect()->route('event-image');


    }

    public function edit($id)
    {
        $events = Event::all();
        $eventimage = EventImage::find($id);
        return view('eventimage.edit',[
            'eventimage' => $eventimage,
            'events' => $events
        ]);
    }


     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'foto' => 'nullable|mimes:JPEG,jpeg,JPG,jpg,PNG,png|max:350',
        ],
        [
            'foto.mimes' => "Format file yang diperbolahkan JPEG,JPG,PNG.",
            'foto.max' => "Maksimal file 3084 kb.",
            
        ]);

        $tahun = date('Y');
        $bulan = date('m');
        $hari = date('d');
        $jam = date('H');

        $event = EventImage::find($id);
        $event->event_id = $request->event_id;
        $event->save();

        if ($request->hasFile('foto')) { 
            $foto = $request->file('foto')->store('event/'.$tahun.'/'.$bulan.'/'.$hari.'/'.$jam.'/'.auth()->user()->id); 

            $event->update([
                'foto' => $foto,
            ]);
        }

        return redirect()->route('event-image');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = EventImage::find($id);
        
        if (!$event) {
            return redirect('/event-image')->with('error', 'Event image tidak ditemukan');
        }
    
        $event->delete();
    
        return redirect('/event-image')->with('success', 'Event image berhasil dihapus');
    }
}
