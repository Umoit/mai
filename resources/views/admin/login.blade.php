@extends('admin.master')


@section('content')

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">登录商城后台</p>

    <form action="/admin/login" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="邮件地址">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="密码">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
           <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> 记住登录
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" value="登录" class="btn btn-primary btn-block btn-flat">
        </div>
        <!-- /.col -->
      </div>
    </form>

    

    <a href="#">忘记密码</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection
