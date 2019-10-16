@extends('layout.base')
@section('search')
    <form action="/search/data" method="GET">
       <div class="input-group no-border">
          <input type="text" name="search" value="" class="form-control" placeholder="Search...">
          <div class="input-group-append">
             <div class="input-group-text">
                 <i class="nc-icon nc-zoom-split"></i>
             </div>
          </div>
       </div>
      </form>
@endsection
@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            @if ($message = Session::get('alert-success'))
                    <div class="alert alert-info alert-dismissible fade show">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                      </button>
                        <span>{{$message}}</span>
                      </div>
                    @endif
              <form action="/filter" method="GET">
                <div class="col-md-3 pr-1">
                  <div class="form-group">
                    <label>Filter</label>
                      <select class="custom-select" id="tahun" name="tahun">
                        @foreach ($tahun as $a)
                          <option>{{$a->tahun}}</option>
                        @endforeach
                          </select>
                          <button class="btn btn-primary" type="submit">Show</button>
                          &nbsp
                          <a href="{{url('data')}}"> Reset </a>
                      </div>
                    </div>
                </form>
                <!--<button class="btn btn-danger" align="right">Print PDF</button>-->
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Tahun</th>
                      <th>No Kertas Siasatan</th>
                      <th>No Laporan Polis</th>
                      <th>Pegawai Penyiasat</th>
                      <th>Klasifikasi</th>
                      <th>Seksyen</th>
                      <th>Status</th>
                      <th>Simpanan</th>
                    </thead>
                    <tbody>
                      @foreach($data as $datas)
                      <tr>
                        <td>{{ $datas->tahun}}</td>
                        <td>{{ $datas->no_ks}}</td>
                        <td>{{ $datas->no_rpt}}</td>
                        <td>{{ $datas->IO}}</td>
                        <td>{{ $datas->Kategori}}</td>
                        <td>{{ $datas->Seksyen}}</td>
                        <td>{{ $datas->Status_Siasatan}}</td>
                        <td>{{ $datas->Lokasi_KS}}</td>
                        <td>
                          <form action="{{ route('data.destroy', $datas->id) }}" method="post">
                            {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                                <a href="{{ route('data.edit',$datas->id) }}" class=" btn btn-sm btn-info">
                                <i class="nc-icon nc-ruler-pencil"></i> </a>    
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete This Data?')">
                                  <i class="nc-icon nc-basket"></i>
                                </button>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                </form>
              </div>
            </div>
          </div>
      </div>
      <ul class="pagination mx-auto">
        <li>{{ $data->links()}}</li>
      </ul> 
    </div>
  </div>
@endsection