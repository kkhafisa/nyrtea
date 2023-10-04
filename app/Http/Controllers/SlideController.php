<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\User;

class SlideController extends Controller
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


    public function index(Request $request)
    {
            $data = Slide::data()->paginate(10);
        
        return view('slide.index', [
            'datas' => $data,
        ]);
    }

    public function detail(Request $request)
    {
        $data = Slide::where('id', '=', $request->slide)->get();

        return view('menu.slide.ubah', [
            'data' => $data,
        ]);
    }

    public function create(){
        return view('slide.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'nullable|mimes:JPEG,jpeg,JPG,jpg,PNG,png|max:3084',
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
        if ($request->hasFile('foto')) { $file = $request->file('foto')->store('slide/'.$tahun.'/'.$bulan.'/'.$hari.'/'.$jam.'/'.auth()->user()->id); }

        $student = array(
            'name' => $request->name,
            'foto' => $file,
        );

        Slide::create($student);


        return redirect()->route('slide');


    }

    public function edit($id)
    {
        $slide = Slide::find($id);
        return view('slide.edit',compact('slide'));
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

        $slide = Slide::find($id);
        $slide->name = $request->name;
        $slide->save();

        if ($request->hasFile('foto')) { 
            $foto = $request->file('foto')->store('produk/'.$tahun.'/'.$bulan.'/'.$hari.'/'.$jam.'/'.auth()->user()->id); 

            $slide->update([
                'foto' => $foto,
            ]);
        }

        return redirect()->route('slide');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        
        if (!$slide) {
            return redirect('/slide')->with('error', 'Slide tidak ditemukan');
        }
    
        $slide->delete();
    
        return redirect('/slide')->with('success', 'Slide berhasil dihapus');
    }
}
