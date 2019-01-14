
@extends('layouts.homes')

@section('content')

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 mx-auto">

      <br>
      <div class="card" style="">
        <div class="card-header">
          Daftar Desa di Ngawi
        </div>
        <ul class="list-group list-group-flush">
          @foreach ($datapelaporan as $index =>$pelaporan)
          <li class="list-group-item"><a href="/daftardesa/{{$pelaporan->id_desa}}/pelaporan/{{$pelaporan->id}}" title="tahundesa"> APBDesa tahun {{$pelaporan->tahun_apbd}} dan Perencanaan/Monitoring Tahun {{$pelaporan->tahun_perencanaan}}</a>

          </li>

          @endforeach
        </ul>
      </div>
      <br>
      
  </div>
</div>
  </section>


  
@stop