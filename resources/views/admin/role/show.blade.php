@extends('dashboard')

@section('content')
<br>
  
      <div class="col-md-7">
          {{-- expr --}}
          <a href="{{ url('/role') }}" class="btn btn-info">Back</a>
         <table class="table table-bordered table-hover table-responsive">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>{{$roles->id}}</td>
        <td>{{$roles->name}}</td>
      </tr>
                    
                    
    </tbody>
        
          </table>

      </div>
   
 
@endsection