@extends('dashboard')

@section('content')
<br>
 	   	  <div class="col-md-7">
                
   	  		{{-- expr --}}
           @can('create-user')
           <a href="{{ url('user-permission/create') }}" class="btn btn-info">Add new</a>
           @endcan
    	  	 <table class="table table-bordered table-hover table-responsive">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
     	@foreach ($users as $user)

    <tbody>
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
          @can('view-user')
         <td><a href="{{url('user-permission/show/'.$user->id)}}" class="btn btn-success">View</a></td>
         @endcan
          @can('edit-user') 
        <td><a href="{{url('user-permission/'.$user->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
         @endcan 
         @can('delete-user')
        <td><a href="{{url('user-permission/'.$user->id.'/delete')}}" class="btn btn-danger" >Delete</a></td>
         @endcan 
      </tr>
                    
                    
    </tbody>
   	  	@endforeach
   	  	  </table>

   	  </div>

 
@endsection