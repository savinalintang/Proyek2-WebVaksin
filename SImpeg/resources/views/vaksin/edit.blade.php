@extends('app')
@section('title')
Edit Data
@endsection
@section('vaksin')
active
@endsection
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit Data </h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Data Vaksin</li>
          <li class="breadcrumb-item"><a href="#">Edit Data</a></li>
        </ul>
      </div>

      <div class="row">        
        <div class="col-md-12">
          <div class="tile">
            <!-- <h3 class="tile-title">Register</h3> -->            
            <div class="tile-body">
              <form class="form-horizontal" action="{{route('vaksin.update', $vaksin->id)}}" method="post">
              {{csrf_field()}}
              {{method_field('PUT')}}
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="nama" value="{{$vaksin->nama}}">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Tempat Lahir</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" type="text" name="tmpt_lahir" value="{{$vaksin->tmpt_lahir}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Tanggal Lahir</label>
                    <div class="col-md-8">
                        <input class="form-control col-md-8" type="date" name="tgl_lahir" value="{{$vaksin->tgl_lahir}}">
                    </div>
                </div>                                
                <div class="form-group row">
                  <label class="control-label col-md-3">Alamat</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" name="alamat">{{$vaksin->alamat}}"</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Jenis Kelamin</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" {{$vaksin->jenis_kelamin == 'L' ? 'checked' : ''}}>Laki-laki
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" {{$vaksin->jenis_kelamin == 'P' ? 'checked' : ''}}>Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Golongan Darah</label>
                    <div class="col-md-8">
                        <select class="form-control" name="gol_darah_id" id="exampleSelect1">
                            @foreach($darah as $tampil)
                            <option value="{{$tampil->id_darah}}">{{$tampil->nama_gol_darah}}</option> 
                            @endforeach                           
                        </select>
                    </div>                    
                </div>  
                <div class="form-group row">
                    <label class="control-label col-md-3">Nomor HP</label>
                    <div class="col-md-8">
                      <input class="form-control" type="number" name="nohp" value="{{$vaksin->nohp}}">
                    </div>
                </div>
                
              
            </div>

            <div class="tile-footer">
              <div class="row">              
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>        
                
              </div>
              
            </div>
              </form>
          </div>
        </div>              
      </div>
</main>
@endsection
