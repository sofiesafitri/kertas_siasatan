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
                                <option value="January"  {{ $data->bulan == 'January' ? 'selected' : ''}}> January</option>
                                <option value="February" {{ $data->bulan == 'February' ? 'selected' : ''}}> February</option> 
                                <option value="March" {{ $data->bulan == 'March' ? 'selected' : ''}}> March</option> 
                                <option value="April" {{ $data->bulan == 'April' ? 'selected' : ''}}> April</option> 
                                <option value="May" {{ $data->bulan == 'May' ? 'selected' : ''}}> May</option> 
                                <option value="June" {{ $data->bulan == 'June' ? 'selected' : ''}}> June</option> 
                                <option value="July" {{ $data->bulan == 'July' ? 'selected' : ''}}> July</option> 
                                <option value="August" {{ $data->bulan == 'August' ? 'selected' : ''}}> August</option> 
                                <option value="September" {{ $data->bulan == 'September' ? 'selected' : ''}}> September</option>
                                <option value="October" {{ $data->bulan == 'October' ? 'selected' : ''}}> September</option> 
                                <option value="November" {{ $data->bulan == 'November' ? 'selected' : ''}}> November</option> 
                                <option value="Desember" {{ $data->bulan == 'Desember' ? 'selected' : ''}}> Desember</option>   
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Lokasi Kertas Siasatan</label>
                          <select class="custom-select" id="Lokasi_KS" name="Lokasi_KS" value="{{$data->Lokasi_KS}}">
                                <option value="KBSJKD" {{ $data->Lokasi_KS == 'KBSJKD' ? 'selected' : ''}}>{{$data->Lokasi_KS}}</option>
                                <option value="SIO" {{ $data->Lokasi_KS == 'SIO' ? 'selected' : ''}}>{{$data->Lokasi_KS}}</option> 
                                <option value="IO" {{ $data->Lokasi_KS == 'IO' ? 'selected' : ''}}>{{$data->Lokasi_KS}}</option> 
                                <option value="AIO" {{ $data->Lokasi_KS == 'AIO' ? 'selected' : ''}}>{{$data->Lokasi_KS}}</option> 
                                <option value="Bilik IP" {{ $data->Lokasi_KS == 'Bilik IP' ? 'selected' : ''}}>{{$data->Lokasi_KS}}</option> 
                                <option value="IPK Pulau Pinang" {{ $data->Lokasi_KS == 'IPK Pulau Pinang' ? 'selected' : ''}}>{{$data->Lokasi_KS}}</option> 
                                <option value="IPD Barat Daya" {{ $data->Lokasi_KS == 'IPK Barat Daya' ? 'selected' : ''}}>{{$data->Lokasi_KS}}</option>   
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nama Pegawai Penyiasat</label>
                          <select class="custom-select" id="IO" name="IO" value="{{$data->IO}}">
                            @if($IO->count())
                            @foreach($IO as $pegawai)
                              <option value="{{$pegawai->Pkt_No_Nama}}" {{ $data->IO == $pegawai->Pkt_No_Nama ? 'selected' : ''}}>{{$pegawai->Pkt_No_Nama}}</option>
                            @endforeach
                            @endif
                          </select>
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
                                <option value="Siasatan" {{ $data->Proses_Siasatan == 'Siasatan' ? 'selected' : ''}}>Siasatan</option>
                                <option value="Selesai" {{ $data->Proses_Siasatan == 'Selesai' ? 'selected' : ''}}>Selesai</option> 
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Status Siasatan</label>
                         <select class="custom-select" id="Status_Siasatan" name="Status_Siasatan" value="{{$data->Status_Siasatan}}">
                                <option value="Aktif" {{ $data->Status_Siasatan == 'Aktif' ? 'selected' : ''}}>Aktif</option>
                                <option value="Jatuh Hukum" {{ $data->Status_Siasatan == 'Jatuh Hukum' ? 'selected' : ''}}>Jatuh Hukum</option> 
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
                          <input type="date" class="form-control" name="Tarikh_Minit_KS" value="{{$data->Tarikh_Minit_KS}}">
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Tempoh Had Masa Tindakan</label>
                         <select class="custom-select" id="Tempoh_Had_Masa_Tindakan" name="Tempoh_Had_Masa_Tindakan" value="{{$data->Tempoh_Had_Masa_Tindakan}}">
                                <option value="No Data" {{ $data->Tempoh_Had_Masa_Tindakan == 'No Data' ? 'selected' : ''}}>No Data</option>
                                <option value="Satu Minggu" {{ $data->Tempoh_Had_Masa_Tindakan == 'Satu Minggu' ? 'selected' : ''}}>Satu Minggu</option> 
                                <option value="Dua Minggu" {{ $data->Tempoh_Had_Masa_Tindakan == 'Dua Minggu' ? 'selected' : ''}}>Dua Minggu</option> 
                                <option value="Tiga Minggu" {{ $data->Tempoh_Had_Masa_Tindakan == 'Tiga Minggu' ? 'selected' : ''}}>Tiga Minggu</option> 
                                <option value="Satu Bulan" {{ $data->Tempoh_Had_Masa_Tindakan == 'Satu Bulan' ? 'selected' : ''}}>Satu Bulan</option> 
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