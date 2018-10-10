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
      <div class="two_bg">
          <div class="two_t">
              <span class="fr"><a href="#">修改</a></span>商品列表
            </div>
            <table border="0" class="car_tab" style="width:1110px;" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td class="car_th" width="550">商品名称</td>
                <td class="car_th" width="140">属性</td>
                <td class="car_th" width="150">购买数量</td>
                <td class="car_th" width="130">小计</td>
                <td class="car_th" width="140">返还积分</td>
              </tr>
                @foreach(Cart::all() as $item)

                <tr>
                <td>
                    <div class="c_s_img"><img src="{{asset('home/images/c_1.jpg')}}" width="73" height="73"></div>
                   {{$item->name}}
                </td>
                <td align="center">颜色：灰色</td>
                <td align="center">{{$item->qty}}</td>
                <td align="center" style="color:#ff4e00;">{{$item->price}}</td>
                <td align="center">26R</td>
              </tr>

                @endforeach
          
             
              <tr>
                <td colspan="5" align="right" style="font-family:'Microsoft YaHei';">
                    商品总价：￥{{Cart::total()}}； 返还积分 56R  
                </td>
              </tr>
            </tbody></table>
            
            <div class="two_t">
              <span class="fr"><a href="#">修改</a></span>收货人信息
            </div>
            <table border="0" class="add_tab" style="width:1110px;" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="135" align="right">配送地区</td>
                <td colspan="3" style="font-family:'宋体';">
                  <input type="hidden" name="country" value="1"><div class="jslct" style="z-index: 0;"><div class="jslct_t"><em>中国</em></div><dl style="width: 100px; overflow-x: hidden; overflow-y: auto; height: auto; display: none;"><dd val="0" class="noborder" style="width: 117px;">请选择...</dd><dd val="1" style="width: 117px;" class="jslcted">中国</dd><dd val="2" style="width: 117px;">中国</dd><dd val="3" style="width: 117px;">中国</dd><dd val="4" style="width: 117px;">中国</dd></dl></div>
                  <input type="hidden" name="province" value="1"><div class="jslct" style="z-index: 0;"><div class="jslct_t"><em>四川</em></div><dl style="width: 100px; overflow-x: hidden; overflow-y: auto; height: auto; display: none;"><dd val="0" class="noborder" style="width: 117px;">请选择...</dd><dd val="1" style="width: 117px;" class="jslcted">四川</dd><dd val="2" style="width: 117px;">重庆</dd><dd val="3" style="width: 117px;">北京</dd><dd val="4" style="width: 117px;">云南</dd></dl></div>
                    <input type="hidden" name="city" value="1"><div class="jslct" style="z-index: 0;"><div class="jslct_t"><em>成都</em></div><dl style="width: 100px; overflow-x: hidden; overflow-y: auto; height: auto; display: none;"><dd val="0" class="noborder" style="width: 117px;">请选择...</dd><dd val="1" style="width: 117px;" class="jslcted">成都</dd><dd val="2" style="width: 117px;">宜宾</dd><dd val="3" style="width: 117px;">南充</dd><dd val="4" style="width: 117px;">绵阳</dd></dl></div>
                    <input type="hidden" name="area" value="2"><div class="jslct" style="z-index: 0;"><div class="jslct_t"><em>成华区</em></div><dl style="width: 100px; overflow-x: hidden; overflow-y: auto; height: auto; display: none;"><dd val="0" class="noborder" style="width: 117px;">请选择...</dd><dd val="1" style="width: 117px;" class="">武侯区</dd><dd val="2" style="width: 117px;" class="jslcted">成华区</dd><dd val="3" style="width: 117px;">锦江区</dd><dd val="4" style="width: 117px;">青羊区</dd></dl></div>
                    （必填）
                </td>
              </tr>
              <tr>
                <td align="right">收货人姓名</td>
                <td style="font-family:'宋体';"><input type="text" value="姓名" class="add_ipt">（必填）</td>
                <td align="right">电子邮箱</td>
                <td style="font-family:'宋体';"><input type="text" value="12345678@qq.com" class="add_ipt">（必填）</td>
              </tr>
              <tr>
                <td align="right">详细地址</td>
                <td style="font-family:'宋体';"><input type="text" value="世外桃源" class="add_ipt">（必填）</td>
                <td align="right">邮政编码</td>
                <td style="font-family:'宋体';"><input type="text" value="610000" class="add_ipt"></td>
              </tr>
              <tr>
                <td align="right">手机</td>
                <td style="font-family:'宋体';"><input type="text" value="1361234587" class="add_ipt">（必填）</td>
                <td align="right">电话</td>
                <td style="font-family:'宋体';"><input type="text" value="028-12345678" class="add_ipt"></td>
              </tr>
          
            </tbody></table>

            
            
            <div class="two_t">
              支付方式
            </div>
            <ul class="pay">
                <li class="checked">余额支付<div class="ch_img"></div></li>
                <li>银行亏款/转账<div class="ch_img"></div></li>
                <li>货到付款<div class="ch_img"></div></li>
                <li>支付宝<div class="ch_img"></div></li>
            </ul>
            
          
            
            <table border="0" style="width:900px; margin-top:20px;" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td align="right">
                  该订单完成后，您将获得 <font color="#ff4e00">1815</font> 积分 ，以及价值 <font color="#ff4e00">￥0.00</font> 的红包 <br>
                    商品总价: <font color="#ff4e00">￥1815.00</font>  + 配送费用: <font color="#ff4e00">￥15.00</font>
                </td>
              </tr>
              <tr height="70">
                <td align="right">
                  <b style="font-size:14px;">应付款金额：<span style="font-size:22px; color:#ff4e00;">￥2899</span></b>
                </td>
              </tr>
              <tr height="70">
                <td align="right"><a href="#"><img src="{{asset('home/images/btn_sure.gif')}}"></a></td>
              </tr>
            </tbody></table>

            <form action="{{route('pay')}}" method="post">
            <input type="password" value="" name="password" class="l_pwd" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit"  value="ads">
            </form>

            
          
        </div>
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