<!DOCTYPE html>
<html>

	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

  		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>首页</title>

		<!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Default Description')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        @yield('before-css')

        <link href="{{ URL::asset('/')}}backend/css/all.css" rel="stylesheet" type="text/css" />
		<link href="{{ URL::asset('/')}}backend/css/app.min.css" rel="stylesheet" type="text/css" />

        @yield('after-css')

	</head>

	<body>
        <div class="app app-header-fixed ">
            @include('backend.header')
            @include('backend.sidebar')
		
            <!-- content -->
            <div id="content" class="app-content" role="main">
                <div class="app-content-body ">
                   
                    @include('backend.messages')

                    @yield('content')

                </div>
		     </div>
             <!-- / content -->


            @include('backend.footer')

		</div>


		

	


    @yield('before-js')
    <script src="{{ URL::asset('/') }}backend/js/jquery.min.js"></script>
    <script src="{{ URL::asset('/') }}backend/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('/') }}backend/js/ui-load.js"></script>
    <script src="{{ URL::asset('/') }}backend/js/ui-jp.config.js"></script>
    <script src="{{ URL::asset('/') }}backend/js/ui-jp.js"></script>
    
    <script src="{{ URL::asset('/') }}backend/js/ui-nav.js"></script>
    <script src="{{ URL::asset('/') }}backend/js/ui-toggle.js"></script>
    <script src="{{ URL::asset('/') }}backend/js/ui-client.js"></script>

    
	@yield('after-js')
	
	</body>
	
</html>