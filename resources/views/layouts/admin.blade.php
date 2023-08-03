<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>admin</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

<style>

    body {
        background-color: #fbfbfb;
    }
    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }

    /* Sidebar */
    .sidebar {
       position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0; /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0), 0 2px 10px 0 rgb(0 0 0);
        width: 240px;
        z-index: 600;
    }

    @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
    }
    .sidebar.active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0), 0 2px 10px 0 rgb(0 0 0);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(80vh - 30px);
        padding-top: 0;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    }
   
</style>
</head>
<body>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav style="padding-top: 0" id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <!--<div class="position-sticky">-->
            <div class="list-group list-group-flush mx-3 mt-4">
                <!-- Collapse 1 -->
               <a    style="padding-top: 0" 
                    class="list-group-item list-group-item-action py-2 ripple"
                    aria-current="true"
                    data-mdb-toggle="collapse"
                    href="#collapseExample1"
                    aria-expanded="true"
                    aria-controls="collapseExample1"
                ><!--class="fas fa-tachometer-alt fa-fw me-3" -->
                    <i ></i>
                </a>
                <!-- Collapsed content -->
                <ul id="collapseExample1" class="collapse show list-group list-group-flush">
                    <li class="list-group-item py-1">
                         <!-- <div class="btn-group">-->
                                 <ol>
                                     <h6>BRANCH</h6>
  
          <li>  <a class="dropdown-item" href="{{url('Branch/create')}}">add a new branch</a> </li> 
          <li>   <a class="dropdown-item" href="{{url('Branch/show')}}">show  branch</a> </li> 
                                 </ol>
                           <!-- </div>-->
                   </li>
                  <li class="list-group-item py-1">
                          <div class="btn-group">
                                 <ol>
                                     <h6>EMPLOYEE</h6>
  
           
          <li>   <a class="dropdown-item" href="{{url('Employee/show')}}">show  employee</a> </li> 
                                 </ol>
                            </div>
                   </li>

                   <li class="list-group-item py-1">
                          <div class="btn-group">
                                 <ol>
                                     <h6>TRIPS</h6>
  
          <li>  <a class="dropdown-item" href="{{url('Trip/create')}}">add a new trip</a> </li> 
          <li>   <a class="dropdown-item" href="{{url('Trip/show')}}">show  trips</a> </li> 
                                 </ol>
                            </div>
                   </li>
                    

                    <li class="list-group-item py-1">
                          <div class="btn-group">
                                 <ol>
                                     <h6>ROLSE</h6>
  
          <li>  <a class="dropdown-item" href="{{url('Role/create')}}">add a new role</a> </li> 
          <li>   <a class="dropdown-item" href="{{url('Role/show')}}">show  roles</a> </li> 
                                 </ol>
                            </div>
                   </li>
                    
                
               
            


<li class="list-group-item py-1">
                          <div class="btn-group">
                                 <ol>
                                     <h6>PROBLEMS</h6>
  
         
          <li>   <a class="dropdown-item" href="{{url('Contact_show')}}">show user comments</a> </li> 
                                 </ol>
                            </div>
                   </li>
                    


<li class="list-group-item py-1">
                          <div class="btn-group">
                                 <ol>
                                     <h6>USERS</h6>
  
         
          <li>   <a class="dropdown-item" href="{{url('User_show')}}">show users</a> </li> 
                                 </ol>
                            </div>
                   </li>
                    

                    <li class="list-group-item py-1">
                          <div class="btn-group">
                                 <ol>
                                     <h6>GOODS</h6>
  
         
           <li>  <a class="dropdown-item" href="{{url('Good/create')}}">send good</a> </li> 
          <li>   <a class="dropdown-item" href="{{url('Good/show')}}">show  goods</a> </li> 
                                 </ol>
                            </div>
                   </li>
                    

                </ul>
               
            </div>

     <!--   </div>-->
    </nav>
    
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
  <div>
  <h3 style="padding-top: 0" 
                    class="list-group-item list-group-item-action py-2 ripple"
                    aria-current="true"
                    data-mdb-toggle="collapse"
                    href="#collapseExample1"
                    aria-expanded="true"
                    aria-controls="collapseExample1"
   " >Controll menu</h3></div >
    <div class="container pt-4">

        @yield('content')

    </div>
</main>
<!--Main layout-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>
