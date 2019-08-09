@extends('layout.base')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Kertas Siasatan</h5>
              </div>
              <div class="card-body">
                @foreach($data as $data)
                <form action="{{route('data.update', $data->id)}}" method="post">
                 {{ csrf_field()}}
                 {{ method_field('PATCH')}}
                  <div class="row">
                    <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>Tahun</label>
                        <input type="text" name="tahun" class="form-control" placeholder="2019" value="{{$data->tahun}}"required>
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Bulan</label>
                          <select class="custom-select" id="bulan" name="bulan" value="{{$data->bulan}}">
                                <option value="January"> January</option>
                                <option value="February"> February</option> 
                                <option value="March"> March</option> 
                                <option value="April"> April</option> 
                                <option value="January"> May</option> 
                                <option value="June"> June</option> 
                                <option value="July"> July</option> 
                                <option value="August"> August</option> 
                                <option value="September"> September</option> 
                                <option value="November"> November</option> 
                                <option value="Desember"> Desember</option>   
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Lokasi Kertas Siasatan</label>
                          <select class="custom-select" id="Lokasi_KS" name="Lokasi_KS" value="{{$data->IO}}">
                                <option value="KBSJKD">KBSJKD</option>
                                <option value="SIO">SIO</option> 
                                <option value="IO"> IO</option> 
                                <option value="AIO"> AIO</option> 
                                <option value="Bilik IP"> Bilik IP</option> 
                                <option value="IPK Pulau Pinang"> IPK Pulau Pinang</option> 
                                <option value="IPD Barat Daya"> IPD Barat Daya</option>   
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nama Pegawai Penyiasat</label>
                        <input type="text" class="form-control" placeholder="Pegawai Penyiasat" name="IO" value="{{$data->IO}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Klasifikasi Kes</label>
                        <input type="text" class="form-control" placeholder="Klasifikasi Kes" name="Kategori" value="{{$data->Kategori}}">
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Seksyen Kes</label>
                        <input type="text" class="form-control" placeholder="Seksyen Kes" name="Seksyen" value="{{$data->Seksyen}}">
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Kerugian</label>
                        <input type="text" class="form-control" placeholder="$0.00" name="Kerugian" value="{{$data->Kerugian}}">
                      </div>
                    </div>
                  </div>
                  &nbsp
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>No Report Polis</label>
                        <input type="text" name="no_rpt" class="form-control" placeholder="No Report Polis" value="{{$data->no_rpt}}" required>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>No Kertas Siasatan</label>
                        <input type="text" name="no_ks" class="form-control" placeholder="No Kertas Siasatan" value="{{$data->no_ks}}" required>
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Tarikh KS Di Buka</label>
                        <input type="date" name="tarikh_KS_buka" class="form-control" placeholder="Tarikh KS Di Buka" value="{{$data->tarikh_KS_buka}}">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Proses Siasatan</label>
                          <select class="custom-select" id="Proses_Siasatan" name="Proses_Siasatan" value="{{$data->Proses_Siasatan}}">
                                <option value="KBSJKD">Siasatan</option>
                                <option value="SIO">Selesai</option> 
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Status Siasatan</label>
                         <select class="custom-select" id="Status_Siasatan" name="Status_Siasatan" value="{{$data->Status_Siasatan}}">
                                <option value="Aktif">Aktif</option>
                                <option value="Jatuh Hukum">Jatuh Hukum</option> 
                          </select>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Keputusan Kes</label>
                         <input type="text" name="Keputusan_Kes" class="form-control" placeholder="Keputusan Kes" value="{{$data->Keputusan_Kes}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>No Kes</label>
                          <input type="text" name="No_Kes" class="form-control" placeholder="No Kes" value="{{$data->No_Kes}}">
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Pertuduhan</label>
                         <input type="text" name="Pertuduhan" class="form-control" placeholder="Pertuduhan" value="{{$data->Pertuduhan}}">
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Tarikh Edaran Kertas Siasatan</label>
                         <input type="date" class="form-control" name="Tarikh_Edaran_KS" value="{{$data->Tarikh_Edaran_KS}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Tarikh Minit KS</label>
                          <input type="date" class="form-control" name="Tarikh_Minit_KS">
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Tempoh Had Masa Tindakan</label>
                         <select class="custom-select" id="Tempoh_Had_Masa_Tindakan" name="Tempoh_Had_Masa_Tindakan" value="{{$data->Tempoh_Had_Masa_Tindakan}}">
                                <option value="Aktif">No Data</option>
                                <option value="Jatuh Hukum">Satu Minggu</option> 
                                <option value="Jatuh Hukum">Dua Minggu</option> 
                                <option value="Jatuh Hukum">Tiga Minggu</option> 
                                <option value="Jatuh Hukum">Satu Bulan</option> 
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Tarikh Akhir Had Masa</label>
                         <input type="date" name="Tarikh_Akhir_Had_Masa" class="form-control" value="{{$data->Tarikh_Akhir_Had_Masa}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Submit</button>
                    </div>
                  </div>
                </form>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection