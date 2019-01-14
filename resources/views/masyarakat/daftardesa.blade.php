
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
            @foreach ($datadesa as $index =>$desa)
          <li class="list-group-item"><a href="daftardesa/{{$desa->id}}" title="desa">{{$desa->nama}}</a>

          </li>

          @endforeach
        </ul>
      </div>
      <br>
      
  </div>
</div>
  </section>


  
@stop