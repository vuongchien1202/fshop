@extends('layouts.master')
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">   
        <!-- danh muc dien thoai -->
        <h3 style="font-family:Arial, Helvetica, sans-serif">
          <a class="fs-hotit" href="#" target="_blank" style="color:#000">ĐIỆN THOẠI KHUYẾN MẠI HOT</a>
          <a href="/dien-thoai" class="pull-right" title="Điện thoại" style="color: #2965a8; font-size: 16px">Xem tất cả</a>
        </h3>
        @foreach($mobile as $row)        
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">
            <div class="thumbnail mobile">              
              <div class="bt">
                <div class="image-m pull-left">
                  <img class="img-responsive" src="{{asset('uploads/products/'.$row->images)}}" alt="img responsive">
                </div>
                <div class="intro pull-right">
                  <h1 style="margin-top:3px; line-height: 0.5 "><small class="title-mobile">{!!$row->name!!}</small></h1>
                  <li>{!!$row->intro!!}</li>
                  <span class="label label-info">Khuyễn mãi</span>   
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo1!!}</li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo2!!}</li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo3!!}</li> 
                </div><!-- /div introl -->
              </div> <!-- /div bt -->
              <div class="ct">
                <a href="{!!url('mobile/'.$row->id.'-'.$row->slug)!!}" title="Xem chi tiết">
                  <span class="label label-info">Ưu đãi khi mua</span>   
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo1!!}</li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo2!!}</li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo3!!}</li>
                  <span class="label label-warning">Cấu Hình Nổi bật</span> 
                  <li><strong>CPU</strong> : <i> {!!$row->cpu!!}</i></li>
                  <li><strong>Màn Hình</strong> : <i>{!!$row->screen!!} </i></li> 
                  <li><strong>Camera</strong> : Trước  <i>{!!$row->cam1!!}</i> Sau <i>{!!$row->cam2!!} </i></li> 
                  <li><strong>HĐH</strong> :<i> {!!$row->os!!} </i> <strong> Bộ nhớ trong</strong> :<i> {!!$row->storage!!} </i></li> 
                  <li><strong>Pin</strong> :<i> {!!$row->pin!!}</i></li>
                </a>
              </div>
                <span class="btn label-warning btn-price"><strong>{!!$row->price!!}</strong> Đ </span>
                <a href="{!!url('gio-hang/addcart/'.$row->id)!!}" class="btn btn-buy_ins pull-right add">Thêm vào giỏ </a>
            </div> <!-- / div thumbnail -->
          </div>  <!-- /div col-4 -->
          @endforeach
          <!-- danh muc dien thoai -->
       
          <div class="clearfix">            
          </div>

        <!--========================== phan danh muc laptop   =========================================  -->
          <div id="laptop"></div>
          <h3 style="font-family:Arial, Helvetica, sans-serif">
              <a class="fs-hotit" href="#" target="_blank" style="color:#000">LAPTOP BÁN CHẠY</a>
              <a href="/dien-thoai" class="pull-right" title="Điện thoại" style="color: #2965a8; font-size: 16px">Xem tất cả</a>
          </h3>
          @foreach($laptop as $row)
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding" >
            <div class="thumbnail">          
              <div class="hienthi">
                <img class="img-responsive" src="{!!url('uploads/products/'.$row->images)!!}" alt="img responsive">
                <div class="caption">
                  <h1 style="font-size: 26px;"><small><strong class="title-pro">{!!$row->name!!}</strong></small></h1>
                  <p>    
                      <li><i>{!!$row->intro!!}</i></li>             
                      <span class="label label-info ">Ưu đãi khi mua</span>
                      <li><span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo1!!}</li> 
                      <li> <span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo2!!}</li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo3!!}</li>
                  </p>
                  <p>
                    <span class="btn label-warning btn-price">Giá : <strong>{!!$row->price!!}</strong> Đ </span>
                  </p>
                </div>
              </div>
              <div class="tomtat">
                <div class="thongtin">
                  <a href="{!!url('laptop/'.$row->id.'-'.$row->slug)!!}" title="Xem chi tiết">
                    <span class="label label-info ">Ưu đãi khi mua</span>   
                    <li><span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo1!!}</li> 
                    <li><span class="glyphicon glyphicon-hand-right"></span> T{!!$row->promo2!!}</li> 
                    <li><span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo3!!}</li>
                    <span class="label label-warning">Cấu Hình Nổi bật</span> 
                    <li><strong>CPU</strong> : <i>{!!$row->cpu!!}</i></li>
                    <li><strong>RAM </strong> : <i>{!!$row->ram!!}</i></li>
                    <li><strong>Lưu Trữ</strong> : <i> {!!$row->storage!!}</i></li>
                    <li><strong>Màn Hình</strong> : <i> {!!$row->screen!!} </i></li> 
                    <li><strong>VGA</strong> : <i> {!!$row->vga!!}</i></li> 
                    <li><strong>HĐH</strong> :<i> {!!$row->os!!}</i></li> 
                    <li><strong>Pin</strong> :<i> {!!$row->pin!!}</i></li>
                  </a>
                </div>                
                  <div class="price">  
                    <span class="btn btn-block btn-price">Giá : <strong>{!!$row->price!!}</strong> Đ</span>   
                    <a href="{!!url('gio-hang/addcart/'.$row->id)!!}" class="btn btn-buy_ins btn-block">Thêm vào giỏ</a> 
                  </div>                  
              </div> 
            </div>
          </div>
        @endforeach
        <div class="clearfix">
          
        </div>
          <a href="http://api.hostinger.vn/redir/1309904" target="_blank"> 
            <img src="{{asset('images/slides/thumbs/qc.jpg')}}" alt="" border="0" width="100%" height="250" />
          </a>
