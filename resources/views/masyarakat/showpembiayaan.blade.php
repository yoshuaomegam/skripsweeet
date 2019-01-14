
@extends('layouts.homes')

@section('content')
<!-- Main Content -->
<div class="container">
  <div class="row">
        <div class="box box-info">

                    
                  </div>
                  <br>
                      <div class="box-body">
                          <div class="container" style="width: auto;">
                              <div class="form-group">
                                    <h3>Nama Pembiayaan : {{$data->nama}}</h3>
                                    <h3>Pembiayaan : Rp. {{number_format($data->pembiayaan,0,",",".")}} </h3>
                                    <hr>
                                      <h3>Lampiran</h3>
                                      <table id="pelaporan"  class="table table-striped table-bordered" style="width:100%">
                                              <thead>
                                              <tr>
                                                  <th width="10">No</th>
                                                  <th>File</th>
                                                  <th>Deskripsi</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                        @foreach ($data2 as $index =>$detail)
                                        <?php $no=1;?>
                                        <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$detail->file}}</td>
                                    <td>
                                      @if(!$detail->deskripsi)
                                      tidak ada
                                      @else  
                                      {{$detail->deskripsi}}
                                  @endif</td>
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
                      </div>
                  </div>
              </div>
        
          
  </div>
</div>
  </section>


  
@stop