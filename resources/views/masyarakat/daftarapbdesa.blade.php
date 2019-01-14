
@extends('layouts.home')

@section('content')
<!-- Main Content -->
<div class="container">
    <br>

                      <hr>
                      <div class="card">
                            <div class="card-header">
                            Pendapatan Tahun {{$data->tahun_apbd}}
                            </div>
                            <div class="card-body">
                                    <div class="form-group">
                                            <h6>Total Pendapatan : Rp. {{number_format($total,0,",",".")}}</h6>
                                            <table id="pelaporan"  class="display table table-striped table-bordered" style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th width="10">No</th>
                                                        <th>Nama Pendapatan</th>
                                                        <th>Pendapatan</th>
                                                        <th width="20"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                              @foreach ($data2 as $index =>$pendapatan)
                                              <?php $no=1;?>
                                              <tr>
                                          <td>{{$index+1}}</td>
                                          <td><a href="/daftardesa/{{$data->id_desa}}/pelaporan/{{$data->id}}/pendapatan/{{$pendapatan->id}}">{{$pendapatan->nama}}</a></td>
                                          <td>Rp. {{number_format($pendapatan->pendapatan,0,",",".")}}</td>
                                        </tr>
                                      
                                      
                                          @endforeach
                                        </tbody>
                                                <tfoot>
                                            
                                                </tfoot>
                                                </table>
                                              </div>
                            </div>
                          </div>
 
                                    <hr>
                                    <div class="card">
                                            <div class="card-header">
                                            Belanja Tahun {{$data->tahun_apbd}}
                                            </div>
                                            <div class="card-body">
                                                    <div class="form-group">
                                                            <h6>Total Belanja : Rp. {{number_format($total,0,",",".")}}</h6>
                                                            <table id="pelaporan"  class="display table table-striped table-bordered" style="width:100%">
                                                                    <thead>
                                                                    <tr>
                                                                        <th width="10">No</th>
                                                                        <th>Nama Belanja</th>
                                                                        <th>Belanja</th>
                                                                        <th>Tipe Belanja</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                              @foreach ($data4 as $index =>$belanja)
                                                              <?php $no=1;?>
                                                              <tr>
                                                          <td>{{$index+1}}</td>
                                                          <td><a href="/daftardesa/{{$data->id_desa}}/pelaporan/{{$data->id}}/belanja/{{$belanja->id}}">{{$belanja->nama}}</a></td>
                                                          <td>Rp. {{number_format($belanja->belanja,0,",",".")}}</td>
                                                          <td>{{$belanja->tipe}}</td>
                                                      </tr>
                                                      
                                                      
                                                          @endforeach
                                                        </tbody>
                                                                <tfoot>
                                                            
                                                                </tfoot>
                                                                </table>
                                                              </div>
                                            </div>
                                          </div> 
                                    <hr>

                                    <div class="card">
                                            <div class="card-header">
                                            Pembiayaan Tahun {{$data->tahun_apbd}}
                                            </div>
                                            <div class="card-body">
                                                    <div class="form-group">
                                                            <h6>Total Penerimaan Pembiayaan : Rp. {{number_format($totalpenerimaan,0,",",".")}}</h6>
                                                            <h6>Total Pengeluaran Pembiayaan : Rp. {{number_format($totalpengeluaran,0,",",".")}}</h6>
                                                              <table id="display"  class="display table table-striped table-bordered" style="width:100%">
                                                                      <thead>
                                                                      <tr>
                                                                          <th width="10">No</th>
                                                                          <th>Nama Pembiayaan</th>
                                                                          <th>Pembiayaan</th>
                                                                          <th>Tipe Pembiayaan</th>
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                @foreach ($data3 as $index =>$pembiayaan)
                                                                <?php $no=1;?>
                                                                <tr>
                                                            <td>{{$index+1}}</td>
                                                            <td><a href="/daftardesa/{{$data->id_desa}}/pelaporan/{{$data->id}}/pembiayaan/{{$pembiayaan->id}}">{{$pembiayaan->nama}}</a></td>
                                                            <td>Rp. {{number_format($pembiayaan->pembiayaan,0,",",".")}}</td>
                                                            <td>@if($pembiayaan->nama == "Pembentukan dana cadangan" || $pembiayaan->nama=="Penyertaan modal desa")
                                                                  Pengeluaran Pembiayaan Desa
                                                                @else
                                                                Penerimaan Pembiayaan Desa
                                                                  @endif
                                                            </td>
                                                       
                                                        </tr>
                                                        
                                                        
                                                            @endforeach
                                                          </tbody>
                                                                  <tfoot>
                                                              
                                                                  </tfoot>
                                                                  </table>
                                                              </div>
                                            </div>
                                          </div> 
 
      </div>
      <br>
      
  </div>
</div>
  </section>


@stop

@section('js')


<script>$(document).ready(function() {
        $('table.display').DataTable();
    } );</script>

      <script src="{{ asset('js/sweetalert.min.js') }}"></script>
  <!-- Include this after the sweet alert js file -->
@include('sweet::alert')
@stop