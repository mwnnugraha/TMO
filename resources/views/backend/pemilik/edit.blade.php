@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                </div>

                <div class="panel-body">
                    {!! Form::model($pemilik,['url'=>route('pemilik.update',$pemilik->id), 'method'=>'put', 'files'=>'true', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
		              @include('backend.user._form')
		              {!! Form::close() !!} 
                </div>
            </div>
        </div>
    
@endsection
