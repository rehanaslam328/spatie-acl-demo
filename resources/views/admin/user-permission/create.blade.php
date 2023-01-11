@extends('dashboard')

@section('content')
 	
   	  <div class="col-md-7">
   	  	 <form action="{{ url('/user-permission/save') }}" method="post" class="form-horizontal">

                      <div class="form-group">
                          <legend>Create new User</legend>
                      </div>
                      @if(session('success'))
                          <p class="alert alert-success">{{session('success')}}</p>
                          @endif
                      {{csrf_field()}}
                      <div class="form-group">
                          <span >Name:</span>
                          <input type="text" name="name" class="form-control">
                      </div>
                      <div class="form-group">
                          <span >Email:</span>
                          <input type="text" name="email" class="form-control">
                      </div>
                      <div class="form-group">
                          <span >Password:</span>
                          <input type="text" name="password" class="form-control">
                      </div>
                      


                           <div class="form-check">
                          <label class="form-check-label" for="check1">
                             @foreach($permissions as $permission) 
                             <input type="checkbox" class="form-check-input" name="permissions[]" value="{{$permission->id}}" >{{$permission->name}}
                             <br>
                              @endforeach 
                    
                          </label>
                        </div> 

   
    
                      <div class="form-group">
                          <div class="col-sm-10 col-sm-offset-4">
                             <button type="submit"  class="btn btn-primary">Create</button>

                          </div>

                      </div>



                  </form>
   	  </div>

 
@endsection