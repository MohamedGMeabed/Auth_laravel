@extends('layouts.app_admin')
@section('title','Show Registerations')
@section('content')
 
 
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
 
            @if (session('sucessMSG'))
                <div class="alert alert-success">
                    {{ session('sucessMSG') }}
                </div>
            @endif
 
                
             <form action="{{ url('admin/eventregisterations') }}/{{ $objEvent->id }}" method="post" >
                @csrf
                <input type="hidden" name="event_id" value="{{ $event_id }}">
                {{-- <input type="hidden" name="status" value="pending"> --}}
                <div class="form-group">
                  <label for="Name">name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  placeholder="Enter Your Name" value="{{ old('name') }}">
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                   
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  placeholder="Enter Your Email" value="{{ old('email') }}">
                  @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                   
                </div>
                <div class="form-group">
                  <label for="phone">phone</label>
                  <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"  placeholder="Enter Your Phone" value="{{ old('phone') }}">
                  @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                   
                </div>
                <div class="form-group">
                  <label for="name">Ticket Type</label>
                  <select name="ticket_type"  class="form-control @error('ticket_type') is-invalid @enderror">
                      <option value="One Person">One Person</option>
                      <option value="Two Person">Two Person</option>
                      <option value="Family Pack">Family Pack</option>
                      <option value="Premium">Premium</option>
                  </select>
                </div>

                <div class="form-group">
                  <input type="hidden" name="status" value="pending">
                <label for="status">Status</label>
                <select name="status"  class="form-control @error('status') is-invalid @enderror">
                  <option value="pending">Pending</option>
                  <option value="accepted">Accepted</option>
                  <option value="rejected">Rejected</option>
                </select>
                </div>

                
 
                <button type="submit" class="btn btn-primary">Submit</button>
             </form>   

            <h2>Registerations</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Registeration Name</th>
                        <th>Registeration Email</th>
                        <th>Registeration Phone</th>
                        <th>Registeration Ticket Type</th>
                        <th>Registeration Status</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                    @foreach($eventPending as $objEventRegisteration)
                    <tr>
                        <td>{{ $objEventRegisteration->id }}</td>
                        <td>{{ $objEventRegisteration->name }}</td>
                        <td>{{ $objEventRegisteration->email }}</td>
                        <td>{{ $objEventRegisteration->phone }}</td>
                        <td>{{ $objEventRegisteration->ticket_type }}</td>
                        <td>{{ $objEventRegisteration->status }}</td>
                        <td>
                        <a class="btn btn-secondary" href="{{ url('admin/eventregisterations/update') }}/{{ $objEventRegisteration->id }}/accepted"> Accept  </a>
                        <a class="btn btn-secondary" href="{{ url('admin/eventregisterations/update') }}/{{ $objEventRegisteration->id }}/rejected"> Reject </a>
                            
                            {{-- <form action="{{ url('admin/eventregisterations') }}/{{ $objEventRegisteration->id }}" method="post" >
                                <button type="submit" class="btn btn-danger">Status</button>
                                @method('delete')
                                @csrf
                            </form> --}}
                        </td>
                    </tr>
                    @endforeach
 
                  </tbody>
                </table>
            </div>

            
            <h2>Accepted Registerations</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Registeration Name</th>
                        <th>Registeration Email</th>
                        <th>Registeration Phone</th>
                        <th>Registeration Ticket Type</th>
                        <th>Registeration Status</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                    @foreach($eventAccepted as $objEventAccepted)
                    <tr>
                        <td>{{ $objEventAccepted->id }}</td>
                        <td>{{ $objEventAccepted->name }}</td>
                        <td>{{ $objEventAccepted->email }}</td>
                        <td>{{ $objEventAccepted->phone }}</td>
                        <td>{{ $objEventAccepted->ticket_type }}</td>
                        <td>{{ $objEventAccepted->status }}</td>
                        <td>
                          <a class="btn btn-secondary" href="{{ url('admin/eventregisterations/update') }}/{{ $objEventAccepted->id }}">Send Email </a>
                            
                            {{-- <form action="{{ url('admin/eventregisterations') }}/{{ $objEventRegisteration->id }}" method="post" >
                                <button type="submit" class="btn btn-danger">Status</button>
                                @method('delete')
                                @csrf
                            </form> --}}
                        </td>
                    </tr>
                    @endforeach
 
                  </tbody>
                </table>
            </div>

            {{-- <form action="{{ url('admin/eventregisterations') }}/{{ $objEventRegisteration->id }}" method="post" >
              @csrf              
              <div class="form-group">
                <label for="status">Status</label>
                <select name="status"  class="form-control @error('status') is-invalid @enderror">
                    <option value="accepted">Accepted</option>
                    <option value="rejected">Rejected</option>
                </select>

              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
           </form>  --}}
        </main>
@endsection