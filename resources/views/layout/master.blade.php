<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- BOOTSTRAP STYLES-->
    	<link href="{{ ('assets/css/bootstrap.css') }}" rel="stylesheet" />
     	<!-- FONTAWESOME STYLES-->
    	<link href="{{ ('assets/css/font-awesome.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    	<link href="{{ ('assets/css/custom.css') }}" rel="stylesheet" />
    	 <!-- GOOGLE FONTS-->
   		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   		<body class="skin-blue">
   	</head>
        
        
            <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">E-Banking</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : <span id="dtText"></span> &nbsp; <a href="{{url('logout')}}" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a class="active-menu"  href=""><i class="fa fa-dashboard fa-3x"></i> My Account</a>
                    </li>
                     <li>
                        <a  href=""><i class="fa fa-sitemap fa-3x"></i> Services<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                            
                            <li>
                                <a href="#">Bill<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Telephone</a>
                                    </li>
                                    <li>
                                        <a href="#">Electric</a>
                                    </li>
                                    <li>
                                        <a href="#">Water</a>
                                    </li>

                                </ul>
                               
                            </li>
                            <li>
                                <a href="#">Account Transaction</a>
                            </li>
                        </ul>
                      </li>                                   
                     <li>
                        <a   href="login.html"><i class="fa fa-bolt fa-3x"></i> Login</a>
                    </li>                        
                </ul>
               
            </div>
            
        </nav>

            
                
                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section><!-- /.content -->

        <!-- /. PAGE WRAPPER  -->
        </div>
        </div>

   		<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    	<!-- JQUERY SCRIPTS -->
    	<script src="{{ ('assets/js/jquery-1.10.2.js') }}"></script>
      	<!-- BOOTSTRAP SCRIPTS -->
    	<script src="{{ ('assets/js/bootstrap.min.js') }}"></script>
    	<!-- METISMENU SCRIPTS -->
    	<script src="{{ ('assets/js/jquery.metisMenu.js') }}"></script>
      	<!-- CUSTOM SCRIPTS -->
    	<script src="{{ ('assets/js/custom.js') }}"></script>
    
</html>




