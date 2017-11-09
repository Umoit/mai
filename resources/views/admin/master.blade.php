<!DOCTYPE html>
<html>

  <head>
  <meta charset="utf-8">
  <title>首页</title>
  <!-- Meta -->
  <meta name="description" content="@yield('meta_description', 'Default Description')">
  <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
  @yield('meta')
  @yield('before-css')

    <link href="{{ URL::asset('/')}}backend/css/all.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/')}}backend/css/app.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ URL::asset('/')}}/admin/assets/animate.css/animate.css" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('/')}}/admin/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('/')}}/admin/assets/simple-line-icons/css/simple-line-icons.css" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('/')}}/admin/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />

    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/app.css" type="text/css" />


   @yield('after-css')

  </head>

  <body>
        <div class="app app-header-fixed ">
            @include('admin.header')
            @include('admin.sidebar')
    
            <!-- content -->
            <div id="content" class="app-content" role="main">
                <div class="app-content-body ">
                   
                    @include('admin.messages')

                    @yield('content')

                </div>
         </div>
             <!-- / content -->


            @include('admin.footer')

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