<!-- =============== danh muc may tinh ===================================== -->
        <div id="pc"></div>
        <h3 style="font-family:Arial, Helvetica, sans-serif">
            <a class="fs-hotit" href="#" target="_blank" style="color:#000">CASE CẤU HÌNH CAO</a>
            <a href="/dien-thoai" class="pull-right" title="Điện thoại" style="color: #2965a8; font-size: 16px">Xem tất cả</a>
        </h3>
        @foreach($pc as $row)
           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
            <div class="thumbnail pc">              
              <div class="bt">
                <div class="image-m pull-left">
                  <img class="img-responsive" src="{!!url('uploads/products/'.$row->images)!!}" alt="img responsive">
                </div>
                <div class="intro pull-right">
                  <h1 style="margin-top:3px; line-height: 0.5"><small class="title-pc">{!!$row->name!!}</small></h1>
                  <li> CPU: {!!$row->cpu!!}</li>
                  <li> RAM :{!!$row->ram!!}</li>
                  <li>HDD : {!!$row->storage!!} </li>
                  <span class="label label-info">Khuyễn mãi</span>   
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo1!!}</li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo2!!} </li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> {!!$row->promo3!!} </li> 
                </div><!-- /div introl -->
              </div> <!-- /div bt -->
              <div class="ct">
                <a href="{!!url('pc/'.$row->id.'-'.$row->slug)!!}" title="Xem chi tiết">                   
                  <span class="label label-warning">Cấu hình chi tiết</span> 
                  <li><strong>CPU</strong> : <i>  {!!$row->cpu!!}</i></li>
                  <li><strong>HDD</strong> : T<i> {!!$row->storage!!}</i></li> 
                  <li><strong>HĐH</strong> :<i{!!$row->os!!}  </i> - <strong>RAM </strong> :<i>{!!$row->ram!!}</i></li> 
                  <li><strong>VGA - DVD</strong> :<i> {!!$row->vga!!}</i></li>
                  <li><strong>Kết nối</strong> : <i> {!!$row->connect!!}</i></li> 
                </a>
              </div>
                <span class="btn label-warning btn-price">Giá : <strong>{!!$row->price!!}</strong> Đ </span>
                <a href="{!!url('gio-hang/addcart/'.$row->id)!!}" class="btn btn-buy_ins pull-right add">Thêm vào giỏ </a>
            </div> <!-- / div thumbnail -->
          </div>  <!-- /div col-4 item products -->
        @endforeach      

        </div> <!-- /col 12 -->     
@endsection
