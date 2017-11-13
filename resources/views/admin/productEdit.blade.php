@extends('admin.master')

@section('after-css')
    <link href="{{asset('admin/css/fileinput.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/file-upload/themes/explorer-fa/theme.min.css') }}" rel="stylesheet" type="text/css" />
  
@endsection



@section('content')
<div class="col">
    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">商品管理</h1>
    </div>
    <div class="wrapper-md">
    <div class="panel panel-default">
        <div class="panel-heading font-bold">添加商品</div>
        <div class="panel-body">
        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{Request::is('*create')?route('product.store'):route('product.update',$product->id)}}" role="form" data-toggle="validator">
              <div class="box-body">
              <div class="form-group">
                  <label name="name" class="col-sm-2 control-label">名称</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value="{{isset($product->name)?$product->name:''}}" class="form-control"  placeholder="商品名" required>
                  </div>
                </div>
                    

                <div class="form-group">
                  <label name="sku" class="col-sm-2 control-label">SKU</label>
                  <div class="col-sm-10">
                    <input type="text" name="sku" value="{{isset($product->sku)?$product->sku:''}}" pattern="^[_A-z0-9]{1,}$" class="form-control"  placeholder="SKU" required>
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">目录</label>
                    <div class="col-sm-10">

                        <select id="cats"  class="form-control" name="category_id">
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
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">品牌</label>
                  <div class="col-sm-10">
                      @foreach($brands as $brand)
                      <div class="radio col-sm-3">
                        <label class="i-checks">
                          <input type="radio" name="brand_id" value="{{$brand->id}}" >
                          <i></i>
                            {{$brand->name}}
                        </label>
                      </div>
                      @endforeach

                  </div>
                </div>

               <div class="form-group">
                  <label class="col-sm-2 control-label">属性</label>
                  <div class="col-sm-10">

                        <table class="table table-bordered">
                          <thead>
                            <tr>
                          
                              <th>属性名</th>
                              <th>名称</th>
                              <th>排序</th>
                              <th>数量</th>
                              <th>动作</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th >尺寸</th>
                              <td>中</td>
                              <td>1</td>
                              <td>1</td>
                              <td>
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">增加</button>
                    <button type="button" class="btn btn-info btn-xs"><a href="http://shop.ash/product/1/edit">编辑</a></button>
                    <button type="button" class="btn btn-danger btn-xs"><a href="http://shop.ash/product/1/delete">删除</a></button>
                  </td>

                          </tbody>

                        </table>
                       


                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">价格</label>
                  <div class="col-sm-10">
                    <input type="text"  name="price" value="{{isset($product->price)?$product->price:''}}" pattern="^[0-9]{1,}$" class="form-control"  placeholder="价格" required>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 control-label">浏览次数</label>
                  <div class="col-sm-10">
                    <input type="text"  name="preview" value="{{isset($product->preview)?$product->preview:''}}" pattern="^[0-9]{1,}$" class="form-control"  placeholder="浏览次数" >
                  </div>
                </div>
                   <div class="form-group">
                  <label class="col-sm-2 control-label">位置</label>
                  <div class="col-sm-10">
                    <input type="text"  name="position" value="{{isset($product->position)?$product->position:''}}" pattern="^[0-9]{1,}$" class="form-control"  placeholder="位置" >
                  </div>
                  </div>
                <div class="form-group">
                  <label name="img" class="col-sm-2 control-label">产品图</label>
                  <div class="col-sm-10">
                    <input type="file"  class="file" id="img_url" name="image_data"  accept="image/*" multiple>
  
                  </div>
                 <!--  <div class="col-sm-6">
                    <input type="file"  class="file" id="img_url" name="image_data[]"  accept="image/*" multiple>
  
                  </div> -->
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">详细内容</label>
                  <div class="col-sm-10">
                  <textarea name="content" value="{{isset($product->content)?$product->content:''}}" class="form-control" rows="3" placeholder="产品详细 ..."></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label name="title" class="col-sm-2 control-label">标题</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" value="{{isset($product->title)?$product->title:''}}" class="form-control"  placeholder="页面标题">
                  </div>
                </div>
                <div class="form-group">
                  <label name="keywords" class="col-sm-2 control-label">关键词</label>
                  <div class="col-sm-10">
                    <input type="text" name="keywords" value="{{isset($product->keywords)?$product->keywords:''}}" class="form-control"  placeholder="页面关键词">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">描述</label>
                  <div class="col-sm-10">
                  <textarea name="description" value="{{isset($product->description)?$product->description:''}}" class="form-control" rows="3" placeholder="页面描述 ..."></textarea>
                  </div>
                </div>
                
              <div class="form-group">
                  <label class="col-sm-2 control-label">是否上架</label>
                  <div class="radio col-sm-10">
                    <label>
                      <input type="radio" name="active" id="optionsRadios1" value="1" checked="">
                      上架
                    </label>
                    <label>
                      <input type="radio" name="active" id="optionsRadios2" value="0">
                      下架
                    </label>
                  </div>
                </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="{{Request::is('*create')?'POST': 'PUT' }}">
              <input type="hidden" name="id" value="{{isset($product->id)?$product->id:''}}">
                
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer ">
              <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-success">更新产品</button>
                <button  class="btn btn-info ">发布并新增</button>
                </div>
              </div>
              <!-- /.box-footer -->
            </form></div>
      </div>
    </div>
  </div>


                  <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">添加属性</h4>
                          </div>
                          <div class="modal-body">

                            <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                  
                                      <th>属性名</th>
                                      <th>名称</th>
                                      <th>排序</th>
                                      <th>数量</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th><input type="text" name="sku" value=""  class="form-control" placeholder="SKU" required=""></th>
                                      <td><input type="text" name="sku" value=""  class="form-control" placeholder="SKU" required=""></td>
                                      <td><input type="text" name="sku" value=""  class="form-control" placeholder="SKU" required=""></td>
                                      <td><input type="text" name="sku" value=""  class="form-control" placeholder="SKU" required=""></td>
                            

                                  </tr></tbody>

                        </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button type="button" class="btn btn-success">添加</button>
                          </div>
                        </div>
                      </div>
                    </div>
