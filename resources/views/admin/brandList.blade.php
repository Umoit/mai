@extends('admin.global')


@section('after-css')

@endsection



@section('content')

     <div class="col">
    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3 ">商品管理</h1>
    </div>
    <div class="wrapper-md">
   

    <div class="row">
      <div class="col-xs-12 col-md-4">

        <div class="panel panel-default">
        <div class="panel-heading ">添加品牌</div>
        <div class="panel-body">
          <form class="form-horizontal"  action="{{route('brand.store')}}" method="post" role="form">
            <div class="form-group">
                <label class="col-sm-3 control-label">名称</label>
                <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" placeholder="目录名称">
                    <p class="help-block">这将是它在站点上显示的名字。</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">别名</label>
                <div class="col-sm-9">
                <input type="text" name="url_name" class="form-control" placeholder="目录url名称">
                <p class="help-block">“别名”是在URL中使用的别称，它可以令URL更美观。通常使用小写，只能包含字母，数字和连字符（-）。</p>
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
                      <th>名字</th>
                      <th>URL</th>
                      <th>上级</th>
                      <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($brands as $brand)

                      <tr>
                      <td>{{$brand->id}}</td>
                      <td>{{$brand->name}}</td>
                      <td>{{$brand->url_name}}</td>
                      <td>{{$brand->url_name}}</td>
                      <td>
                        <button type="button" class="btn btn-success btn-xs"><a href="{{route('brand.show',$brand->id)}}">查看</a></button>
                        <button type="button" class="btn btn-info btn-xs"><a href="{{route('brand.edit',$brand->id)}}">编辑</a></button>
                        <button type="button" class="btn btn-danger btn-xs"><a href="{{route('brand.show',$brand->id)}}">删除</a></button>
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







