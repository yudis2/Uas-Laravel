@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">{{$product->name}}</div>
                <div class="card-body">
                    <div class="col-md-6">
                        <img width="100%" src="/{{$product->picture}}" alt="" class="thumbnail">
                    </div>
                   <div class="col-md-6">
                       <ul>
                           <li>Barcode : {{$product->barcode}}</li>
                           <li>Category : {{$product->category->name}}</li>
                           <li>Price : {{$product->price}}</li>
                           <li>Unit : {{$product->unit}}</li>
                           <li>Stock : {{$product->stock}}</li>
                       </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
