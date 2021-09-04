@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">{{ $category->name }} </div>
                <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <td>Id</td>
                               <td>Name</td>
                               <td>Barcode</td>
                               <td>Stock</td>
                               <td>Unit</td>
                               <td>Category</td>
                               <td>Picture</td>
                           </tr>
                       </thead>
                       <tbody>
                           @forelse ($category->product as $category )
                           <tr>
                               <td>{{$category->id}}</td>
                               <td>{{$category->name}}</td>
                               <td>{{$category->barcode}}</td>
                               <td>{{$category->stock}}</td>
                               <td>{{$category->unit}}</td>
                               <td>{{$category->category->name}}</td>
                               <td><img src="/{{$category->picture}}" alt="" height="50"></td>
                           </tr>
                           @empty
                           <tr>
                               <td colspan="3"></td>
                           </tr>
                           @endforelse
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
