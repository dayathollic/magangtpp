<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Kontrak;

class KontrakController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        $kontraks = Kontrak::where('nama_paket_pekerjaan','LIKE','%'.$keyword.'%')
        ->orwhere('kode','LIKE','%'.$keyword.'%')
        ->orwhere('tahun','LIKE','%'.$keyword.'%')
        ->orwhere('rak_dokumen','LIKE','%'.$keyword.'%')
        ->simplepaginate(5);
        return view('/admin/kontrak.index',compact('kontraks','keyword'));

        // $kontraks = Kontrak::latest()->simplepaginate(5);
        // return view('/admin/kontrak.index', compact ('kontraks'));
    }

    public function create()
    {
        return view('/admin/kontrak.create');
    }

    public function edit(Kontrak $kontrak)
    {
        return view ('/admin/kontrak.edit',[
            'kontrak' => $kontrak,
        ]);
    }

    public function destroy(Kontrak $kontrak)
    {
        if ($kontrak->spk){
            Storage::delete($kontrak->spk);
        }
        if ($kontrak->spmk){
            Storage::delete($kontrak->spmk);
        }
        if ($kontrak->bast){
            Storage::delete($kontrak->bast);
        }
        if ($kontrak->pajak1){
            Storage::delete($kontrak->pajak1);
        }
        if ($kontrak->pajak1){
            Storage::delete($kontrak->pajak1);
        }
        if ($kontrak->pajak2){
            Storage::delete($kontrak->pajak2);
        }
        if ($kontrak->pajak3){
            Storage::delete($kontrak->pajak3);
        }
        if ($kontrak->referensi_perusahaan){
            Storage::delete($kontrak->referensi_perusahaan);
        }
        if ($kontrak->referensi_ta){
            Storage::delete($kontrak->referensi_ta);
        }
        Kontrak::destroy($kontrak->id);
        return redirect()->route('kontrak.index');
    }

    public function store(Request $request)
    {
        // ddd($request);
        // return $request->file('laporan_pendahuluan')->store('laporans');
        $validateDate = $request->validate([
            'kode' => 'required',
            'nama_paket_pekerjaan' => 'required',
            'tahun' => 'required',
            'rak_dokumen' => 'required',
            'spk' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'spmk' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'bast' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'pajak1' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'pajak2' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'pajak3' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'referensi_perusahaan' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'referensi_ta' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
        ]);

        if ($request->file('spk')){
            $validateDate['spk'] = $request->file('spk')->store('/kontraks');
        }
        if ($request->file('spmk')){
            $validateDate['spmk'] = $request->file('spmk')->store('/kontraks');
        }
        if ($request->file('bast')){
            $validateDate['bast'] = $request->file('bast')->store('/kontraks');
        }
        if ($request->file('pajak1')){
            $validateDate['pajak1'] = $request->file('pajak1')->store('/kontraks');
        }
        if ($request->file('pajak2')){
            $validateDate['pajak2'] = $request->file('pajak2')->store('/kontraks');
        }
        if ($request->file('pajak3')){
            $validateDate['pajak3'] = $request->file('pajak3')->store('/kontraks');
        }
        if ($request->file('referensi_perusahaan')){
            $validateDate['referensi_perusahaan'] = $request->file('referensi_perusahaan')->store('/kontraks');
        }
        if ($request->file('referensi_ta')){
            $validateDate['referensi_ta'] = $request->file('referensi_ta')->store('/kontraks');
        }
    
        Kontrak::create($validateDate);
        return redirect()->route('kontrak.index');

    }

    public function update(Request $request,Kontrak $kontrak)
       {
        
        $rules = [
            'kode' => 'required',
            'nama_paket_pekerjaan' => 'required',
            'tahun' => 'required',
            'rak_dokumen' => 'required',
            'spk' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'spmk' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'bast' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'pajak1' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'pajak2' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'pajak3' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'referensi_perusahaan' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'referensi_ta' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
        ];

        $validateDate =$request->validate($rules);

        if ($request->file('spk')){
            if ($request->oldSpk){
                Storage::delete($request->oldSpk);
            }
            $validateDate['spk'] = $request->file('spk')->store('/kontraks');
        }
        if ($request->file('spmk')){
            if ($request->oldSpmk){
                Storage::delete($request->oldSpmk);
            }
            $validateDate['spmk'] = $request->file('spmk')->store('/kontraks');
        }
        if ($request->file('bast')){
            if ($request->oldBast){
                Storage::delete($request->oldBast);
            }
            $validateDate['bast'] = $request->file('bast')->store('/kontraks');
        }
        if ($request->file('pajak1')){
            if ($request->oldPajak1){
                Storage::delete($request->oldPajak1);
            }
            $validateDate['pajak1'] = $request->file('pajak1')->store('/kontraks');
        }
        if ($request->file('pajak2')){
            if ($request->oldPajak2){
                Storage::delete($request->oldPajak2);
            }
            $validateDate['pajak2'] = $request->file('pajak2')->store('/kontraks');
        }
        if ($request->file('pajak3')){
            if ($request->oldPajak3){
                Storage::delete($request->oldPajak3);
            }
            $validateDate['pajak3'] = $request->file('pajak3')->store('/kontraks');
        }
        if ($request->file('referensi_perusahaan')){
            if ($request->oldReferensiPerusahaan){
                Storage::delete($request->oldReferensiPerusahaan);
            }
            $validateDate['referensi_perusahaan'] = $request->file('referensi_perusahaan')->store('/kontraks');
        }

        
        Kontrak::where('id', $kontrak->id)
        ->update($validateDate);
        return redirect()->route('kontrak.index');
        
       }

}
