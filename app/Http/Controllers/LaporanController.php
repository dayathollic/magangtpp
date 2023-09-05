<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        $laporans = Laporan::where('nama_paket_pekerjaan','LIKE','%'.$keyword.'%')
        ->orwhere('kode','LIKE','%'.$keyword.'%')
        ->orwhere('tahun','LIKE','%'.$keyword.'%')
        ->orwhere('instansi_pekerjaan','LIKE','%'.$keyword.'%')
        ->orwhere('rak_dokumen','LIKE','%'.$keyword.'%')
        ->simplepaginate(5);
        return view('/admin/laporan.index',compact('laporans','keyword'));
        
        // $laporans = Laporan::latest()->simplepaginate(5);
        // return view('/admin/laporan.index', compact ('laporans'));
    }

    public function create()
    {
        return view('/admin/laporan.create');
    }

    public function edit(Laporan $laporan)
    {
        return view ('/admin/laporan.edit',[
            'laporan' => $laporan,
        ]);
    }

    public function destroy(Laporan $laporan)
    {
        if ($laporan->laporan_pendahuluan){
            Storage::delete($laporan->laporan_pendahuluan);
        }
        if ($laporan->sampul){
            Storage::delete($laporan->sampul);
        }
        if ($laporan->laporan_antara){
            Storage::delete($laporan->laporan_antara);
        }
        if ($laporan->laporan_akhir){
            Storage::delete($laporan->laporan_akhir);
        }
        if ($laporan->policy_brief){
            Storage::delete($laporan->policy_brief);
        }
        if ($laporan->naskah_akademik){
            Storage::delete($laporan->naskah_akademik);
        }
        if ($laporan->rancangan_peraturan){
            Storage::delete($laporan->rancangan_peraturan);
        }
        if ($laporan->produk_lainnya){
            Storage::delete($laporan->produk_lainnya);
        }
        Laporan::destroy($laporan->id);
        return redirect()->route('laporan.index');
    }

    public function store(Request $request)
    {
        // ddd($request);
        // return $request->file('laporan_pendahuluan')->store('laporans');
        $validateDate = $request->validate([
            'kode' => 'required',
            'nama_paket_pekerjaan' => 'required',
            'abstrak' => 'nullable',
            'tahun' => 'required',
            'instansi_pekerjaan' => 'required',
            'rak_dokumen' => 'required',
            'laporan_pendahuluan' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'sampul' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'laporan_antara' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'laporan_akhir' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'policy_brief' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'naskah_akademik' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'rancangan_peraturan' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'produk_lainnya' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
        ]);

        if ($request->file('laporan_pendahuluan')){
            $validateDate['laporan_pendahuluan'] = $request->file('laporan_pendahuluan')->store('/laporans');
        }
        if ($request->file('sampul')){
            $validateDate['sampul'] = $request->file('sampul')->store('/laporans');
        }
        if ($request->file('laporan_antara')){
            $validateDate['laporan_antara'] = $request->file('laporan_antara')->store('/laporans');
        }
        if ($request->file('laporan_akhir')){
            $validateDate['laporan_akhir'] = $request->file('laporan_akhir')->store('/laporans');
        }
        if ($request->file('policy_brief')){
            $validateDate['policy_brief'] = $request->file('policy_brief')->store('/laporans');
        }
        if ($request->file('naskah_akademik')){
            $validateDate['naskah_akademik'] = $request->file('naskah_akademik')->store('/laporans');
        }
        if ($request->file('rancangan_peraturan')){
            $validateDate['rancangan_peraturan'] = $request->file('rancangan_peraturan')->store('/laporans');
        }
        if ($request->file('produk_lainnya')){
            $validateDate['produk_lainnya'] = $request->file('produk_lainnya')->store('/laporans');
        }
    
        Laporan::create($validateDate);
        return redirect()->route('laporan.index');

    }
       public function update(Request $request,Laporan $laporan)
       {
        
        $rules = [
            'kode' => 'required',
            'nama_paket_pekerjaan' => 'required',
            'abstrak' => 'nullable',
            'tahun' => 'required',
            'instansi_pekerjaan' => 'required',
            'rak_dokumen' => 'required',
            'laporan_pendahuluan' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'sampul' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'laporan_antara' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'laporan_akhir' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'policy_brief' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'naskah_akademik' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'rancangan_peraturan' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'produk_lainnya' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
        ];

        $validateDate =$request->validate($rules);

        if ($request->file('laporan_pendahuluan')){
            if ($request->oldLaporanPendahuluan){
                Storage::delete($request->oldLaporanPendahuluan);
            }
            $validateDate['laporan_pendahuluan'] = $request->file('laporan_pendahuluan')->store('/laporans');
        }
        if ($request->file('sampul')){
            if ($request->oldSampul){
                Storage::delete($request->oldSampul);
            }
            $validateDate['sampul'] = $request->file('sampul')->store('/laporans');
        }
        if ($request->file('laporan_antara')){
            if ($request->oldLaporanAntara){
                Storage::delete($request->oldLaporanAntara);
            }
            $validateDate['laporan_antara'] = $request->file('laporan_antara')->store('/laporans');
        }
        if ($request->file('laporan_akhir')){
            if ($request->oldLaporanAkhir){
                Storage::delete($request->oldLaporanAkhir);
            }
            $validateDate['laporan_akhir'] = $request->file('laporan_akhir')->store('/laporans');
        }
        if ($request->file('policy_brief')){
            if ($request->oldPolicyBrief){
                Storage::delete($request->oldPolicyBrief);
            }
            $validateDate['policy_brief'] = $request->file('policy_brief')->store('/laporans');
        }
        if ($request->file('naskah_akademik')){
            if ($request->oldNaskahAkademik){
                Storage::delete($request->oldNaskahAkademik);
            }
            $validateDate['naskah_akademik'] = $request->file('naskah_akademik')->store('/laporans');
        }
        if ($request->file('rancangan_peraturan')){
            if ($request->oldRancanganPeraturan){
                Storage::delete($request->oldRancanganPeraturan);
            }
            $validateDate['rancangan_peraturan'] = $request->file('rancangan_peraturan')->store('/laporans');
        }
        if ($request->file('produk_lainnya')){
            if ($request->oldProdukLainnya){
                Storage::delete($request->oldProdukLainnya);
            }
            $validateDate['produk_lainnya'] = $request->file('produk_lainnya')->store('/laporans');
        }

        
        Laporan::where('id', $laporan->id)
        ->update($validateDate);
        return redirect()->route('laporan.index');
        
       }
}
