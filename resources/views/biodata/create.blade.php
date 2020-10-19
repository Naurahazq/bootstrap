@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">

            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('biodata.save')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="">
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="">
                                </div>
                                {{$errors->first('name')}}
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Images</label>
                                    <input type="file" name="images" class="form-control" id="">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Telp</label>
                                    <input type="text" name="telp" class="form-control" id="">
                                </div>

                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <input type="text" name="gender" class="form-control" id="">
                                </div>

                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <input type="text" name="agama" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tgl lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" id="">
                            </div>  
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tmpt lahir</label>
                                    <input type="text" name="tmpt_lahir" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Asal sekolah</label>
                                    <input type="text" name="asal_sekolah" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control" id="">
                            </div>
                        </div>
                    </div>
                        <div class="pt-2 mb-2">
                            <button type="submit" class="btn btn-outline-info">Masukan Kegiatan Baru</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 