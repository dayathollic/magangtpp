<?php

namespace App\Http\Controllers;

use App\Models\DokumenLelang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DokumenLelangController extends Controller
{
    public function index(Request $request)
    {

        $keyword = $request->keyword;
        $dokumenlelangs = DokumenLelang::where('nama_paket_pekerjaan','LIKE','%'.$keyword.'%')
        ->orwhere('kode','LIKE','%'.$keyword.'%')
        // ->orwhere('tahun','LIKE','%'.$keyword.'%')
        // ->orwhere('instansi_pekerjaan','LIKE','%'.$keyword.'%')
        ->orwhere('rak_dokumen','LIKE','%'.$keyword.'%')
        ->simplepaginate(5);
        return view('/admin/dokumenlelang.index',compact('dokumenlelangs','keyword'));

        // $dokumenlelangs = DokumenLelang::latest()->simplepaginate(5);
        // return view('/admin/dokumenlelang.index', compact ('dokumenlelangs'));
    }

    public function create()
    {
        return view('/admin/dokumenlelang.create');
    }

    public function edit(DokumenLelang $dokumenlelang)
    {
        return view ('/admin/dokumenlelang.edit',[
            'dokumenlelang' => $dokumenlelang,
        ]);
    }

    public function destroy(DokumenLelang $dokumenlelang)
    {
        if ($dokumenlelang->data_perusahaan){
            Storage::delete($dokumenlelang->data_perusahaan);
        }
        if ($dokumenlelang->pengalaman_perusahaan){
            Storage::delete($dokumenlelang->pengalaman_perusahaan);
        }
        if ($dokumenlelang->uraian_pengalaman_perusahaan){
            Storage::delete($dokumenlelang->uraian_pengalaman_perusahaan);
        }
        if ($dokumenlelang->ustek){
            Storage::delete($dokumenlelang->ustek);
        }
        if ($dokumenlelang->metodologi_dan_program_kerja){
            Storage::delete($dokumenlelang->metodologi_dan_program_kerja);
        }
        if ($dokumenlelang->jadwal_pekerjaan){
            Storage::delete($dokumenlelang->jadwal_pekerjaan);
        }
        if ($dokumenlelang->tanaga_ahli){
            Storage::delete($dokumenlelang->tanaga_ahli);
        }
        if ($dokumenlelang->komposisi_penugasan){
            Storage::delete($dokumenlelang->komposisi_penugasan);
        }
        if ($dokumenlelang->jadwal_penugasan_ta){
            Storage::delete($dokumenlelang->jadwal_penugasan_ta);
        }
        if ($dokumenlelang->rab_penawaran){
            Storage::delete($dokumenlelang->rab_penawaran);
        }
        DokumenLelang::destroy($dokumenlelang->id);
        return redirect()->route('dokumenlelang.index');
    }

    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'kode' => 'required',
            'nama_paket_pekerjaan' => 'required',
            'rak_dokumen' => 'required',
            'data_perusahaan' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'pengalaman_perusahaan' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'uraian_pengalaman_perusahaan' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'ustek' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'metodologi_dan_program_kerja' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'jadwal_pekerjaan' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'tenaga_ahli' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'komposisi_penugasan' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'jadwal_penugasan_ta' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'rab_penawaran' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
        ]);

        if ($request->file('data_perusahaan')){
            $validateDate['data_perusahaan'] = $request->file('data_perusahaan')->store('/dokumenlelangs');
        }
        if ($request->file('uraian_pengalaman_perusahaan')){
            $validateDate['uraian_pengalaman_perusahaan'] = $request->file('uraian_pengalaman_perusahaan')->store('/dokumenlelangs');
        }
        if ($request->file('ustek')){
            $validateDate['ustek'] = $request->file('ustek')->store('/dokumenlelangs');
        }
        if ($request->file('metodologi_dan_program_kerja')){
            $validateDate['metodologi_dan_program_kerja'] = $request->file('metodologi_dan_program_kerja')->store('/dokumenlelangs');
        }
        if ($request->file('jadwal_pekerjaan')){
            $validateDate['jadwal_pekerjaan'] = $request->file('jadwal_pekerjaan')->store('/dokumenlelangs');
        }
        if ($request->file('tenaga_ahli')){
            $validateDate['tenaga_ahli'] = $request->file('tenaga_ahli')->store('/dokumenlelangs');
        }
        if ($request->file('komposisi_penugasan')){
            $validateDate['komposisi_penugasan'] = $request->file('komposisi_penugasan')->store('/dokumenlelangs');
        }
        if ($request->file('jadwal_penugasan_ta')){
            $validateDate['jadwal_penugasan_ta'] = $request->file('jadwal_penugasan_ta')->store('/dokumenlelangs');
        }
        if ($request->file('rab_penawaran')){
            $validateDate['rab_penawaran'] = $request->file('rab_penawaran')->store('/dokumenlelangs');
        }
    
        DokumenLelang::create($validateDate);
        return redirect()->route('dokumenlelang.index');

    }
       public function update(Request $request,DokumenLelang $dokumenlelang)
       {
        
        $rules = [
            'kode' => 'required',
            'nama_paket_pekerjaan' => 'required',
            'rak_dokumen' => 'required',
            'data_perusahaan' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'pengalaman_perusahaan' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'uraian_pengalaman_perusahaan' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'ustek' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'metodologi_dan_program_kerja' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'jadwal_pekerjaan' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'tenaga_ahli' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'komposisi_penugasan' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'jadwal_penugasan_ta' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'rab_penawaran' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
        ];

        $validateDate =$request->validate($rules);

        if ($request->file('data_perusahaan')){
            if ($request->oldDataPerusahaan){
                Storage::delete($request->oldDataPerusahaan);
            }
            $validateDate['data_perusahaan'] = $request->file('data_perusahaan')->store('/dokumenlelangs');
        }
        if ($request->file('pengalaman_perusahaan')){
            if ($request->oldPengalamanPerusahaan){
                Storage::delete($request->oldPengalamanPerusahaan);
            }
            $validateDate['pengalaman_perusahaan'] = $request->file('pengalaman_perusahaan')->store('/dokumenlelangs');
        }
        if ($request->file('uraian_pengalaman_perusahaan')){
            if ($request->oldUraianPengalamaPerusahaan){
                Storage::delete($request->oldUraianPengalamaPerusahaan);
            }
            $validateDate['uraian_pengalaman_perusahaan'] = $request->file('uraian_pengalaman_perusahaan')->store('/dokumenlelangs');
        }
        if ($request->file('ustek')){
            if ($request->oldUstek){
                Storage::delete($request->oldUstek);
            }
            $validateDate['ustek'] = $request->file('ustek')->store('/dokumenlelangs');
        }
        if ($request->file('metodolodi_dan_program_kerja')){
            if ($request->oldMetodologiDanProgramKerja){
                Storage::delete($request->oldMetodologiDanProgramKerja);
            }
            $validateDate['metodolodi_dan_program_kerja'] = $request->file('metodolodi_dan_program_kerja')->store('/dokumenlelangs');
        }
        if ($request->file('jadwal_pekerjaan')){
            if ($request->oldJadwalPekerjaan){
                Storage::delete($request->oldJadwalPekerjaan);
            }
            $validateDate['jadwal_pekerjaan'] = $request->file('jadwal_pekerjaan')->store('/dokumenlelangs');
        }
        if ($request->file('tenaga_ahli')){
            if ($request->oldTenagaAhli){
                Storage::delete($request->oldTenagaAhli);
            }
            $validateDate['tenaga_ahli'] = $request->file('tenaga_ahli')->store('/dokumenlelangs');
        }
        if ($request->file('komposisi_penugasan')){
            if ($request->oldKomposisiPenugasan){
                Storage::delete($request->oldKomposisiPenugasan);
            }
            $validateDate['komposisi_penugasan'] = $request->file('komposisi_penugasan')->store('/dokumenlelangs');
        }
        if ($request->file('jadwal_penugasan_ta')){
            if ($request->oldJadwalPenugasanTa){
                Storage::delete($request->oldJadwalPenugasanTa);
            }
            $validateDate['jadwal_penugasan_ta'] = $request->file('jadwal_penugasan_ta')->store('/dokumenlelangs');
        }
        if ($request->file('rab_penawaran')){
            if ($request->oldRabPenawaran){
                Storage::delete($request->oldRabPenawaran);
            }
            $validateDate['rab_penawaran'] = $request->file('rab_penawaran')->store('/dokumenlelangs');
        }

        
        DokumenLelang::where('id', $dokumenlelang->id)
        ->update($validateDate);
        return redirect()->route('dokumenlelang.index');
        
       }
}
