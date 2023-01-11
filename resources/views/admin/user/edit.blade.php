@extends('dashboard')

@section('content')
  
      <div class="col-md-7">
         <form action="{{ url('/user/update') }}" method="post" class="form-horizontal">

                      <div class="form-group">
                          <legend>Create new User</legend>
                      </div>
                      @if(session('success'))
                          <p class="alert alert-success">{{session('success')}}</p>
                          @endif
                      {{csrf_field()}}
                        <div class="form-group">
                          <span>User_id:</span>
                          <input type="text" name="id" class="form-control" value="{{$user->id}}">
                        </div>
                      <div class="form-group">
                          <span >Name:</span>
                          <input type="text" name="name" value="{{$user->name}}" class="form-control">
                      </div>
                      <div class="form-group">
                          <span >Email:</span>
                          <input type="text" name="email" value="{{$user->email}}" class="form-control">
                      </div>
                      <div class="form-group">
                          <span >Password:</span> 
                          <input type="text" name="password" value="{{$user->password}}" class="form-control">
                      </div>

                       <div class="form-check">
                          <label class="form-check-label" for="check1">
                             @foreach($roles as $role) 
                             <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}" {{in_array($role->name,$userroles) ? "checked":"" }}>{{$role->name}}
                             <br>
                              @endforeach 
                    
                          </label>
                        </div> 


           {{--     <div class="form-group">
               
          <select name="roles[]" multiple class="form-control">
              @foreach($roles as $role)
             <option value="{{$role->id}}" {{in_array($role->name,$userroles) ? "selected":""}}>{{$role->name}}</option>
              @endforeach
         </select>
             </div>  --}}


                      <div class="form-group">
                          <div class="col-sm-10 col-sm-offset-4">
                             <button type="submit"  class="btn btn-primary">Update</button>

                          </div>

                      </div>



                  </form>
      </div>

 
@endsection