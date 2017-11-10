@extends('admin.master')


@section('after-css')
    <link href="{{ URL::asset('/') }}backend/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  
  <link href="{{ URL::asset('/') }}backend/plugins/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet" type="text/css" />
  
@endsection



@section('content')

     <div class="col">
    <div class="bg-light lter b-b wrapper-md">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3">商品管理</h1>
        </div>
           <div class="col-sm-6 text-right hidden-xs">
          <a class="btn btn-success" href="{{route('product.create')}}">添加产品</a>
          <a class="btn btn-info " href="#">批量添加产品</a>
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>
      </div>
      </div>
    </div>
     
        <div class="wrapper-md">

        
        <div class="panel panel-default">
            <div class="panel-heading">
              Responsive Table
            </div>
            <div class="row wrapper">
              <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle">
                  <option value="0">Bulk action</option>
                  <option value="1">Delete selected</option>
                  <option value="2">Bulk edit</option>
                  <option value="3">Export</option>
                </select>
                <button class="btn btn-sm btn-default">Apply</button>                
              </div>
              <div class="col-sm-4">
              </div>
              <div class="col-sm-3">
                <div class="input-group">
                  <input type="text" class="input-sm form-control" placeholder="Search">
                  <span class="input-group-btn">
                    <button class="btn btn-sm btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped b-t b-light">
                <thead>
                  <tr>
                    <th style="width:20px;">
                      <label class="i-checks m-b-none">
                        <input type="checkbox"><i></i>
                      </label>
                    </th>
                    <th>Project</th>
                    <th>Task</th>
                    <th>Date</th>
                    <th style="width:30px;"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Idrawfast prototype design prototype design prototype design prototype design prototype design</td>
                    <td><span class="text-ellipsis">{item.PrHelpText1}</span></td>
                    <td><span class="text-ellipsis">{item.PrHelpText1}</span></td>
                    <td>
                      <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Formasa</td>
                    <td>8c</td>
                    <td>Jul 22, 2013</td>
                    <td>
                      <a href="" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Avatar system</td>
                    <td>15c</td>
                    <td>Jul 15, 2013</td>
                    <td>
                      <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Throwdown</td>
                    <td>4c</td>
                    <td>Jul 11, 2013</td>
                    <td>
                      <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Idrawfast</td>
                    <td>4c</td>
                    <td>Jul 7, 2013</td>
                    <td>
                      <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Formasa</td>
                    <td>8c</td>
                    <td>Jul 3, 2013</td>
                    <td>
                      <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Avatar system</td>
                    <td>15c</td>
                    <td>Jul 2, 2013</td>
                    <td>
                      <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Videodown</td>
                    <td>4c</td>
                    <td>Jul 1, 2013</td>
                    <td>
                      <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <footer class="panel-footer">
              <div class="row">
                <div class="col-sm-4 hidden-xs">
                  <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Bulk action</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk edit</option>
                    <option value="3">Export</option>
                  </select>
                  <button class="btn btn-sm btn-default">Apply</button>                  
                </div>
                <div class="col-sm-4 text-center">
                  <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-4 text-right text-center-xs">                
                  <ul class="pagination pagination-sm m-t-none m-b-none">
                    <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                  </ul>
                </div>
              </div>
            </footer>
          </div>
        
       
          <div class="panel panel-default">
            <div class="panel-heading">
              商品列表
            </div>
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>图片</th>
                          <th>SKU</th>
                          <th>产品名</th>
                          <th>价格</th>
                          <th>位置</th>
                          <th>更新时间</th>
                          <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)

                          <tr>
                          <td>{{$product->id}}</td>
                          <td><img src="{{ URL::asset('/').'app/'.strstr($product->img,";",true) }}" height="25"></td>
                          <td>{{$product->sku}}</td>
                          <td>{{$product->name}}</td>
                          <td>{{$product->price}}</td>
                          <td>{{$product->position}}</td>
                          <td>{{$product->updated_at}}</td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs"><a href="{{route('product.show',$product->id)}}">查看</a></button>
                            <button type="button" class="btn btn-info btn-xs"><a href="{{route('product.edit',$product->id)}}">编辑</a></button>
                            <button type="button" class="btn btn-danger btn-xs"><a href="{{route('product.delete',$product->id)}}">删除</a></button>
                          </td>
                        </tr>
                        @endforeach
                        </tbody>
                       
                      </table>
            </div>
          </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" id="bulkCreateProduct" class="form-horizontal" method="post" action="">
          

        
        <div class="form-group">
                  <label name="img" class="col-sm-2 control-label">产品图</label>
                  <div class="col-sm-10">
                    <input type="file"  class="file" id="img_url" name="excelfile"  accept="/*" multiple>
  
                  </div>
               
                </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary submit" >Save changes</button>
      </div>
    </div>
  </div>
</div>



      
@endsection
 
  

@section('after-js')
  <script src="{{ URL::asset('/') }}backend/plugins/datatables/jquery.dataTables.min.js" ></script>
  <script src="{{ URL::asset('/') }}backend/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script src="{{ URL::asset('/') }}backend/plugins/bootstrap-fileinput/js/fileinput.min.js" ></script>
  <script src="{{ URL::asset('/') }}backend/plugins/bootstrap-fileinput/js/locales/zh.js" ></script>


  <script>

    $(function () {
      $("#example1").DataTable();
     
    });

    $('.modal-footer .submit').click(function(){
      $("#bulkCreateProduct").submit();
    })



  </script>
@endsection 







