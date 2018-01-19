@extends('layouts.new-master')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <!-- ===================================danh muc dien thoai ==================================-->
        @foreach($data as $row)
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
      <div class="clearfix">
        
      </div>
      <!-- ===================================================================================/products ============================== -->
      {!!$data->render();!!}
@endsection