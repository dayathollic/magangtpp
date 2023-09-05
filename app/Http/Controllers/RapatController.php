<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Rapat;

class RapatController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        $rapats = Rapat::where('pcm','LIKE','%'.$keyword.'%')
        ->orwhere('kode','LIKE','%'.$keyword.'%')
        ->simplepaginate(5);
        return view('/admin/rapat.index',compact('rapats','keyword'));
        // $pagination=5;
        // $rapats= Rapat::when($request->cari,function ($query) use ($request){
        //     $query->where('pcm','like',"%($request->cari)%");
        // })->orderBy('created_at','desc');

        // return view('/admin/rapat.index')->with('i',($request->input('page',1)-1));
        // $rapats = Rapat::latest()->simplepaginate(5);
        // return view('/admin/rapat.index', compact ('rapats','request'));
    }

    public function create()
    {
        return view('/admin/rapat.create');
    }

    public function edit(Rapat $rapat)
    {
        return view ('/admin/rapat.edit',[
            'rapat' => $rapat,
        ]);
    }

    public function destroy(rapat $rapat)
    {
        // dd($rapat->all());
        if ($rapat->fgd1){
            Storage::delete($rapat->fgd1);
        }
        if ($rapat->fgd2){
            Storage::delete($rapat->fgd2);
        }
        if ($rapat->fgd3){
            Storage::delete($rapat->fgd3);
        }
        rapat::destroy($rapat->id);
        // return redirect()->route('rapat.index');
        return redirect()->route('rapat.index')->with('message', 'report details has been successfully deleted');
    }

    public function store(Request $request)
    {
        // ddd($request);
        // return $request->file('laporan_pendahuluan')->store('laporans');
        $validateDate = $request->validate([
            'kode' => 'required',
            'pcm' => 'required',
            'tahun' => 'required',
            'fgd1' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'fgd2' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'fgd3' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
        ]);

        if ($request->file('fgd1')){
            $validateDate['fgd1'] = $request->file('fgd1')->store('/rapats');
        }
        if ($request->file('fgd2')){
            $validateDate['fgd2'] = $request->file('fgd2')->store('/rapats');
        }
        if ($request->file('fgd3')){
            $validateDate['fgd3'] = $request->file('fgd3')->store('/rapats');
        }
    
        Rapat::create($validateDate);
        return redirect()->route('rapat.index');

    }

    public function update(Request $request,Rapat $rapat)
       {
        
        $rules = [
            'kode' => 'required',
            'pcm' => 'required',
            'tahun' => 'required',
            'fgd1' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'fgd2' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'fgd3' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
        ];

        $validateDate =$request->validate($rules);

        if ($request->file('fgd1')){
            if ($request->oldFgd1){
                Storage::delete($request->oldFgd1);
            }
            $validateDate['fgd1'] = $request->file('fgd1')->store('/rapats');
        }
        if ($request->file('fgd2')){
            if ($request->oldFgd2){
                Storage::delete($request->oldFgd2);
            }
            $validateDate['fgd2'] = $request->file('fgd2')->store('/rapats');
        }
        if ($request->file('fgd3')){
            if ($request->oldFgd3){
                Storage::delete($request->oldFgd3);
            }
            $validateDate['fgd3'] = $request->file('fgd3')->store('/rapats');
        }
       
        
        Rapat::where('id', $rapat->id)
        ->update($validateDate);
        return redirect()->route('rapat.index');
        
        
       }

    //    public function search(Request $request)
    //    {
        // if($request->has('search'))
        // {
        //     $rapat = Rapat::where('kode','LIKE','%'.$request->search.'%')->get();
        // }
        // else
        // {
        //     $rapat = Rapat::all();
        // }
        // return view('admin.rapat.index',['rapat' => $rapat]);
        // return view('/admin/rapat.index', compact ('rapats'));
    //    }
   
}
