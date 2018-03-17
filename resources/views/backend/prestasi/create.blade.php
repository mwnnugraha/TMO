@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Prestasi
                </div>

                <div class="panel-body">
                    {!! Form::open(['url'=>route('prestasi.store'), 'method'=>'post', 'files'=>'true', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
		              @include('backend.prestasi._form')
		              {!! Form::close() !!} 
                </div>
            </div>
        </div>
   
@endsection
