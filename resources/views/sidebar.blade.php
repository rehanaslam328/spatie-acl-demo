@if(Auth::check())

    <div class="card">
        <div class="card-header">
            Quick links
        </div>

        <div class="card-body">
            <ul class="list-group">
                @role('super-admin')
                <li class="list-group-item">
                  <a href="{{ url('/role') }}">
                        Role
                  </a>
                </li>

                <li class="list-group-item">
                  <a href="{{ url('/user-permission') }}">
                        Assign permission to user
                  </a>
                </li>
               
                <li class="list-group-item" >
                           
                 <a href="{{ url('/user') }}">
                       Users                 </a>
                </li>
                           
                 <li class="list-group-item">
                 <a href="{{ url('/post') }}">
                       Posts               </a>
                </li>
            

@endrole
          @role('admin')
             <li class="list-group-item" >
                           
                 <a href="{{ url('/user') }}">
                       Users                 </a>
                </li>
                           
                 <li class="list-group-item">
                 <a href="{{ url('/post') }}">
                       Posts               </a>
                </li>
          @endrole
                @role('user')         
                 <li class="list-group-item">
                 <a href="{{ url('/post') }}">
                       Posts               </a>
                </li>
               
                @endrole
               


                 
            </ul>

        
        </div>
    </div>
@endif