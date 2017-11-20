@extends('backend.global')


@section('after-css')
    <link href="{{ URL::asset('/') }}backend/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

@endsection



@section('content')

     <div class="col">
    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">订单管理</h1>
    </div>
    <div class="wrapper-md">
  <div class="panel panel-default">
    <div class="panel-heading">
      订单列表
    </div>
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>订单号</th>
                  <th>产品名</th>
                  <th>总价</th>
                  <th>付款方式</th>
                  <th>状态</th>
                  <th>下单时间</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)

                  <tr>
                  <td>{{$order->id}}</td>
                  <td>{{$order->order_no}}</td>
                  <td>{{$order->name}}</td>
                  <td>{{$order->total_price}}</td>
                  <td>{{$order->payway}}</td>
                  <td>{{$order->status}}</td>
                  <td>{{$order->created_at}}</td>
                  <td>
                    <button type="button" class="btn btn-success btn-xs"><a href="">详情</a></button>
                    <button type="button" class="btn btn-danger btn-xs"><a href="">删除</a></button>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
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
                </tfoot>
              </table>
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







