<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title>Html version | Angulr</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    <link rel="stylesheet" href="{{asset('admin/assets/animate.css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/assets/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/assets/simple-line-icons/css/simple-line-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/jquery/bootstrap/dist/css/bootstrap.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}/" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}" type="text/css" />

</head>
<body>
<div class="app app-header-fixed ">
  

  <div class="container w-xxl w-auto-xs" >
    <a href class="navbar-brand block m-t">Angulr</a>
    <div class="m-b-lg">
      <div class="wrapper text-center">
        <strong>Sign in to get in touch</strong>
      </div>
      <form name="form" action="{{route('admin.login')}}" method="post" class="form-validation">
        <div class="text-danger wrapper text-center" ng-show="authError">
            
        </div>
        <div class="list-group list-group-sm">
          <div class="list-group-item">
            <input type="email" placeholder="邮件地址"  name="email" class="form-control no-border"  required>
          </div>
          <div class="list-group-item">
             <input type="password" placeholder="密码" name="password" class="form-control no-border"  required>
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block" >登陆</button>
        <div class="text-center m-t m-b"><a ui-sref="access.forgotpwd">忘记密码?</a></div>
        <div class="line line-dashed"></div>
        <p class="text-center"><small>Do not have an account?</small></p>
        <a class="btn btn-lg btn-default btn-block">Create an account</a>
      </form>
    </div>
    <div class="text-center" ng-include="'tpl/blocks/page_footer.html'">
      <p>
    <small class="text-muted">Web app framework base on Bootstrap and AngularJS<br>&copy; 2014</small>
  </p>
    </div>
  </div>


</div>



</body>
</html>
