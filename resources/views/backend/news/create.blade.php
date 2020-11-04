@extends('layouts.app_admin')
@section('title','Create News')
@section('content')
 
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          @if (session('sucessMSG'))
            <div class="alert alert-success">
                {{ session('sucessMSG') }}
            </div>
          @endif



            <form action="{{ url('admin/news') }}" method="post" >
                @csrf

         
                
                <div class="form-group">
                  <label for="main_cat_id">Main Category</label>
                  <select class="form-control" name="main_cat_id" id="maincategory">
                    @foreach($arrMainCategory as $objMainCategory)
                    <option value="{{$objMainCategory->id}}" class="maincategory">{{$objMainCategory->name}}</option>
                    @endforeach
                  </select>
              </div>

                <div class="form-group">
                  <label for="sub_cat_id">Sub Category</label>
                 {{-- <select class="form-control" name="sub_cat_id"  id="subcategory" class="subcategory">
                     @foreach($arrSubCategory as $objSubCategory)
                    <option value="{{$objSubCategory->id}}">{{$objSubCategory->name}}</option>
                    @endforeach --}}
                    
                    <select class="form-control" name="sub_cat_id"  id="subcategory" class="subcategory">
                      {{-- <option>--State--</option> --}}
                  </select>
              </div>

                <div class="form-group">
                  <label for="title">News Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"  placeholder="Enter news Title" value="{{ old('title') }}">
                  @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  </div>

                  <div class="form-group">
                    <label for="details">News Details</label>
                    <textarea class="form-control @error('details') is-invalid @enderror" id="details" name="details">{{ old('details') }}</textarea>
  
                    @error('details')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


                    <div class="form-group">
                      <label for="auther">News Auther</label>
                      <input type="text" class="form-control @error('auther') is-invalid @enderror" id="auther" name="auther"  placeholder="Enter news Auther" value="{{ old('auther') }}">
                      @error('auther')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>


                      <div class="form-group">
                        <label for="tags">Tags</label>
                        <textarea class="form-control @error('tags') is-invalid @enderror" id="tags" name="tags">{{ old('tags') }}</textarea>
      
                        @error('tags')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                     
                <button type="submit" class="btn btn-primary">Submit</button>
             </form>
        </main>
@endsection




@section( 'script')


{{-- <script>
  var myRequest = new XMLHttpRequest();
  myRequest.onreadystatechange = function(){
    if(this.readyState === 4 && this.status ===200){
      // var mytext = "";
      // var x= document.getElementById('maincategory').value;
      console.log(this.responseText);

     

    }
  }
  
  myRequest.open('GET','http://localhost:8000/admin/subcategory/1',true);
  myRequest.send();
</script> --}}


<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>


<script>
  $(document).ready(function(){

    $("#maincategory").on("change",function(){
      let id =$(this).val();
      $('subcategory').empty();
      $('#subcategory').append('<option value="0" disabled selected>Select Sub Category</option>');
      $.ajax({
        type:"GET",
        url:'http://localhost:8000/admin/news/'+id,
        dataType: "json",

        success:function(response) {
          //var response = JSON.stringify(response);
          var response = JSON.stringify(response);
            console.log(response);
            $('subcategory').empty();
            $('#subcategory').append('<option value="0"disabled selected>Select Sub Category</option>');
            // response.forEach(element => {
              response.forEach(function(element){
              $('#sub_category').append(`<option value="${element['id']}">${element['name']}</option>`);
            });
       

           
       }
      });

    });
  });


 
</script>

 
 

@stop