
@extends('layout.base')
@section('content')
<div class="content">
        <div class="row">
            @if ($message = Session::get('alert-success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="nc-icon nc-simple delete" data-dismiss="alert"> × </button> 
                    <strong>{{ $message }}</strong>
                </div>
              @endif
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add Pegawai</h5>
              </div>
              <div class="card-body">
                <form action="{{route('pegawai.store')}}" method="post">
                 {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="tahun" class="form-control" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nama Pegawai</label>
                        <input type="text" name="nama" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection