@extends('backend.master')


@section('after-css')
    <link href="{{ URL::asset('/') }}backend/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

@endsection



@section('content')

     <div class="col">
    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3 ">网站模块</h1>
    </div>
    <div class="wrapper-md">
   

    <div class="row">
      <div class="col-xs-12 col-md-4">

        <div class="panel panel-default">
        <div class="panel-heading ">添加菜单</div>
        <div class="panel-body">
          <form class="form-horizontal"  action="{{route('menu.store')}}" method="post" role="form">
            <div class="form-group">
                <label class="col-sm-3 control-label">名称</label>
                <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" placeholder="菜单名字">
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-3 control-label">位置</label>
                <div class="col-sm-9">
                <input type="text" name="position" class="form-control" placeholder="菜单位置识别,例如:主菜单">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">链接</label>
                <div class="col-sm-9">
                <input type="text" name="link" class="form-control" placeholder="网站连接,带http://">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">描述</label>
                <div class="col-sm-9">
                <input type="text" name="description" class="form-control" placeholder="菜单描述,菜单简单介绍">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">排序</label>
                <div class="col-sm-9">
                <input type="text" name="sort" class="form-control" placeholder="0表示排第一,以此类推">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-success">添加品牌</button>
                    <button type="reset" class="btn btn-default">重置</button>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

        </form>
        </div>
      </div>


        
      </div>
      <div class="col-xs-12 col-md-8">
        <div class="panel panel-default">

             <div class="panel-heading">
            品牌列表
          </div>
        <div class="table-responsive">

          <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>位置</th>
                      <th>名字</th>
                      <th>链接</th>
                      <th>排序</th>
                      <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($menus as $menu)

                      <tr>
                      <td>{{$menu->id}}</td>
                      <td>{{$menu->position}}</td>
                      <td>{{$menu->name}}</td>
                      <td>{{$menu->link}}</td>
                      <td>{{$menu->sort}}</td>
                      <td>
                       
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                   
                  </table>
        </div>  

      </div>
    </div>
    </div>

    
</div>

</div>



      
@endsection
 
  

@section('after-js')
  <script src="{{ URL::asset('/') }}backend/plugins/datatables/jquery.dataTables.min.js" ></script>
  <script src="{{ URL::asset('/') }}backend/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script>

    $(function () {
      $("#example1").DataTable();
     
    });

  </script>
@endsection 







