<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
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
            $data = Event::data()->paginate(10);
        // }
        
        return view('event.index', [
            'datas' => $data,
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
        return view('event.create');
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
            'name' => $request->name,
            'date_agenda' => $request->date_agenda,
            'location' => $request->location,
            'description' => $request->description,
            'foto' => $file,
        );

        Event::create($student);


        return redirect()->route('event');


    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('event.edit',compact('event'));
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

        $event = Event::find($id);
        $event->name = $request->name;
        $event->date_agenda = $request->date_agenda;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->save();

        if ($request->hasFile('foto')) { 
            $foto = $request->file('foto')->store('produk/'.$tahun.'/'.$bulan.'/'.$hari.'/'.$jam.'/'.auth()->user()->id); 

            $event->update([
                'foto' => $foto,
            ]);
        }

        return redirect()->route('event');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        
        if (!$event) {
            return redirect('/event')->with('error', 'Event tidak ditemukan');
        }
    
        $event->delete();
    
        return redirect('/event')->with('success', 'Event berhasil dihapus');
    }
}
