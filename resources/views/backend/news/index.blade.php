@extends('layouts.app_admin')
@section('title','Show News')
@section('content')
 
 
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
 
            @if (session('sucessMSG'))
                <div class="alert alert-success">
                    {{ session('sucessMSG') }}
                </div>
            @endif
 
            <a href="{{ url('admin/news/create') }}" class="btn btn-primary">Add News +</a>
             
            <h2>News</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>News Title</th>
                        <th>News Details</th>
                        <th>News Auther</th>
                        <th>News Tags</th>
                        <th>Sub Category</th>
                        <th>News Photo</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                    @foreach($arrNews as $objNews)
                    <tr>
                        <td>{{ $objNews->id }}</td>
                        <td>{{ $objNews->title }}</td>
                        <td>{{ $objNews->details }}</td>
                        <td>{{ $objNews->auther }}</td>
                        <td>{{ $objNews->tags }}</td>
                        <td>{{ $objNews->SubCategory->name}}</td>
                        <td><a class="btn btn-secondary" href="{{ url('admin/newsphotos') }}/{{ $objNews->id }}"> Photos </a></td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('admin/news/') }}/{{ $objNews->id }}/edit"> Edit </a>
                            <a class="btn btn-secondary" href="{{ url('admin/news/') }}/{{ $objNews->id }}"> Show </a>
                            <form action="{{ url('admin/news') }}/{{ $objNews->id }}" method="post">
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