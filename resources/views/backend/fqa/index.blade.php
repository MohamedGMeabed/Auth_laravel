@extends('layouts.app_admin')
@section('title','Show FQAS')
@section('content')
 
 
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
 
            @if (session('sucessMSG'))
                <div class="alert alert-success">
                    {{ session('sucessMSG') }}
                </div>
            @endif
 
            <a href="{{ url('admin/fqa/create') }}" class="btn btn-primary">Add Question +</a>
             
            <h2>Frequently Questioned Answers</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Question</th>
                        <th>Answer</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                    @foreach($arrFqas as $objFqa)
                    <tr>
                        <td>{{ $objFqa->id }}</td>
                        <td>{{ $objFqa->question }}</td>
                        <td>{{ $objFqa->answer }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('admin/fqa/') }}/{{ $objFqa->id }}/edit"> Edit </a>
                            <a class="btn btn-secondary" href="{{ url('admin/fqa/') }}/{{ $objFqa->id }}"> Show </a>
                            <form action="{{ url('admin/fqa/') }}/{{ $objFqa->id }}" method="post" enctype="multipart/form-data">
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