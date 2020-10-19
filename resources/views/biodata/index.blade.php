@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex px-2 py-2">
                             <a href="{{route('biodata.create')}}" class="btn btn-outline-primary">Tambah Biodata</a>
                            </div>
                            </div>
                                    <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Telp</th>
                                        <th>Gender</th>
                                        <th>Agama</th>
                                
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($biodatas as $biodata)
                                <tr>
                                    <td>{{$biodata->nama}}</td>
                                    <td>{{$biodata->telp}}</td>
                                    <td>{{$biodata->gender}}</td>
                                    <td>{{$biodata->agama}}</td>
                                    <td><img src="{{asset('storage/'.$biodata->images)}}" alt="" title="" weight="30px" height="30px">
                                    <td>
                                        @csrf
                                        @method('DELETE')
                                            <a href="{{route('biodata.edit', $biodata->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                            <a href="{{route('biodata.show', $biodata->id)}}" class="btn btn-outline-success btn-sm">Show</a>
                                            <a href="{{route('biodata.hapus', $biodata->id)}}" class="btn btn-outline-success btn-sm">Hapus</a>
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

@endsection 