<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesaModel;
use App\MasyarakatModel;
use App\PelaporanModel;
use App\PendapatanModel;
use App\BelanjaModel;
use App\PembiayaanModel;
use App\DetailPembiayaanModel;
use App\DetailPendapatanModel;
use App\DetailBelanjaModel;
class MasyarakatController extends Controller
{
    public function daftardesa()
    {
        $datadesa=DesaModel::all();
        $datatahun=PelaporanModel::with('daftar_desa')->where('status','=','sudah diposting')->get();
        return view('masyarakat/daftardesa',compact('datadesa','datatahun'));
    }
    public function daftartahun($id_desa)
    {
        $datapelaporan=PelaporanModel::where('id_desa','=',$id_desa)->where('status','=','sudah diposting')->get();
        return view('masyarakat/daftartahun',compact('datapelaporan'));
    }
    public function daftarapbdesa($id_desa,$id)
    {
        $total=0;
        $total2=0;
        $data=PelaporanModel::find($id);
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
        return view('masyarakat/daftarapbdesa',compact('data','data2','total','data3','totalpenerimaan','totalpengeluaran','total2','data4','data5','total5'));
    }
    public function detailpendapatan($id_desa,$id,$id_pendapatan)
    {
        $data=PendapatanModel::where('id','=',$id_pendapatan)->first();
        $data2=DetailPendapatanModel::where('id_pendapatan','=',$id_pendapatan)->get();
        return view('masyarakat/showpendapatan', compact('data','data2'));
    }
    public function detailbelanja($id_desa,$id,$id_belanja)
    {
        $data=BelanjaModel::where('id','=',$id_belanja)->first();
        $data2=DetailBelanjaModel::where('id_belanja','=',$id_belanja)->get();
        return view('masyarakat/showbelanja', compact('data','data2'));
    }
    public function detailpembiayaan($id_desa,$id,$id_pembiayaan)
    {
        $data=PembiayaanModel::where('id','=',$id_pembiayaan)->first();
        $data2=DetailPembiayaanModel::where('id_pembiayaan','=',$id_pembiayaan)->get();
        return view('masyarakat/showpembiayaan', compact('data','data2'));
    }
}
