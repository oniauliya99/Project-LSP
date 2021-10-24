<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Category;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arsips = Arsip::latest();
        if (request('search')){
           $arsips->where('judul','like','%'.request('search').'%');       
        }
        return view('pages.index',[
                    'arsip' => $arsips->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.arsip', [
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = $request->validate([
            'nomor_surat' => 'required',
            'category_id' => 'required',
            'judul' => 'required',
            'file' => 'file|max:2048|required'
        ]);
        if ($request->file('file')) {
            $file = $request->file('file')->store('pdf', 'public');
        }
        $save = new Arsip;
        $save->file = $file;
        $save->nomor_surat = $request->nomor_surat;
        $save->category_id = $request->category_id;
        $save->judul = $request->judul;
        $save->save();
        return redirect('/arsip');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Arsip::find($id);
        return view('pages.show', [
                'detail' => $show
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Arsip::find($id)->delete();
        return back();
    }
    public function simpan(Request $request)
    {
        if ($request->file('file')) {
            $file = $request->file('file')->store('pdf', 'public');
        }
        $save = new Arsip;
        $save->file = $file;
        $save->nomor_surat = $request->nomor_surat;
        $save->category_id = $request->category_id;
        $save->judul = $request->judul;
        $save->save();
        return redirect('/dashboard');
    }

    public function tampil()
    {
        $arsips = Arsip::latest();
        if (request('search')){
           $arsips->where('judul','like','%'.request('search').'%');       
        }
        return view('pages.index',[
                    'arsip' => $arsips->get()]);
    }
    public function download($id){
        $letters = Arsip::find($id);
        $path = public_path('storage/'. $letters->file);
        return response()->download($path);
    }
}