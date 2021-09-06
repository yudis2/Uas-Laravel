@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">Create Product</div>
                <div class="card-body">
                    {!! Form::model($product = new \App\Models\Product,['url'=>'/product','files'=>true]) !!}

                    <div class="form-group">
                        {!!Form::label('name', 'Product Name') !!}
                        {!!Form::text('name', null,
                        ['class'=>'form-control','placeholder'=>'Product Name', 'required']) !!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('category_id', 'Category Name') !!}
                        {!!Form::select('category_id', $categories, null,
                        ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('barcode', 'Product Barcode') !!}
                        {!!Form::text('barcode', null,
                        ['class'=>'form-control','placeholder'=>'Product Barcode', 'required']) !!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('price', 'Price') !!}
                        <div class="input-group control-group"> <span class="input-group-btn">
                            <div class="btn btn-light"> <span class="add-on">Rp.</span>
                            </div>
                        </span>
                        {!!Form::text('price', null,
                        ['class'=>'form-control','placeholder'=>'Price', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!!Form::label('unit', 'Product Unit') !!}
                        {!!Form::text('unit', null,
                        ['class'=>'form-control','placeholder'=>'Product Unit', 'required']) !!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('stock', 'Product stock') !!}
                        {!!Form::input('number','stock', 1,
                        ['class'=>'form-control','placeholder'=>'Product stock', 'required']) !!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('picture', 'gambar') !!}
                        {!!Form::file('picture', null,
                        ['required','class'=>'form-control','placeholder'=>'gambar']) !!}
                    </div>

                    <div class="box-footer clearfix">
                        <button type="submit" class="pull-right btn btn-primary">Save</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
