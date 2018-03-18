@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <a href="{{route('pemilik.create')}}" class="btn btn-primary pull-right btn-sm">Tambah Pemilik</a>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>

                                <th colspan="2">Opsi</th>
                            </tr>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($pemilik as $data)
                            @if($loop->first)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->password}}</td>
                                <td><a href="{{route('pemilik.edit',$data->id)}}" class="btn btn-warning btn-sm" >Ubah</a></td>
                            @php
                            $no++;
                            @endphp
                            </tr>
                            @else
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->password}}</td>
                                <td><a href="{{route('pemilik.edit',$data->id)}}" class="btn btn-warning btn-sm" >Ubah</a></td>
                                {!! Form::model($data, ['url'=>route('pemilik.destroy',$data->id), 'method'=>'delete']) !!}
                                <td><button type="submit" class="btn btn-danger btn-sm">Hapus</button></td>
                                {!! Form::close() !!}
                                @php
                                $no++;
                                @endphp
                            </tr>
                            @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
   
@endsection
