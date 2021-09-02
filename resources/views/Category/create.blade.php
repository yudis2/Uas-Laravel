@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">Create Category</div>
                <div class="card-body">
                    {!! Form::model($category = new
                    \App\Category,['url'=>'/category']) !!}
                    <div class="form-group">
                        {!!Form::label('name', 'Category Name') !!}
                        {!!Form::text('name', null,
                        ['class'=>'form-control','placeholder'=>'Category Name', 'required']) !!}
                    </div>
                    <div class="box-footer clearfix">
                        {!! Form::submit('Save', ["class"=>"pull-right btn btn-primary"]) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
