@extends('layouts.app_admin')
@section('title','Show News Photos')
@section('content')
 
 
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
 
            @if (session('sucessMSG'))
                <div class="alert alert-success">
                    {{ session('sucessMSG') }}
                </div>
            @endif
 
             
            <form action="{{ url('admin/newsphotos') }}/{{ $news_id }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="photo">Image</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                    @error('photo')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>





                 
 
                <button type="submit" class="btn btn-primary">Submit</button>
             </form>


            <h2>Photos</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($arrNewsPhotos as $objNewsPhotos)
                     <tr>
                        <td>{{ $objNewsPhotos->id }}</td>
                        <td><img style="width: 100px;height: 100px;" src="{{ url('') }}/{{ $objNewsPhotos->photo }}"></td>
                        <td>
                            
                            <form action="{{ url('admin/newsphotos') }}/{{ $objNewsPhotos->id }}" method="post" enctype="multipart/form-data">
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