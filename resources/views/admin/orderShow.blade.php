@extends('admin.global')




@section('content')
<style type="text/css">
  Main Components 

-------------------------------- */
.cd-horizontal-timeline {
  opacity: 0;
  margin: 2em auto;
  -webkit-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  transition: opacity 0.2s;
}

.cd-horizontal-timeline.loaded {
  /* show the timeline after events position has been set (using JavaScript) */
  opacity: 1;
}
.cd-horizontal-timeline .timeline {
  position: relative;
  height: 100px;
  width: 90%;
  max-width: 800px;
  margin: 0 auto;
}
.cd-horizontal-timeline .events-wrapper {
  position: relative;
  height: 100%;
  margin: 0 40px;
  overflow: hidden;
}

.cd-horizontal-timeline .events {
  /* this is the grey line/timeline */
  position: absolute;
  z-index: 1;
  left: 0;
  top: 49px;
  height: 2px;
  /* width will be set using JavaScript */
  background: #dfdfdf;
  -webkit-transition: -webkit-transform 0.4s;
  -moz-transition: -moz-transform 0.4s;
  transition: transform 0.4s;
}
.cd-horizontal-timeline .filling-line {
  /* this is used to create the green line filling the timeline */
  position: absolute;
  z-index: 1;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: #7b9d6f;
  -webkit-transform: scaleX(0);
  -moz-transform: scaleX(0);
  -ms-transform: scaleX(0);
  -o-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transform-origin: left center;
  -moz-transform-origin: left center;
  -ms-transform-origin: left center;
  -o-transform-origin: left center;
  transform-origin: left center;
  -webkit-transition: -webkit-transform 0.3s;
  -moz-transition: -moz-transform 0.3s;
  transition: transform 0.3s;
}
.cd-horizontal-timeline .events a {
  position: absolute;
  bottom: 0;
  z-index: 2;
  text-align: center;
  font-size: 1.3rem;
  padding-bottom: 15px;
  color: #383838;
  /* fix bug on Safari - text flickering while timeline translates */
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
}
.cd-horizontal-timeline .events a::after {
  /* this is used to create the event spot */
  content: '';
  position: absolute;
  left: 50%;
  right: auto;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  bottom: -5px;
  height: 12px;
  width: 12px;
  border-radius: 50%;
  border: 2px solid #dfdfdf;
  background-color: #f8f8f8;
  -webkit-transition: background-color 0.3s, border-color 0.3s;
  -moz-transition: background-color 0.3s, border-color 0.3s;
  transition: background-color 0.3s, border-color 0.3s;
}
.no-touch .cd-horizontal-timeline .events a:hover::after {
  background-color: #7b9d6f;
  border-color: #7b9d6f;
}
.cd-horizontal-timeline .events a.selected {
  pointer-events: none;
}
.cd-horizontal-timeline .events a.selected::after {
  background-color: #7b9d6f;
  border-color: #7b9d6f;
}
.cd-horizontal-timeline .events a.older-event::after {
  border-color: #7b9d6f;
}




</style>
      

<div class="bg-light lter b-b wrapper-md hidden-print">
  <a href="" class="btn btn-sm btn-info pull-right" onclick="window.print();">Print</a>
  <h1 class="m-n font-thin h3">订单详情</h1>
</div>
<div class="wrapper-md">
  <div>
    <section class="cd-horizontal-timeline loaded">
      <p class="m-t m-b">订单日期: <strong>26th Mar 2013</strong><br>
        订单状态: <span class="label bg-success">Shipped</span><br>
        订单号码: <strong>#9399034</strong>
    </p>
            <div class="timeline">
                <div class="events-wrapper">
                    <div class="events" style="width: 1800px; transform: translateX(-981.767px);">
                        <ol>
                            
                            <li><a href="#0" data-date="15/09/2014" style="left: 1000px;" class="selected"><button class="btn m-b-xs w-xs btn-success">生产订单</button></a></li>
                            <li><a href="#0" data-date="01/11/2014" style="left: 1200px;" class="selected"><button class="btn m-b-xs w-xs btn-success">完成付款</button></a></li>
                            <li><a href="#0" data-date="10/12/2014" style="left: 1400px;" class="selected"><button class="btn m-b-xs w-xs btn-success">商家发货</button></a></li>
                            <li><a href="#0" data-date="19/01/2015" style="left: 1600px;"><button class="btn m-b-xs w-xs btn-default">确认收货</button></a></li>
                        </ol>
                        <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.778016);"></span>
                    </div>
                </div>
               
            </div>

        </section>

    <div class="well m-t bg-light lt">
      <div class="row">
        <div class="col-xs-6">
          <strong>购买信息</strong>
          <h4>John Smith</h4>
          <p>
            2nd Floor<br>
            St John Street, Aberdeenshire 2541<br>
            United Kingdom<br>
            Phone: 031-432-678<br>
            Email: youemail@gmail.com<br>
          </p>
        </div>
        <div class="col-xs-6">
          <strong>SHIP TO:</strong>
          <h4>John Smith</h4>
          <p>
            2nd Floor<br>
            St John Street, Aberdeenshire 2541<br>
            United Kingdom<br>
            Phone: 031-432-678<br>
            Email: youemail@gmail.com<br>
          </p>
        </div>
      </div>
    </div>
    
    <div class="line"></div>
    <table class="table table-striped bg-white b-a">
      <thead>
        <tr>
          <th style="width: 60px">QTY</th>
          <th>DESCRIPTION</th>
          <th style="width: 140px">UNIT PRICE</th>
          <th style="width: 90px">TOTAL</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>iPhone 5 32GB White &amp; Silver (GSM) Unlocked</td>
          <td>$749.00</td>
          <td>$749.00</td>
        </tr>
        <tr>
          <td>2</td>
          <td>iPad mini with Wi-Fi 32GB - White &amp; Silver</td>
          <td>$429.00</td>
          <td>$858.00</td>
        </tr>
        <tr>
          <td colspan="3" class="text-right"><strong>Subtotal</strong></td>
          <td>$1607.00</td>
        </tr>
        <tr>
          <td colspan="3" class="text-right no-border"><strong>Shipping</strong></td>
          <td>$0.00</td>
        </tr>
        <tr>
          <td colspan="3" class="text-right no-border"><strong>VAT Included in Total</strong></td>
          <td>$0.00</td>
        </tr>
        <tr>
          <td colspan="3" class="text-right no-border"><strong>Total</strong></td>
          <td><strong>$1607.00</strong></td>
        </tr>
      </tbody>
    </table>              
  </div>
</div>




@endsection
    



