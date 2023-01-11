@extends('dashboard')

@section('content')
 	
   	  <div class="col-md-7">
   	  	 <form action="{{ url('/role/save') }}" method="post" class="form-horizontal">

                      <div class="form-group">
                          <legend>Create new Role</legend>
                      </div>
                      @if(session('success'))
                          <p class="alert alert-success">{{session('success')}}</p>
                          @endif
                      {{csrf_field()}}
                      <div class="form-group">
                          <span >Role:</span>
                          <input type="text" name="name" class="form-control">
                      </div>

                    {{--   <div class="form-check">
                          <label class="form-check-label" for="check1">
                             @foreach($permissions as $permission) 
                             <input type="checkbox" class="form-check-input" name="permissions[]" value="{{$permission->id}}" >{{$permission->name}}
                             <br>
                              @endforeach 
                    
                          </label>
                        </div>  --}}
                    

               <!--   <div class="form-group">
                                 
                            <select name="permissions[]" multiple class="form-control">
                               {{--   @foreach($permissions as $permission)  --}}
                               <option value="{{-- {{$permission->id}} --}}">{{-- {{$permission->name}} --}}</option>
                              {{--  @endforeach  --}}
                           </select>
                               </div>   
                           -->
                      <div class="form-group">
                          <div class="col-sm-10 col-sm-offset-4">
                             <button type="submit"  class="btn btn-primary">Create</button>

                          </div>

                      </div>



                  </form>
   	  </div>

 
@endsection