<style type="text/css">
	/* quick_links */
.quick_links_wrap,.mui-mbar-tabs{height:100%;width:320px;right:0;position:fixed;right:0;bottom:0;z-index:9;height:100%;-webkit-transition:width linear .4s;-moz-transition:width linear .4s;-ms-transition:width linear .4s;transition:width linear .4s;_position:fixed;_bottom:auto;_top:expression(documentElement.scrollTop+documentElement.clientHeight-this.offsetHeight-10);}
.quick_links_wraper.quick_links_dockright{margin-left:0;left:auto;right:4px;}
.mui-mbar-tabs i,.ibar_closebtn,.login_order,.login_favorite{display:inline-block;background:url(../images/ibar_sprites.png) no-repeat;cursor:pointer;height:19px;width:18px;vertical-align:top;position:absolute;}
.quick_links_panel{
	width:40px;
	height:100%;
	position:absolute;
	background:#444851;
	z-index:2;
	top:0;
	right:0;
	font-family:'microsoft yahei',arial;
	
}	
.quick_links_panel a{
	display:block;
	line-height:200px;
	width:40px;
	height:38px;
	text-decoration:none;
	color:#d8d8d8;
	font-size:12px;
	overflow:hidden;
	background-color:#444851;
	position:relative;
	overflow:hidden;
	top:0;
	left:0px;
	*left:-15px;
	z-index:1;
	margin:0;
	padding:0;
}
.quick_links_panel .quick_toggle{
	position:absolute;
	bottom:0;
	left:0;
	width:40px;
	background:#444851;
	z-index:1;
}
.quick_links_panel .mp_tooltip{
	height:38px;
	line-height:38px;
	width:92px;
	position:absolute;
	z-index:2;
	left:-121px;
	top:0;
	background:#444851;
	color:#d8d8d8;
	text-align:center;
	display:block;
	visibility:hidden;
}
.quick_links_panel .mp_qrcode{
	padding:10px;
	width:148px;
	height:175px;
	top:-157px;
	background:#fff;
	box-shadow:0 0 5px rgba(0,0,0,.4);
	border-radius:5px 0 0 5px;
	border-left:1px solid #ccc\0;
	border-top:1px solid #ccc\0;
	border-bottom:1px solid #ccc\0;
	z-index:3;
	position:absolute;
	left:-168px;
	left:-169px\0;
	display:none;
}
.quick_links_panel .icon_arrow_white{
	position:absolute;
	right:-5px;
	top:172px;
	width:5px;
	height:9px;
	background-position:0 -253px;
}
.quick_links_panel .icon_arrow_right_black{
	position:absolute;
	right:-5px;
	top:15px;
	width:5px;
	height:9px;
	background-position:0 -234px;
	overflow:hidden;
}
.quick_toggle .return_top{display:none;}
.quick_links_allow_gotop .return_top{display:block;}


.quick_links{
	position:absolute;
	top:50%;
	left:0;
	margin-top:-190px;
	*margin-top:-220px;	
	background:#444851;
	z-index:2;
	width:40px;
}
.quick_links a.message_list{
	background:url(../images/ibar_sprites.png) no-repeat;
	line-height:16px;
	height:133px;
	background-position:-23px -225px;
	color:#fff;
	margin:20px 0 10px;
	
}
.quick_links_min .quick_links_panel{right:280px;}
.quick_links li,.quick_toggle li{position:relative;display:block;left:0;top:0px;}
.history_list,.leave_message,.mpbtn_histroy,.mpbtn_wdsc,.mpbtn_recharge{margin-bottom:6px;}

