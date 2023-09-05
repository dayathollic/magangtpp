<?php

namespace App\Http\Controllers;
use App\Models\Dokumentasi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        $dokumentasis = Dokumentasi::where('nama_kegiatan','LIKE','%'.$keyword.'%')
        ->simplepaginate(5);
        return view('/admin/dokumentasi.index',compact('dokumentasis','keyword'));

        // $dokumentasis = Dokumentasi::latest()->simplepaginate(5);
        // return view('/admin/dokumentasi.index', compact ('dokumentasis'));
    }

    public function create()
    {
        return view('/admin/dokumentasi.create');
    }

    public function edit(Dokumentasi $dokumentasi)
    {
        return view ('/admin/dokumentasi.edit',[
            'dokumentasi' => $dokumentasi,
        ]);
    }

    public function destroy(Dokumentasi $dokumentasi)
    {
        if ($dokumentasi->presensi){
            Storage::delete($dokumentasi->presensi);
        }
        if ($dokumentasi->fgd2){
            Storage::delete($dokumentasi->presesnsi);
        }
        
        Dokumentasi::destroy($dokumentasi->id);
        return redirect()->route('dokumentasi.index');
    }

    public function store(Request $request)
    {
        // ddd($request);
        // return $request->file('laporan_pendahuluan')->store('laporans');
        $validateDate = $request->validate([
            'nama_kegiatan' => 'required',
            'presensi' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'notulensi' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'foto_dan_video' => 'nullable',
        ]);

        if ($request->file('presensi')){
            $validateDate['presensi'] = $request->file('presensi')->store('/dokumentasis');
        }
        if ($request->file('notulensi')){
            $validateDate['notulensi'] = $request->file('notulensi')->store('/dokumentasis');
        }
    
        Dokumentasi::create($validateDate);
        return redirect()->route('dokumentasi.index');

    }

    public function update(Request $request,Dokumentasi $dokumentasi)
       {
        
        $rules = [
            'nama_kegiatan' => 'required',
            'presensi' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'notulensi' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'foto_dan_video' => 'nullable',
        ];

        $validateDate =$request->validate($rules);

        if ($request->file('presensi')){
            if ($request->oldPresensi){
                Storage::delete($request->oldPresensi);
            }
            $validateDate['presensi'] = $request->file('presensi')->store('/dokumentasis');
        }
        if ($request->file('notulensi')){
            if ($request->oldNotulensi){
                Storage::delete($request->oldNotulensi);
            }
            $validateDate['notulensi'] = $request->file('notulensi')->store('/dokumentasis');
        }
       
        
        Dokumentasi::where('id', $dokumentasi->id)
        ->update($validateDate);
        return redirect()->route('dokumentasi.index');
        
       }
}
