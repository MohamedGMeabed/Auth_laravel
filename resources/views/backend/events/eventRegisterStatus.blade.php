@extends('layouts.app_admin')
@section('title','Registerations Details')
@section('content')
 
 
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
 
            @if (session('sucessMSG'))
                <div class="alert alert-success">
                    {{ session('sucessMSG') }}
                </div>
            @endif
 

         
            <form action="{{ url('admin/eventregisterations') }}/{{ $objEvent->id }}" method="post" >
                @csrf

               <div class="form-group">
               <label for="name">Registeration Name</label>
                <input type="text" name="name"  class="form-control" value="{{$objEventRegisteration->name}}">
               </div>

               <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status"  class="form-control" value="{{$objEventRegisteration->status}}">
               </div>
               
                {{-- <div class="form-group">
                    <input type="hidden" name="status" value="pending">
                  <label for="status">Status</label>
                  <select name="status"  class="form-control @error('status') is-invalid @enderror">
                    <option value="{{$objEventRegisteration->id}}">{{$objEventRegisteration->status}}</option>
                    <option value="accepted">Accepted</option>
                    <option value="rejected">Rejected</option>
                  </select> --}}
 
                <button type="submit" class="btn btn-primary">Submit</button>
             </form>  
@endsection