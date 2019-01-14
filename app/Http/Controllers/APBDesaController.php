<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PelaporanModel;
use App\PendapatanModel;
use App\DetailPendapatanModel;
use App\DesaModel;
use App\PembiayaanModel;
use App\DetailPembiayaanModel;
use App\BelanjaModel;
use App\DetailBelanjaModel;
use App\KecamatanModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class APBDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $total=0;
        $total2=0;

        $data=PelaporanModel::find($id);
        $desa=DesaModel::where('id','=',$data->id_desa)->first();
        $kecamatan=KecamatanModel::where('id','=',$desa->id_kecamatan)->first();
        
        $data2=PendapatanModel::with('daftar_lampiran')->where('id_pelaporan','=',$id)->get();
        $id_pendapatan=PendapatanModel::select('id')->where('id_pelaporan','=',$id)->get()->pluck('id')->toArray();
        foreach($data2 as $index => $dana){
            $total += $dana->pendapatan;
        }
        $totpenerimaan=0;
        $totpengeluaran=0;
        $data3=PembiayaanModel::where('id_pelaporan','=',$id)->get();
        $namapenerimaan=["Sisa lebih perhitungan anggaran (SILPA) tahun sebelumnya","Pencairan dana cadangan","Hasil penjualan kekayaan desa yang dipisahkan"];
        $namapengeluaran=["Pembentukan dana cadangan","Penyertaan modal desa"];
        $totalpenerimaan=PembiayaanModel::where('id_pelaporan','=',$id)
        ->whereIn('nama', $namapenerimaan)->sum('pembiayaan');
        $totalpengeluaran=PembiayaanModel::where('id_pelaporan','=',$id)
        ->whereIn('nama', $namapengeluaran)->sum('pembiayaan');
        $data4=BelanjaModel::where('id_pelaporan','=',$id)->get();
        foreach($data4 as $index => $dana){
            $total2 += $dana->belanja;
        }
        $pemerintahan=BelanjaModel::where('tipe','like','Penyelenggaraan Pemerintahan Desa')->pluck('belanja');
        $pembangunan=BelanjaModel::where('tipe','like','Pelaksanaan Pembangunan Desa')->pluck('belanja');
        $pembinaan=BelanjaModel::where('tipe','like','Pembinaan Kemasyarakatan Desa')->pluck('belanja');
        $pemberdayaan=BelanjaModel::where('tipe','like','Pemberdayaan Masyarakat Desa')->pluck('belanja');
        $takterduga=BelanjaModel::where('tipe','like','Belanja Tak Terduga')->pluck('belanja');
        if($data->status==0){
            return view('apbdesa/apbdesa',compact('data','data2','total','data3','totalpenerimaan','totalpengeluaran','total2','data4','desa','kecamatan'))
            ->with('pemerintahan',json_encode($pemerintahan,JSON_NUMERIC_CHECK))
            ->with('pembangunan',json_encode($pembangunan,JSON_NUMERIC_CHECK))
            ->with('pembinaan',json_encode($pembinaan,JSON_NUMERIC_CHECK))
            ->with('pemberdayaan',json_encode($pemberdayaan,JSON_NUMERIC_CHECK))
            ->with('takterduga',json_encode($takterduga,JSON_NUMERIC_CHECK));
        }
        else{
            return view('apbdesa/apbdesakonfirmasi',compact('data','data2','total','data3','totalpenerimaan','totalpengeluaran','total2','data4','desa','kecamatan'))
            ->with('pemerintahan',json_encode($pemerintahan,JSON_NUMERIC_CHECK))
            ->with('pembangunan',json_encode($pembangunan,JSON_NUMERIC_CHECK))
            ->with('pembinaan',json_encode($pembinaan,JSON_NUMERIC_CHECK))
            ->with('pemberdayaan',json_encode($pemberdayaan,JSON_NUMERIC_CHECK))
            ->with('takterduga',json_encode($takterduga,JSON_NUMERIC_CHECK));
        }

    }

    public function index2($id)
    {
        $total=0;
        $total2=0;
        $data=PelaporanModel::find($id);
        $iddesa=$data->id_desa;
        $desa=DesaModel::where('id','=',$iddesa)->first();
        
        $kecamatan=KecamatanModel::where('id','=',$desa->id_kecamatan)->first();
        
        $data2=PendapatanModel::with('daftar_lampiran')->where('id_pelaporan','=',$id)->get();
        $id_pendapatan=PendapatanModel::select('id')->where('id_pelaporan','=',$id)->get()->pluck('id')->toArray();
        foreach($data2 as $index => $dana){
            $total += $dana->pendapatan;
        }
        $totpenerimaan=0;
        $totpengeluaran=0;
        $data3=PembiayaanModel::where('id_pelaporan','=',$id)->get();
        $namapenerimaan=["Sisa lebih perhitungan anggaran (SILPA) tahun sebelumnya","Pencairan dana cadangan","Hasil penjualan kekayaan desa yang dipisahkan"];
        $namapengeluaran=["Pembentukan dana cadangan","Penyertaan modal desa"];
        $totalpenerimaan=PembiayaanModel::where('id_pelaporan','=',$id)
        ->whereIn('nama', $namapenerimaan)->sum('pembiayaan');
        $totalpengeluaran=PembiayaanModel::where('id_pelaporan','=',$id)
        ->whereIn('nama', $namapengeluaran)->sum('pembiayaan');
        $data4=BelanjaModel::where('id_pelaporan','=',$id)->get();
        foreach($data4 as $index => $dana){
            $total2 += $dana->belanja;
        }
        
        $pemerintahan=BelanjaModel::where('tipe','like','Penyelenggaraan Pemerintahan Desa')->pluck('belanja');
        $pembangunan=BelanjaModel::where('tipe','like','Pelaksanaan Pembangunan Desa')->pluck('belanja');
        $pembinaan=BelanjaModel::where('tipe','like','Pembinaan Kemasyarakatan Desa')->pluck('belanja');
        $pemberdayaan=BelanjaModel::where('tipe','like','Pemberdayaan Masyarakat Desa')->pluck('belanja');
        $takterduga=BelanjaModel::where('tipe','like','Belanja Tak Terduga')->pluck('belanja');
        if($data->status==0){
            return view('papbdesa/belumdikonfirmasi');
        }
        else{
        return view('papbdesa/papbdesa',compact('data','data2','total','data3','totalpenerimaan','totalpengeluaran','total2','data4','desa','kecamatan'));
    }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    }
}
