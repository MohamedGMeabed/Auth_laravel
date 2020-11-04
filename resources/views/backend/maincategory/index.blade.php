@extends('layouts.app_admin')
@section('title','Show Main Category')
@section('content')
 
 
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
 
            @if (session('sucessMSG'))
                <div class="alert alert-success">
                    {{ session('sucessMSG') }}
                </div>
            @endif
 
            <a href="{{ url('admin/maincategory/create') }}" class="btn btn-primary">Add Main Category +</a>
             
            <h2>Main Category</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Main Category Name</th>
                        <th>Sub Category</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                    @foreach($arrMainCategory as $objMainCategory)
                    <tr>
                        <td>{{ $objMainCategory->id }}</td>
                        <td>{{ $objMainCategory->name }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('admin/subcategory/') }}/{{ $objMainCategory->id }}"> Sub Category </a> </td>
                       
                        <td>
                            <a class="btn btn-primary" href="{{ url('admin/maincategory/') }}/{{ $objMainCategory->id }}/edit"> Edit </a>
                            <a class="btn btn-secondary" href="{{ url('admin/maincategory/') }}/{{ $objMainCategory->id }}"> Show </a>
                            <form action="{{ url('admin/maincategory') }}/{{ $objMainCategory->id }}" method="post" enctype="multipart/form-data">
                                <button type="submit" class="btn btn-danger">Delete</button>
                                @method('delete')
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @endforeach
 
                  </tbody>
                </table>
            </div>
        </main>
@endsection