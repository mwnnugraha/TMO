@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Alumni
                    <a href="{{route('alumni.create')}}" class="btn btn-primary pull-right btn-sm">Tambah Alumni</a>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama Alumni</th>
                                <th>Testimoni</th>

                                <th colspan="2">Opsi</th>
                            </tr>
                            @php
                            $alumni = App\Alumni::all();
                            $no = 1;
                            @endphp
                            @foreach($alumni as $data)
                            <tr>
                                <td>{{$no}}</td>
                                <td><img src="{{asset('image/'.$data->foto)}}" style="height: 50px"></td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->testimoni}}</td>
                                <td><a href="{{route('alumni.edit',$data->id)}}" class="btn btn-warning btn-sm">Ubah</a></td>
                                {!! Form::model($data, ['url'=>route('alumni.destroy',$data->id), 'method'=>'delete']) !!}
                                <td><button type="submit" class="btn btn-danger btn-sm">Hapus</button></td>
                                {!! Form::close() !!}
                                @php
                                $no++;
                                @endphp
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
@endsection
