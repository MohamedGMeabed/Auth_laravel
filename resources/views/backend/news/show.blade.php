@extends('layouts.app_admin')
@section('title','Show News')
@section('content')
 
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          @if (session('sucessMSG'))
            <div class="alert alert-success">
                {{ session('sucessMSG') }}
            </div>
          @endif
 
           
 
          <form action="{{ url('admin/news') }}/{{ $objNews->id }}" method="post">
                @method('patch')
                @csrf
                {{-- <div class="form-group">
                  <label for="sub_cat_id">Sub Category</label>
                  <select class="form-control" name="sub_cat_id">
                    @foreach($arrSubCategory as $objSubCategory)
                    <option value="{{$objSubCategory->id}}">{{$objSubCategory->name}}</option>
                    @endforeach
                  </select>
              </div> --}}
              <div class="form-group">
                <label for="title">News Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"  readonly value="{{ $objNews->SubCategory->name }}">
                @error('title')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                  <label for="title">News Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"  readonly value="{{ $objNews->title }}">
                  @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  </div>

                  <div class="form-group">
                    <label for="details">News Details</label>
                    <textarea class="form-control @error('details') is-invalid @enderror" id="details" name="details" readonly>{{ $objNews->details }}</textarea>
  
                    @error('details')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


                    <div class="form-group">
                      <label for="auther">News Auther</label>
                      <input type="text" class="form-control @error('auther') is-invalid @enderror" id="auther" name="auther" readonly value="{{ $objNews->auther }}">
                      @error('auther')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>


                      <div class="form-group">
                        <label for="tags">Tags</label>
                        <textarea class="form-control @error('tags') is-invalid @enderror" id="tags" name="tags" readonly>{{ $objNews->tags }}</textarea>
      
                        @error('tags')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
 
                
             </form>
        </main>
@endsection