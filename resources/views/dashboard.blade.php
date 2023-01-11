<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Spatie</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
</head>
<body>
	     <div class="container-fluid">
	     	<div class="row bg-primary">
          <div class="col-md-3">
              <h2 class="text-white">Spatie Package</h2>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <h2 class="text-white">ACL/Dashboard</h2>
          </div>
           <div class="col-md-1"></div>
           <div class="col-md-4">
             <div class="dropdown">
 <a href="#" data-toggle="dropdown" class=" dropdown-toggle">
        <span class="text-white" style="font-size:  20px;">
        @if(Auth::check())
 {{ Auth::user()->name}}
     @endif
  </span>  <span class="caret "></span>
    </a>
  <div class="dropdown-menu">
  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>


  </div>
</div>

           </div>
        </div>

	     	
	     </div>

      <div class="container-fluid">
        <div class="row">

          <div class="col-md-2">
         @include('sidebar')
          </div>
           @if(session('message'))
          <div class="col-md-3"> 
                          <p class="alert alert-danger">{{session('message')}}</p>
          </div>
           @endif

     @section('content')
        @show
        </div>
        
      </div>  

</body>
</html>

<script type="text/javascript">
  


        
</script>