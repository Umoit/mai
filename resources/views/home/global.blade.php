<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>尤洪</title>    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, now ui, now ui kit pro, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit">
<meta name="description" content="Start your development with a beautiful Bootstrap 4 UI kit.">

@yield('meta')
@yield('before-css')

<link rel="stylesheet" href="{{asset('home/css/style.css')}}"  />
    <!--[if IE 6]>
    <script src="js/iepng.js" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a'); 
        </script>
    <![endif]-->    
@yield('after-css')
    
    
    
</head>

<body>

    @include('home.nav')
   
    <div class="wrapper">

        @yield('content')


        @include('home.footer')
    </div>
        <!-- @include('home.right') -->
    

</body>

@yield('before-js')
<script type="text/javascript" src="{{asset('home/js/jquery-1.8.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/jquery.bxslider_e88acd1b.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/jquery-1.8.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/menu.js')}}"></script>    
<script type="text/javascript" src="{{asset('home/js/select.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/lrscroll.js')}}"></script>
@yield('after-js')
    


</html>