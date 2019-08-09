@extends('layout.base')
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
                  <a href="/pegawai/create" class="nc-icon nc-simple-add btn btn-info btn-round">
                    ADD NEW DATA
                  </a>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Senarai Nama SIO IO AIO </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>Pkt No Nama</th>
                    </thead>
                    <tbody>
                      @foreach($data as $datas)
                      <tr>
                        <td>{{ $datas->id}}</td>
                        <td>{{ $datas->Pkt_No_Nama}}</td>
                        <td>
                          <form action="{{ route('pegawai.destroy', $datas->id) }}" method="post">
                            {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                                <a href="{{ route('pegawai.edit',$datas->id) }}" class=" btn btn-sm btn-info">
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
    </div>
  </div>
@endsection