@extends('home.global')

@section('after-css')
<link rel="stylesheet" type="text/css" href="{{asset('home/css/ShopShow.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('home/css/MagicZoom.css')}}" />
<style type="text/css">
    .leftNav{
        display: none;
    }
</style>
@endsection


@section('content')



<div class="i_bg">  
    <div class="content mar_20">
      <img src="{{asset('home/images/img2.jpg')}}">        
    </div>
    <!--Begin 第二步：确认订单信息 Begin -->
    <div class="content mar_20">
    <center>
       
    <img src="{{$result['qr_code']}}">
     </center>

    </div>
  <!--End 第二步：确认订单信息 End-->
    
    
  
</div>

@section('after-js')
<script type="text/javascript" src="{{asset('home/js/menu.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/n_nav.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/num.js')}}" >
        var jq = jQuery.noConflict();
    </script>
        
<!-- <script type="text/javascript" src="{{asset('home/js/p_tab.js')}}"></script> -->
<script type="text/javascript" src="{{asset('home/js/shade.js')}}"></script>
 
    

<script type="text/javascript">
    $.ajaxSetup({
    headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
    });
    
</script>


@endsection

@endsection