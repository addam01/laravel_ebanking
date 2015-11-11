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
        <div class="wrapper">
            {{-- @include('includes.header') --}}
            {{-- @include('includes.sidebar') --}}
            <!-- Content Wrapper. Contains page content -->
            <div class="container">
                <!-- Content Header (Page header) -->
                <section class="content-header text-center">
                    <h1>
                    E-Banking </br></br>
                    <small>Control panel</small>
                    </h1>
                    
                </section>
                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            <footer class="main-footer text-center">
                <div class="pull-center hidden-xs ">
                    <b>Version</b> 2.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://www.iat.com.my">IIUM Advanced Technology Sdn. Bhd.</a>.</strong> All rights reserved.
            </footer>
        </div><!-- ./wrapper -->

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




