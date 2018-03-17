@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                </div>

                <div class="panel-body">
                    {!! Form::model($komponen,['url'=>route('komponen.update',$komponen->id), 'method'=>'put', 'files'=>'true', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
		              @include('backend.komponen._form')
		              {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
