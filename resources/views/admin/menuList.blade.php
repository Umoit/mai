@extends('admin.global')


@section('after-css')

@endsection



@section('content')

     <div class="col">
    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3 ">菜单管理</h1>
    </div>
    <div class="wrapper-md">
   

    <div class="row">
      <div class="col-xs-12 col-md-12">

        <div class="panel panel-default">
        <div class="panel-heading ">添加菜单</div>
        <div class="panel-body">
          <form class="form-horizontal"  action="{{route('menu.store')}}" method="post" role="form">
            <div class="form-group col-md-4">
                <label class="col-sm-3 control-label">名称</label>
                <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" placeholder="菜单名称">
                    <p class="help-block">这将是它在站点上显示的名字。</p>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label class="col-sm-3 control-label">URL</label>
                <div class="col-sm-9">
                <input type="text" name="url" class="form-control" placeholder="https://xxx">
                <p class="help-block">例如 http://baidu.com/</p>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label class="col-sm-3 control-label">父菜单</label>
                <div class="col-sm-9">
                    <select  name="parent_id" class="form-control"  >
                        <option value="0">顶级</option>
                        @foreach($menus as $menu)
                        @if($menu->parent_id == 0)
                        <option value="{{$menu->id}}">{{$menu->name}}</option>
                            @foreach($menu->subMenus as $submenu)
                            <option value="{{$submenu->id}}">&nbsp;&nbsp;-{{$submenu->name}}</option>
                            @endforeach
                        @endif
                        @endforeach
                    </select>
                    
                <p class="help-block">表示菜单的层级关系。</p>

                </div>

            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-success">添加菜单</button>
                    <button type="reset" class="btn btn-default">重置</button>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

        </form>
        </div>
      </div>


        
      </div>

      @foreach($menus as $menu)
      <div class="col-xs-6 col-md-6">
        <div class="panel panel-default">

        <div class="panel-heading">{{$menu->name}}</div>
        <div class="table-responsive">

          <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>名称</th>
                      <th>URL</th>
                      <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                      
                            
                      <tr>
                      <td>{{$menu->id}}</td>
                      <td>{{$menu->name}}</td>
                      <td>{{$menu->url}}</td>
                      <td>
                        <button type="button" class="btn btn-success btn-xs"><a href="{{route('menu.show',$menu->id)}}">查看</a></button>
                        <button type="button" class="btn btn-info btn-xs"><a href="{{route('menu.edit',$menu->id)}}">编辑</a></button>
                        <button type="button" class="btn btn-danger btn-xs"><a href="{{route('menu.show',$menu->id)}}">删除</a></button>
                      </td>
                    </tr>


                        @foreach($menu->subMenus as $submenu)
                        <tr>
                        <td>{{$submenu->id}}</td>
                        <td>&nbsp;&nbsp;|—{{$submenu->name}}</td>
                        <td>{{$submenu->url}}</td>
                        <td>
                          <button type="button" class="btn btn-success btn-xs"><a href="{{route('menu.show',$submenu->id)}}">查看</a></button>
                          <button type="button" class="btn btn-info btn-xs"><a href="{{route('menu.edit',$menu->id)}}">编辑</a></button>
                          <button type="button" class="btn btn-danger btn-xs"><a href="{{route('menu.show',$submenu->id)}}">删除</a></button>
                        </td>
                      </tr>
                                @foreach($submenu->subMenus as $ssubmenu)

                                 <tr>
                                  <td>{{$ssubmenu->id}}</td>
                                  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|—{{$ssubmenu->name}}</td>
                                  <td>{{$ssubmenu->url}}</td>
                                  <td>
                                    <button type="button" class="btn btn-success btn-xs"><a href="{{route('menu.show',$ssubmenu->id)}}">查看</a></button>
                                    <button type="button" class="btn btn-info btn-xs"><a href="{{route('menu.edit',$ssubmenu->id)}}">编辑</a></button>
                                    <button type="button" class="btn btn-danger btn-xs"><a href="{{route('menu.show',$ssubmenu->id)}}">删除</a></button>
                                  </td>
                                </tr>
                                  @endforeach



                        @endforeach

                     
                      



                    </tbody>
                   
          </table>
          

        </div>  

      </div>
    </div>
    @endforeach
    </div>

    
</div>

</div>



      
@endsection
 
  

@section('after-js')

@endsection 







