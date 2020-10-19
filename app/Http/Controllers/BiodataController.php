<?php

namespace App\Http\Controllers;

use App\Biodata;
use Illuminate\Http\Request;



class BiodataController extends Controller
{
    public function __construct()
    {
        $this->biodata = new Biodata();
    }

    public function index()
    {
        $biodatas = Biodata::all();
        return view('biodata.index', compact('biodatas'));
    }

    public function create()
    {
        return view('biodata.create');
    }

    public function store()
    {
        $biodata = Biodata::create($this->validateRequest());
        $this->storeImage($biodata);
        
        return redirect()->back()->with(['success' => 'Biodata berhasil dibuat']);
    }

    private function validateRequest(){
        return tap(request()->validate([
            'nama'            => 'required',
            'alamat'          => 'required',
            'images'          => 'file|image|max:5000',
            'telp'            => 'required',
            'gender'          => 'required',
            'agama'           => 'required',
            'tgl_lahir'       => 'required',
            'tmpt_lahir'      => 'required',
            'asal_sekolah'    => 'required',
            'nama_ibu'        => 'required',
            'nama_ayah'       => 'required',
            
        ]), function(){
            if(request()->hasFile('images')){
                request()->validate([
                    'images' => 'file|image|max:5000',
                ]);
            }
        }); 
    }

    private function storeImage($biodata){
        if(request()->has('images')){
            $biodata->update([
                'image' => request()->images->store('uploads', 'public'),
            ]);
            $image = Image::make(public_path('storage/'. $biodata->images))->fit(300,300,null, 'top-left');

            $image->save();
        }
    }

    public function edit($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.edit', compact('biodata'));
    }
}