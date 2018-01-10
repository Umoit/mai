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
        <div class="panel-heading ">添加产品分类</div>
        <div class="panel-body">
          <form class="form-horizontal"  action="{{route('category.store')}}" method="post" role="form">
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
                <label class="col-sm-3 control-label">父节点</label>
                <div class="col-sm-9">
                    <select  name="parent_id" class="form-control"  >
                        <option value="0">顶级</option>
                        @foreach($categories as $category)
                        @if($category->parent_id == 0)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                            @foreach($category->subcats as $subcat)
                            <option value="{{$subcat->id}}">&nbsp;&nbsp;-{{$subcat->name}}</option>
                            @endforeach
                        @endif
                        @endforeach
                    </select>
                    
                <p class="help-block">分类目录和标签不同，它可以有层级关系。您可以有一个“音乐”分类目录，在这个目录下可以有叫做“流行”和“古典”的子目录。</p>

                </div>

            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-success">添加新分类</button>
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
            分类列表
          </div>
        <div class="table-responsive">

          <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>名字</th>
                      <th>URL</th>
                      <th>上级</th>
                      <th>产品数</th>
                      <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)

                      <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>{{$category->url_name}}</td>
                      <td>{{$category->parent_id}}</td>
                      <td>{{$category->parent_id}}</td>
                      <td>
                        <button type="button" class="btn btn-success btn-xs"><a href="{{route('category.show',$category->id)}}">查看</a></button>
                        <button type="button" class="btn btn-info btn-xs"><a href="{{route('category.edit',$category->id)}}">编辑</a></button>
                        <button type="button" class="btn btn-danger btn-xs"><a href="{{route('category.show',$category->id)}}">删除</a></button>
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