.quick_links a:hover, .quick_links a.current,.quick_toggle a:hover{background:#ed145b;text-decoration:none;}
.quick_links a.message_list .span{
	width:16px;
	display:block;
	height:48px;
	margin:38px 0 0 14px;
	cursor:pointer;
}
.quick_links a.message_list .cart_num{
	width:21px;
	height:21px;
	display:block;
	border-radius:50%;
	background:#ed145b;
	text-align:center;
	line-height:21px;
	margin:9px 0 0 10px;
	cursor:pointer;
	color:#fff;
}
.quick_links i.setting{background-position:0 0;width:18px;height:19px;top:10px;left:11px;}
.quick_links a:hover i.setting,.quick_links .current i.setting{background-position:-33px 0;}
.quick_links i.message{background-position:0px -29px;width:23px;height:18px;top:11px;left:9px;}
.quick_links a:hover i.message,.quick_links .current i.message{background-position:-33px -29px;}
.quick_links i.cart{background-position:0px -29px;}
.quick_links i.view{width:18px;height:18px;background-position:0 -57px;top:10px;left:11px;}
.quick_links a:hover i.view,.quick_links .current i.view{background-position:-33px -57px;}
.quick_links .qa{width:18px;height:15px;background-position:0 -85px;top:11px;left:11px;}
.quick_links a:hover i.qa,.quick_links .current i.qa{background-position:-33px -85px;}
.quick_links .zuji{width:11px;height:24px;background-position:-4px -110px;top:8px;left:14px;}
.quick_links a:hover i.zuji,.quick_links .current i.zuji{background-position:-36px -110px;}
.quick_links .chongzhi{background:url(../images/chongzhi.png) no-repeat;width:35px;height:35px;top:2px;left:3px;}
.quick_links .wdsc{background:url(../images/wdsc.png) no-repeat;width:35px;height:35px;top:2px;left:3px;}
.quick_toggle .mpbtn_qrcode{width:18px;height:18px;top:11px;left:11px;background-position:0 -302px;}
.quick_toggle .top{background-position:0 -201px;width:17px;height:14px;top:12px;left:12px;}
.quick_toggle a:hover .top, .quick_links a.current .top{background-position:-33px -201px;}
.quick_toggle i.kfzx{width:15px;height:16px;top:11px;left:12px;background-position:0 -175px;}
.quick_toggle a:hover i.kfzx{background-position:-33px -175px;}
/* quick_links_pop */
.quick_links_pop{position:absolute;top:0;right:0;display:none;box-shadow:0 0 5px #999; border-radius:5px 0 0 5px;border:1px solid #999;behavior:url(js/htc.htc);}
.quick_links_pop .arrow, .quick_links_pop .arrow i{display:none;border-color:transparent #ddd;border-style:dashed solid;border-width:12px 0 12px 12px;font-size:0;height:0;width:0;position:absolute;left:100%;top:12px;}
.quick_links_pop .arrow i{border-color:transparent #f9fafc;margin:-12px 0 0 -13px;left:0;top:0;}
.quick_links_pop .fix_bg{display:none;border-top-width:0;border-radius:0 0 3px 3px;margin:0 0 -4px -250px;height:2px;width:500px;overflow:hidden;position:absolute;bottom:0;left:50%;}
.quick_links_pop .pop_panel{font-size:12px;width:100%;height:628px;position:relative;}
.quick_cart_list, .quick_history_list, .quick_links_pop .links, .quick_my_qlinks, .quick_message_list,.quick_leave_message,.quick_mpbtn_histroy,.quick_mpbtn_wdsc,.quick_mpbtn_recharge{position:absolute;width:280px;left:0;top:0;background:#fff;height:100%;display:block;}
.quick_cart_list .user_cart_inner, .quick_history_list .history_slider{display:block;border:0;margin:0;position:static;}
.quick_cart_list .user_cart_inner .del{display:none;}
.quick_history_list .title i{background-position:-170px -34px;}
.quick_leave_message .title i{background-position:-160px 0;}
.quick_leave_message .types{font-size:0;position:absolute;left:148px;top:18px;white-space:nowrap;}
.quick_leave_message .types input, .quick_leave_message .types label{font-size:12px;margin-right:20px;vertical-align:middle;white-space:nowrap;}
.quick_leave_message .types input{margin:-2px 3px 0 0;height:13px;width:13px;*margin-top:0;}
.quick_leave_message .txt{padding:15px 0;}
.quick_leave_message .txt textarea{display:block;background:#fff;border:1px solid #e8e8e8;border-radius:3px;box-shadow:0 1px 0 #fff, inset 0 1px 4px rgba(0,0,0,.1);margin:0 auto;padding:8px;height:68px;width:90%;}
.quick_leave_message .token{padding:0 0 14px 16px;height:26px;}
.quick_leave_message .token input{background:#fff;border:1px solid #ddd;padding:3px 4px;width:76px;vertical-align:middle;}
.quick_leave_message .token img{margin-left:5px;vertical-align:middle;}
.quick_leave_message .btns{float:right;margin-top:-42px;padding-right:16px;}
.quick_leave_message .btn{background-position:0 -356px;cursor:pointer;font-size:0;padding-left:20px;text-shadow:0 1px 0 #355ba9;overflow:visible;}
.quick_leave_message .btn:hover{background-position:0 -386px;}
.quick_leave_message .btn span{background-position:100% -356px;font-size:12px;padding-right:20px;*height:29px;}
.quick_leave_message .btn:hover span{background-position:100% -386px;}
.quick_links_pop .no_data{color:#333;font-size:14px;padding:35px 10px;text-align:center;}
.quick_links_pop .no_data i{display:inline-block;background:url(../images/cart_new.png) no-repeat 0 -188px;margin:0 10px 0 0;height:36px;width:60px;vertical-align:middle;}
.quick_links_pop .links li{border-top:1px solid #f1f1f1;vertical-align:top;}
.quick_links_pop .links a{display:block;background:#FCFCFC;color:#333;font-size:14px;padding:12px 15px;}
.quick_links_pop .links a:hover{background-color:#F2F3F4;color:#4467a7;}
.quick_links_pop .links .tips{float:right;color:#61c2ed;font-size:12px;}
.quick_my_qlinks .title i{background-position:-200px 0;height:22px;width:22px;}
.quick_message_list .title i{background-position:-200px -34px;height:22px;width:22px;}
.quick_message_list .no_data i{background-image:url(../images/quick_links_no_msg.png);background-position:0 0;height:45px;width:62px;}

/*修改*/
.ibar_plugin_title{
	height:38px;
	line-height:38px;
	border-bottom:1px solid #dedede;
	color:#333;
	font-size:14px;
	font-weight:700;
	width:267px;
	margin:0 auto;
}
.ibar_closebtn{
	width:20px;
	height:20px;
	background-position:5px -267px;
	padding:5px;
	overflow:hidden;
	position:absolute;
	top:4px;
	right:4px;
}
.ibar_plugin_content{
	position:absolute;
	width:100%;
	top:0;
	bottom:0;
	_height:expression((document.documentElement.clientHeight-100-40)+"px");
	overflow:hidden;
}
.ibar_cart_group{
	width:250px;
	padding:0 20px 0 10px;
	background:#fff;
}
.ibar_cart_group_header{
	height:34px;
	line-height:34px;
	border-bottom:1px solid #dedede;
}
.ibar_cart_group_title{
	float:left;
	font-size:14px;
}
.ibar_cart_group_header a{float:right;color:#ed145b}
.ibar_cart_group_header a:hover{text-decoration:underline;}
.cart_item{
	padding:15px 0;
	border-bottom:1px dotted #ddd;
}
.cart_item_pic{
	position:relative;
	float:left;
	width:87px;
	height:87px;
}
.cart_item_pic img{
	width:85px;
	height:85px;
	border:1px solid #f4f4f4;
}
.cart_item_desc{
	float:left;
	width:150px;
	padding:3px 0 0 10px;
}
.cart_item_name{
	display:inline-block;
	width:100%;
	height:36px;
	overflow:hidden;
	line-height:18px;
	color:#5c5c5c;
}
.cart_item_sku{
	width:160px;
	height:24px;
	line-height:24px;
	color:#999;	
}
.cart_price{color:#ed145b;font-weight:700;font-family:Arial,Helvetica;}
.cart_handler{
	position:absolute;
	height:100px;
	bottom:0;
	width:100%;
	background:#fff;
}
.cart_handler_header{width:260px;margin:8px 10px;float:left;}
.cart_handler_left{float:left;}
.cart_handler_right{float:right;font-weight:700;font-size:16px;font-family:Arial;color:#ed145b;}
.cart_go_btn{
	display:block;
	height:33px;
	line-height:33px;
	font-size:19px;
	font-family:SimHei;
	color:#fff;
	text-align:center;
	text-decoration:none;
	background:#ed145b;
	width:260px;
	margin:0 10px;
	float:left;
}
.cart_go_btn:hover{color:#fff;}
.ia-head-list{
	height:66px;
	width:244px;
	margin-left:15px;
	background:#f3f3f3;
	overflow:hidden;
	zoom:1;
	margin-top:15px;
	color:#4a4a4a;
}
.ia-head-list a{color:inherit;}
.ia-head-list .pl{
	width:80px;
	border-right:dashed 1px #ccc;
	height:47px;
	margin-top:10px;
	text-align:center;
	float:left;
}
.ia-head-list .num{
	font-size:16px;
	height:26px;
	font-family:arial;
}
.ia-head-list .money{border-right:0;}
.ga-expiredsoon{width:244px;margin-left:15px;margin-top:20px;}
.ga-expiredsoon .es-head{color:#5c5c5c;height:13px;border-left:3px solid #5c5c5c;padding-left:13px;}
.ia-none{background:url(../images/null_icon.png) no-repeat center 50px;text-align:center;padding-top:150px;padding-bottom:30px;font-family:"微软雅黑";font-size:16px;color:#797979;}
.jiaru{margin-top:40px;}
.ibar-history-head{
	position:relative;
	font-size:14px;
	border-bottom:solid 1px #dedede;
	height:37px;
	line-height:37px;
	width:255px;
	margin-left:10px;
}
.ibar-history-head a{float:right;color:#ed145b;}
.ibar-history-head a:hover{text-decoration:underline;}
.imp_item{
	width:255px;
	padding-top:10px;
	border-bottom:dashed 1px #d5d5d5;
	overflow:hidden;
	padding-bottom:15px;
	margin-bottom:-1px;
	margin-left:10px;
}
.imp_item .pic{
	float:left;
	display:inline;
	margin-right:10px;
}
.imp_item .tit{
	height:40px;
	overflow:hidden;
	width:140px;
	word-break:break-all;
}
.imp_item .tit a{
	color:#5c5c5c;
	line-height:18px;
}
.imp_item .tit a:hover{
	color:#ed145b;
	line-height:18px;
}
.imp_item .price{
	color:#ed145b;
	font-weight:700;
	margin-bottom:10px;
}
.imp_item .price em{
	font-family:arial;
	font-size:14px;
}
.imp_item .imp-addCart{
	background:#f32166;
	background:-webkit-linear-gradient(top,#fb2f72,#ed145b);
	color:#fff;
	width:90px;
	height:28px;
	float:left;
	display:inline;
	line-height:28px;
	text-align:center;
}
.sc{float:right;line-height:22px;margin-right:7px;}
.ibar_recharge_form{
	width:220px;
	margin:0 auto;
	padding:15px 0;
}
.ibar_recharge-field{
	border:1px solid #ddd;
	height:30px;
	margin-bottom:10px;
}
.ibar_recharge-field label{
	width:40px;
	text-align:center;
	color:#fff;
	background:#737373;
	line-height:30px;
	float:left;
}
.ibar_recharge-fl{
	position:relative;
	float:left;
	width:170px;
	padding-left:5px;
	
}
.ibar_recharge-iwrapper{
	padding-top:7px;
}
.ibar_recharge-iwrapper input{border:0;outline:0 none;}
i.ibar_recharge-contact{
	width:13px;
	height:14px;
	background:url(../images/contact.png);
	top:8px;
	right:5px;
	cursor:pointer;
}
.ibar_recharge-mod{
	line-height:30px;
	color:#737373;
	font-weight:700;
	cursor:pointer;
	-moz-user-select:none;
	-webkit-user-select:none;
	-ms-user-select:none;
}
i.ibar_recharge-arrow{
	width:6px;
	height:3px;
	background:url(../images/arrow-down.png);
	top:14px;
	right:8px;
	cursor:pointer;
}
.ibar_recharge-vbox{
	border:1px solid #ddd;
	background:#fff;
	position:absolute;
	left:0;
	top:30px;
	width:177px;
}
.ibar_recharge-vbox li{
	float:left;
	width:68px;
	border-right:1px solid #ddd;
	padding:7px 10px;
	line-height:1;
	cursor:pointer;
}
.ibar_recharge-vbox li.sanwe{border:0;}
.ibar_recharge-vbox .selected, .ibar_recharge-vbox li:hover{background:#ececec;}
.ibar_recharge-btn{text-align:center;padding-top:3px;}
.ibar_recharge-btn input{
	border:0;
	color:#fff;
	display:inline-block;
	width:115px;
	height:31px;
	font-size:16px;
	background:#f32166;
	background:-webkit-linear-gradient(top,#fb2f72,#ed145b);
	cursor:pointer;
}
.ibar_recharge-btn input:hover{
	background:-webkit-linear-gradient(top,#fa578c,#f73776);
}
.ibar_login_box{
	width:267px;
	height:185px;
	padding:10px;
	background:#fff;
	box-shadow:0 0 5px rgba(0,0,0,.4);
	border-radius:5px 0 0 5px;
	border-left:1px solid #ccc\0;
	border-top:1px solid #ccc\0;
	border-bottom:1px solid #ccc\0;
	z-index:3;
	position:absolute;
	top:0px;
	left:-287px;
	left:-288px\0;
	display:none;
}
.ibar_login_box .avatar_box{
	width:267px;
	overflow:hidden;
	height:120px;
}
.status_login .avatar_imgbox{
	float:left;
	margin:6px 20px 0 5px;
	display:inline;
}
.ibar_login_box .avatar_imgbox{
	width:100px;
	height:100px;
	border-radius:50%;
	overflow:hidden;
}
.ibar_login_box .avatar_box p{
	font-size:14px;
	color:#333;
	text-align:center;
}
.status_login .user_info{
	overflow:hidden;
	color:#333;
	padding-top:30px;
	line-height:24px;
	width:140px;
	float:left;
}
.status_login .user_info li{
	height:24px;
	line-height:24px;
	overflow:hidden;
	white-space:nowrap;
}
.ibar_login_box .login_btnbox{
	width:267px;
	height:79px;
	border-top:1px dotted #d5d5d5;
	overflow:hidden;
	padding-top:15px;
	clear:both;
}
.ibar_login_box .login_btnbox a{
	width:94px;
	height:30px;
	line-height:30px;
	text-align:center;
	border:1px solid;
	color:#333;
	text-decoration:none;
	float:left;
	background-position:0 -408px;
	background-repeat:repeat-x;
	border-color:#e9e9e9;
}
.ibar_login_box .login_btnbox .login_order{margin:0 10px 0 35px;}
.ibar_login_box .login_btnbox a:hover{text-decoration:none;background-position:0 -366px;border-color:#fccadb;background:none;}
.ibar_login_box .login_btnbox .login_favorite{border-color:#e9e9e9}
.ibar_login_box .icon_arrow_white{
position:absolute;
right:-5px;
top:15px;
width:5px;
height:9px;
background-position:0 -253px;
}
/*飞入购物车*/
#plist{width:100%;height:auto;float:left;overflow:hidden;padding-top:10px;}
#plist li{float:left;width:240px;height:auto;overflow:hidden;padding:0px 20px 20px 0px;}
#plist .extra{padding:2px 0;height:16px;line-height:16px;overflow:hidden;color:#005aa0;float:left;padding-left:2px;}  
#plist .extra a{float:left;font-size:12px;}
#plist .btns{margin-top:5px;zoom:1;float:left;padding-left:2px;}
#plist .btns a{float:left;height:19px;padding:0 9px;border:1px solid #ddd;border-radius:2px;margin:0 8px 0 0;background:#F7F7F7;line-height:18px;line-height:19px\9;text-align:center;text-decoration:none;color:#333;background:-moz-linear-gradient(top,#f7f7f7,#f2f2f2);background:-webkit-gradient(linear,0 0,0 100%,from(#f7f7f7),to(#f2f2f2));filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#f7f7f7", endColorstr="#f2f2f2");-ms-filter:"progid:DXImageTransform.Microsoft.gradient(startColorstr="#f7f7f7", endColorstr="#f2f2f2")";}
#plist.plist-n7a .p-img{height:240px;}
.index_banner{position:relative;margin-bottom:20px;height:500px;}
.index_banner li{position:absolute;top:0;left:0;overflow:hidden;width:100%;height:500px;}
.index_banner li a{display:block;margin:0 auto;width:1000px;height:500px;}
.index_banner .clert{width:100%; position:absolute;z-index:99;bottom:0;left:0;height:30px;line-height:30px;text-align:center;}
.index_banner cite{z-index:999;height:15px;}
.index_banner cite span{display:inline-block;margin:0 4px;width:10px;height:10px;background-color:#666;text-indent:-999em;opacity:.8;cursor:pointer;border-radius:5px;}
.index_banner cite span.cur{background-color:#000;cursor:default;}

.flei{padding-left:28px;}
.flei a{display:block;background:url(store_images/xiala12497.gif) 125px 4px no-repeat;}
.flei a:hover{color:#666;text-decoration:none;}
.flei i{display:block;width:8px;height:8px;background:url(store_images/xiala12497.gif) -20px -102px no-repeat;float:left;margin:10px 8px 0 0;}
#plist .btns a.btn-compare{padding:0;}
#plist .btns a.btn-compare input{float:left;margin:3px 5px;}
#plist .btns a.btn-compare label{margin-right:5px;}
.main{width:1000px;margin:0 auto;}

.settleup-2013{
	height:34px;
	position:fixed;
	right:45px;
	z-index:900;
}
.shoping-small{
	width:119px;
}
.fly_item{border:1px solid #000;width:38px;height:38px;overflow:hidden;position:absolute;visibility:hidden;opacity:.5;filter:alpha(opacity=50);}
.shop_cart{width:106px;height:25px;line-height:25px;padding-top:8px; font-family:'microsoft yahei';font-size:12px;text-indent:34px;color:#000;position:absolute;right:50px;top:240px;}
</style>
<div class="mui-mbar-tabs">
	<div class="quick_link_mian">
		<div class="quick_links_panel">
			<div id="quick_links" class="quick_links">
				<li>
					<a href="#" class="my_qlinks"><i class="setting"></i></a>
					<div class="ibar_login_box status_login">
						<div class="avatar_box">
							<p class="avatar_imgbox"><img src="images/no-img_mid_.jpg" /></p>
							<ul class="user_info">
								<li>用户名：sl19931003</li>
								<li>级&nbsp;别：普通会员</li>
							</ul>
						</div>
						<div class="login_btnbox">
							<a href="#" class="login_order">我的订单</a>
							<a href="#" class="login_favorite">我的收藏</a>
						</div>
						<i class="icon_arrow_white"></i>
					</div>
				</li>
				<li id="shopCart">
					<a href="#" class="message_list" ><i class="message"></i><div class="span">购物车</div><span class="cart_num">0</span></a>
				</li>
				<li>
					<a href="#" class="history_list"><i class="view"></i></a>
					<div class="mp_tooltip" style=" visibility:hidden;">我的资产<i class="icon_arrow_right_black"></i></div>
				</li>
				<li>
					<a href="#" class="mpbtn_histroy"><i class="zuji"></i></a>
					<div class="mp_tooltip">我的足迹<i class="icon_arrow_right_black"></i></div>
				</li>
				<li>
					<a href="#" class="mpbtn_wdsc"><i class="wdsc"></i></a>
					<div class="mp_tooltip">我的收藏<i class="icon_arrow_right_black"></i></div>
				</li>
				<li>
					<a href="#" class="mpbtn_recharge"><i class="chongzhi"></i></a>
					<div class="mp_tooltip">我要充值<i class="icon_arrow_right_black"></i></div>
				</li>
			</div>
			<div class="quick_toggle">
				<li>
					<a href="#"><i class="kfzx"></i></a>
					<div class="mp_tooltip">客服中心<i class="icon_arrow_right_black"></i></div>
				</li>
				<li>
					<a href="#none"><i class="mpbtn_qrcode"></i></a>
					<div class="mp_qrcode" style="display:none;"><img src="images/weixin_code_145.png" width="148" height="175" /><i class="icon_arrow_white"></i></div>
				</li>
				<li><a href="#top" class="return_top"><i class="top"></i></a></li>
			</div>
		</div>
		<div id="quick_links_pop" class="quick_links_pop hide"></div>
	</div>
</div>