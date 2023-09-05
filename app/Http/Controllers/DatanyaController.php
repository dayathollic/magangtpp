<?php

namespace App\Http\Controllers;
use App\Models\Datanya;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DatanyaController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        $datanyas = Datanya::where('nama_paket_pekerjaan','LIKE','%'.$keyword.'%')
        ->orwhere('no','LIKE','%'.$keyword.'%')
        // ->orwhere('tahun','LIKE','%'.$keyword.'%')
        ->simplepaginate(5);
        return view('/admin/data.index',compact('datanyas','keyword'));
        // $datanyas = Datanya::latest()->simplepaginate(5);
        // return view('/admin/data.index', compact ('datanyas'));
    }

    public function create()
    {
        return view('/admin/data.create');
    }

    public function edit(Datanya $data)
    {
        return view ('/admin/data.edit',[
            'data' => $data,
        ]);
    }

    public function destroy(Datanya $data)
    {
        if ($data->sumber_data){
            Storage::delete($data->sumber_data);
        }
        if ($data->data_sekunder){
            Storage::delete($data->data_sekunder);
        }
        if ($data->data_primer){
            Storage::delete($data->data_primer);
        }
        if ($data->pengolahan_data){
            Storage::delete($data->pengolahan_data);
        }
        if ($data->daftar_pertanyaan){
            Storage::delete($data->daftar_pertanyaan);
        }
        if ($data->kriteria_responden){
            Storage::delete($data->kriteria_responden);
        }
        if ($data->hasil_survey){
            Storage::delete($data->hasil_survey);
        }
        Datanya::destroy($data->id);
        return redirect()->route('data.index');
    }

    public function store(Request $request)
    {
        // ddd($request);
        // return $request->file('laporan_pendahuluan')->store('laporans');
        $validateDate = $request->validate([
            'no' => 'required',
            'nama_paket_pekerjaan' => 'required',
            'sumber_data' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'data_sekunder' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'data_primer' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'pengolahan_data' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'daftar_pertanyaan' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'kriteria_responden' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'hasil_survey' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
        ]);

        if ($request->file('sumber_data')){
            $validateDate['sumber_data'] = $request->file('sumber_data')->store('/datanyas');
        }
        if ($request->file('data_sekunder')){
            $validateDate['data_sekunder'] = $request->file('data_sekunder')->store('/datanyas');
        }
        if ($request->file('data_primer')){
            $validateDate['data_primer'] = $request->file('data_primer')->store('/datanyas');
        }
        if ($request->file('pengolahan_data')){
            $validateDate['pengolahan_data'] = $request->file('pengolahan_data')->store('/datanyas');
        }
        if ($request->file('daftar_pertanyaan')){
            $validateDate['daftar_pertanyaan'] = $request->file('daftar_pertanyaan')->store('/datanyas');
        }
        if ($request->file('kriteria_responden')){
            $validateDate['kriteria_responden'] = $request->file('kriteria_responden')->store('/datanyas');
        }
        if ($request->file('hasil_survey')){
            $validateDate['hasil_survey'] = $request->file('hasil_survey')->store('/datanyas');
        }
    
        Datanya::create($validateDate);
        return redirect()->route('data.index');

    }
       public function update(Request $request,Datanya $data)
       {
        
        $rules = [
            'no' => 'required',
            'nama_paket_pekerjaan' => 'required',
            'sumber_data' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'data_sekunder' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'data_primer' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'pengolahan_data' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'daftar_pertanyaan' =>'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'kriteria_responden' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
            'hasil_survey' => 'nullable|mimes:pdf,jpeg,png,docx,docs,xlsx,ppt,pptx',
        ];

        $validateDate =$request->validate($rules);

        if ($request->file('sumber_data')){
            if ($request->oldSumberData){
                Storage::delete($request->oldSumberData);
            }
            $validateDate['sumber_data'] = $request->file('sumber_data')->store('/datanyas');
        }
        if ($request->file('data_sekunder')){
            if ($request->oldDataSekunder){
                Storage::delete($request->oldDataSekunder);
            }
            $validateDate['data_sekunder'] = $request->file('data_sekunder')->store('/datanyas');
        }
        if ($request->file('data_primer')){
            if ($request->oldDataPrimer){
                Storage::delete($request->oldDataPrimer);
            }
            $validateDate['data_primer'] = $request->file('data_primer')->store('/datanyas');
        }
        if ($request->file('pengolahan_data')){
            if ($request->oldPengolahanData){
                Storage::delete($request->oldPengolahanData);
            }
            $validateDate['pengolahan_data'] = $request->file('pengolahan_data')->store('/datanyas');
        }
        if ($request->file('daftar_pertanyaan')){
            if ($request->oldDaftarPertanyaan){
                Storage::delete($request->oldDaftarPertanyaan);
            }
            $validateDate['daftar_pertanyaan'] = $request->file('daftar_pertanyaan')->store('/datanyas');
        }
        if ($request->file('kriteria_responden')){
            if ($request->oldKriteriaResponden){
                Storage::delete($request->oldKriteriaResponden);
            }
            $validateDate['kriteria_responden'] = $request->file('kriteria_responden')->store('/datanyas');
        }
        if ($request->file('hasil_survey')){
            if ($request->oldHasilSurvey){
                Storage::delete($request->oldHasilSurvey);
            }
            $validateDate['hasil_survey'] = $request->file('hasil_survey')->store('/datanyas');
        }

        
        Datanya::where('id', $data->id)
        ->update($validateDate);
        return redirect()->route('data.index');
        
       }
}
