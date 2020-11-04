@extends('layouts.app_admin')
@section('title','Create Main Category')
@section('content')
 
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          @if (session('sucessMSG'))
            <div class="alert alert-success">
                {{ session('sucessMSG') }}
            </div>
          @endif



            <form action="{{ url('admin/maincategory') }}" method="post" >
                @csrf
                <div class="form-group">
                  <label for="name">Maincategory  Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  placeholder="Enter maincategory Name" value="{{ old('name') }}">
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
             </form>
        </main>
@endsection