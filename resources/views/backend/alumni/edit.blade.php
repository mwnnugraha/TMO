@extends('layouts.admin')

@section('content')
<br><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Alumni
                </div>

                <div class="panel-body">
                    {!! Form::model($alumni,['url'=>route('alumni.update',$alumni->id), 'method'=>'put', 'files'=>'true', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
		              @include('backend.alumni._form')
		              {!! Form::close() !!} 
                </div>
            </div>
        </div>
  
@endsection
