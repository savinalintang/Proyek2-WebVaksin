@extends('app')
@section('title')
Data Vaksin
@endsection
@section('vaksin')
active
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Data Vaksin </h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vaksin</li>
          <li class="breadcrumb-item"><a href="/vaksin">Data Vaksin</a></li>
          <li class="breadcrumb-item"><a href="#">Data Vaksin</a></li>
        </ul>
      </div>			
      <!-- Buttons-->
      <div class="tile">
        <div class="page-header">
          <div class="row">
            <div class="col-md-12">   
						<img src="{{asset('imgvaksin/'.$vaksin->foto)}}" width="180px" height="120px" alt="">
            <table class="table-condensed">					
							<tr>
								<td>Nama</td>
								<td>: </td>
                <td>{{$vaksin->nama}}</td>
							</tr>
							<tr>
								<td> Tempat, Tanggal Lahir</td>
								<td>:</td>
								<td>{{$vaksin->tmpt_lahir}}, {{$vaksin->tgl_lahir}}</td>
							</tr>                               
							<tr>
								<td> Jenis Kelamin</td>
								<td>:</td>
								<td>{{$vaksin->jenis_kelamin}}</td>
							</tr>                               
							<tr>
								<td> Alamat</td>
								<td>:</td>
								<td>{{$vaksin->alamat}}</td>
							</tr>                                                                                          
							</tr>                               
								<td> Golongan Darah</td>
								<td>:</td>
								<td>{{$vaksin->darah->nama_gol_darah}}</td>
							</tr>                                                         
							</tr>                               
								<td> Nomor HP</td>
								<td>:</td>
								<td>{{$vaksin->nohp}}</td>
							</tr>                               
						</table>
            </div>            
          </div>
        </div>
      </div>
    </main>
@endsection