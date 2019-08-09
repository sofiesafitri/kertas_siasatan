<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class Siasatan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('login')){
            return redirect('')->with('alert','You Should Login First');
        }
        else{
        $data = DB::table('database')->paginate(15);
        return view ('data',['data'=>$data]);
        }
    }

    public function homepage()
    {
        if(!Session::get('login')){
            return redirect('')->with('alert','You Should Login First');
        }
        else{
        $data = DB::table('database')->paginate(15);
        $countJumlah = DB::table('database')->count();
        $countSiasatan = DB::table('database')->where('Proses_Siasatan','Siasatan')->count();
        $countSelesai = DB::table('database')->where('Proses_Siasatan','Selesai')->count();
        $viewShareVars = array_keys(get_defined_vars());
        return view ('homepage',compact($viewShareVars));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Session::get('login')){
            return redirect('')->with('alert','You Should Login First');
        }
        else{
        return view('cipta_kertas');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('database')->insert([
            'tahun'=>$request->tahun,
            'bulan'=>$request->bulan,
            'tarikh_KS_buka'=>$request->tarikh_KS_buka,
            'no_rpt'=>$request->no_rpt,
            'no_ks'=>$request->no_ks,
            'IO'=>$request->IO,
            'Seksyen'=>$request->Seksyen,
            'Kategori'=>$request->Kategori,
            'Kerugian'=>$request->Kerugian,
            'Proses_Siasatan'=>$request->Proses_Siasatan,
            'Status_Siasatan'=>$request->Status_Siasatan,
            'Pertuduhan'=>$request->Pertuduhan,
            'No_Kes'=>$request->No_Kes,
            'Keputusan_Kes'=>$request->Keputusan_Kes,
            'Tarikh_Edaran_KS'=>$request->Tarikh_Edaran_KS,
            'Tarikh_Minit_KS'=>$request->Tarikh_Minit_KS,
            'Lokasi_KS'=>$request->Lokasi_KS,
            'Tempoh_Had_Masa_Tindakan'=>$request->Tempoh_Had_Masa_Tindakan,
            'Tarikh_Akhir_Had_Masa'=>$request->Tarikh_Akhir_Had_Masa,
        ]);
        return redirect ('data')->with('alert-success','Data Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        if(!Session::get('login')){
            return redirect('')->with('alert','You Should Login First');
        }
        else{
        $data = DB::table('database')->where('id',$id)->get();
        return view ('edit_kertas',['data'=>$data]);
        }
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
        DB::table('database')->where('id',$id)->update([
            'tahun'=>$request->tahun,
            'bulan'=>$request->bulan,
            'tarikh_KS_buka'=>$request->tarikh_KS_buka,
            'no_rpt'=>$request->no_rpt,
            'no_ks'=>$request->no_ks,
            'IO'=>$request->IO,
            'Seksyen'=>$request->Seksyen,
            'Kategori'=>$request->Kategori,
            'Kerugian'=>$request->Kerugian,
            'Proses_Siasatan'=>$request->Proses_Siasatan,
            'Status_Siasatan'=>$request->Status_Siasatan,
            'Pertuduhan'=>$request->Pertuduhan,
            'No_Kes'=>$request->No_Kes,
            'Keputusan_Kes'=>$request->Keputusan_Kes,
            'Tarikh_Edaran_KS'=>$request->Tarikh_Edaran_KS,
            'Tarikh_Minit_KS'=>$request->Tarikh_Minit_KS,
            'Lokasi_KS'=>$request->Lokasi_KS,
            'Tempoh_Had_Masa_Tindakan'=>$request->Tempoh_Had_Masa_Tindakan,
            'Tarikh_Akhir_Had_Masa'=>$request->Tarikh_Akhir_Had_Masa,
            'updated_at'=> date('Y-m-d H:i:s')
            ]);
        return redirect('/data')->with('alert-success','Data Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('database')->where('id',$id)->delete();
        return redirect('/data')->with('alert-success','Data Deleted!');
    }

    public function search(Request $request)
    {
        $this->validate($request,[
            'limit' => 'integer',
        ]);
        $search = $request->search;
        $data = DB::table('database')
        ->where('no_rpt','like',"%".$search."%")
        ->orWhere('no_ks','like',"%".$search."%")
        ->orWhere('IO','like',"%".$search."%")
        ->paginate($request->limit ? $request->limit:10);
        $data->appends($request->only('search','limit'));
        return view('data',['data'=>$data]);
    }

}
