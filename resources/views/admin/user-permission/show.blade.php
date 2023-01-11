@extends('dashboard')

@section('content')
<br>
  
      <div class="col-md-7">
          {{-- expr --}}
          <a href="{{ url('/user-permission') }}" class="btn btn-info">Back</a>
         <table class="table table-bordered table-hover table-responsive">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>{{$users->id}}</td>
        <td>{{$users->name}}</td>
        <td>{{$users->email}}</td>
      </tr>
                    
                    
    </tbody>
        
          </table>

      </div>

 
@endsection