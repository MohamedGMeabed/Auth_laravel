@extends('layouts.app_admin')
@section('title','Edit FQA')
@section('content')
 
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          @if (session('sucessMSG'))
            <div class="alert alert-success">
                {{ session('sucessMSG') }}
            </div>
          @endif
 
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
 
          <form action="{{ url('admin/fqa') }}/{{ $objFqa->id }}" method="post">
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="question">Question</label>
                  <input type="text" class="form-control @error('question') is-invalid @enderror" id="question" name="question"  placeholder="Enter the question" value="{{ $objFqa->question }}">

                  @error('question')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                   
                </div>


                <div class="form-group">
                  <label for="answer">answer</label>
                  <input type="text" class="form-control @error('answer') is-invalid @enderror" id="answer" name="answer"  placeholder="Enter the answer" value="{{ $objFqa->answer }}">

                  @error('answer')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
             </form>
        </main>
@endsection