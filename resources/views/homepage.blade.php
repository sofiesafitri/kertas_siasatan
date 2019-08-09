@extends('layout.base')
@section('content')

      <div class="content">
      <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-paper text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Jumlah</p>
                      <p class="card-title">{{$countJumlah}}
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-briefcase-24 text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Siasatan</p>
                      <p class="card-title">{{$countSiasatan}}
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-check-2 text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Selesai</p>
                      <p class="card-title">{{$countSelesai}}
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-bag-16 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">KUS</p>
                      <p class="card-title">N/A
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Kertas Siasatan Yang Telah Melebihi Tempoh Had Masa Yang Telah Ditetapkan</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>IO</th>
                      <th>No Rpt</th>
                      <th>No KS</th>
                      <th>Tarikh Minit KS</th>
                      <th>Tarikh Akhir Had Masa</th>
                    </thead>
                    <tbody>
                      @foreach($data as $datas)
                      <tr>
                        <td>{{ $datas->IO}}</td>
                        <td>{{ $datas->no_rpt}}</td>
                        <td>{{ $datas->no_ks}}</td>
                        <td>{{ $datas->Tarikh_Minit_KS}}</td>
                        <td>{{ $datas->Tarikh_Akhir_Had_Masa}}</td>
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