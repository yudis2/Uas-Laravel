@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">Edit Product</div>
                <div class="card-body">
                    <form action="{{ route('product.update',$product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Product Name:</strong>
                                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Product Name">
                                </div>
                                <div class="form-group">
                                    <strong>Category Id:</strong>
                                    <select name="category_id" value="{{ $categories }}" class="form-control" placeholder="Category Id">
                                        <option value="">- Select Category -</option>
                                        @foreach ($categories as $item)
                                            <option value="{{$item}}"></option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <strong>Barcode:</strong>
                                    <input type="text" name="barcode" value="{{ $product->barcode }}" class="form-control" placeholder="Barcode">
                                </div>
                                <div class="form-group">
                                    <strong>Price:</strong>
                                    <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <strong>Product Unit:</strong>
                                    <input type="text" name="unit" value="{{ $product->unit }}" class="form-control" placeholder="Product Unit">
                                </div>
                                <div class="form-group">
                                    <strong>Product Stock:</strong>
                                    <input type="text" name="stock" value="{{ $product->stock }}" class="form-control" placeholder="Product Stock">
                                </div>
                                <div class="form-group">
                                    <strong>Picture:</strong>
                                    <input type="file" name="picture" value="{{ $product->picture }}" placeholder="Picture">
                                </div>
                            </div>
                            <div class="box-footer clearfix">
                              <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                    {{-- {!! Form::model($product =['method'=> 'PATCH', 'action' => [
                        'ProductController@update', $product->id] ,'files'=>true]) !!}

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
                        ['class'=>'form-control','placeholder'=>'gambar', 'required']) !!}
                    </div>

                    <div class="box-footer clearfix">
                        {!! Form::submit('Save', ["class"=>"pull-right btn btn-primary"]) !!}
                    </div>
                    {!! Form::close() !!} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