@endsection
    

@section('after-js')
  <script src="{{asset('admin/file-upload/js/plugins/sortable.min.js') }}" ></script>
  <script src="{{asset('admin/file-upload/js/plugins/purify.min.js') }}" ></script>

  <script src="{{asset('admin/file-upload/js/fileinput.js') }}" ></script>
  <script src="{{asset('admin/file-upload/js/locales/zh.js') }}" ></script>
  <script src="{{asset('admin/file-upload/themes/explorer-fa/theme.js') }}" ></script>

  <script>
  $("#img_url").fileinput({
            theme: 'explorer-fa',
            uploadUrl: '{{route('image.upload')}}',
            allowedFileExtensions : ['jpg', 'png','gif'],
            overwriteInitial: false,
            initialPreviewAsData: true,
            maxFileSize: 190,
            showUpload: true,
            uploadExtraData: { '_token':'{{csrf_token()}}' }, 
            initialPreview: [
                "http://lorempixel.com/1920/1080/nature/1"
            ],
            initialPreviewConfig: [
                {caption: "nature-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1}
             
            ]
        });


    // $("#img_url").fileinput({
    //     language : 'zh',
    //     uploadUrl: '{{route('image.upload')}}', // you must set a valid URL here else you will get an error
    //     allowedFileExtensions : ['jpg', 'png','gif'],
    //     overwriteInitial: false,
    //     maxFileSize: 190,
    //     showUpload: true,
    //     uploadExtraData: { '_token':'{{csrf_token()}}' },  
    //     //allowedFileTypes: ['image', 'video', 'flash'],
    //     slugCallback: function(filename) {
    //        // return filename.replace('(', '_').replace(']', '_');
    //     }
    // });


    $("#img_url").on("fileuploaded", function (event, data, previewId, index) {
     //！！！我个人使用的时候！！！返回值必须为json格式
     //我在后台程序 单纯的返回了  json_encode('/storage/img/3142353534.jpg')
     //但是在这里仍然需要使用data.response获取图片地址
     // alert(data.response);
      $('#image').val($('#image').val()  + data.response);
    });



  </script>
@endsection 

