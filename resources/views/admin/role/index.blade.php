@extends('dashboard')

@section('content')
<br>
 	
   	  <div class="col-md-7">
   	  		{{-- expr --}}
           @can('create-role')
          <a href="{{ url('role/create') }}" class="btn btn-info">Add new</a>
         @endcan
   	  	 <table class="table table-bordered table-hover table-responsive">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
     	@foreach ($roles as $role)

    <tbody>
      <tr>
        <td>{{$role->id}}</td>
        <td>{{$role->name}}</td>
          @can('view-role')
 
        <td><a href="{{url('role/show/'.$role->id)}}" class="btn btn-success">View</a></td>
         @endcan 
        @can('edit-role') 
       <td><a href="{{url('role/'.$role->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
      @endcan 
      @can('delete-role') 
        <td><a href="{{url('role/'.$role->id.'/delete')}}" class="btn btn-danger" >Delete</a></td>
      @endcan 
      </tr>
                    
                    
    </tbody>
   	  	@endforeach
   	  	  </table>

   	  </div>

 
@endsection