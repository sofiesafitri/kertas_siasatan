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
                <form action="{{route('pegawai.update', $data->id)}}" method="post">
                 {{ csrf_field()}}
                 {{ method_field('PATCH')}}
                  <div class="row">
                    <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="id" class="form-control" value="{{$data->id}}"disabled>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Pkt No Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{$data->Pkt_No_Nama}}"required>
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