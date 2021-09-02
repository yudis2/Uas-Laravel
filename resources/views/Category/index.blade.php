@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">Category <span class="float-right">
                    <a href="/category/create" class="btn btn-sm-btn-primary">Tambah Data</a>
                </span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td width="175">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="/category/{{category->id}}" class="btn btn-sm btn-success">Show</a>
                                    <a href="/category/{{category->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                    {{ Form::open(array('url' => 'category/' . $category->id, 'class' => 'float-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete', array('class' => 'btn btn-sm- btn-danger btn-submit')) }}
                                    {{ Form::close() }}
                                </td>
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
@push('script')
<script>
    $(.btn-submit).on('click', function(e)){
        e.preventDefault();
        var form = $(this).parent('form');
        Swal.fire({
            title: 'Are you sure ?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) =>
        {
            if (result.value) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'succeess'
                )
                form.submit();
            }
        })
    });
</script>
@endpush
