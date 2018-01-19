@extends('layouts.new-master') @section('content')
<div class="container">
    <div class="row">
      <h3 class="panel-title">
        <span class="glyphicon glyphicon-home"><a href="#" title=""> Home</a></span> 
        <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span><a href="#" title=""> Tin Tức </a>
        <!--   <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title=""> noi dung con</a> -->
      </h3>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <section class="slider hidden-xs">
                <div class="flexslider">
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 1800%; transition-duration: 0.6s; transform: translate3d(-10647px, 0px, 0px);">
                            <li class="clone" aria-hidden="true" style="width: 1521px; float: left; display: block;">
                                <a href="/custom">
                                    <img src="{{asset('images/slides/slider1.gif')}}" alt="Custom" draggable="false">
                                </a>
                            </li>
                            <li style="width: 1521px; float: left; display: block;" class="">
                                <a href="/image-enhancement">
                                    <img src="{{asset('images/slides/slider2.png')}}" alt="Image Enhancement" draggable="false">
                                </a>
                            </li>
                            <li style="width: 1521px; float: left; display: block;" class="">
                                <a href="/floor-plans">
                                    <img src="{{asset('images/slides/slider3.png')}}" alt="Floor Plan – before and after" draggable="false">
                                </a>
                            </li>
                            <li style="width: 1521px; float: left; display: block;" class="">
                                <a href="/virtual-furniture">
                                    <img src="{{asset('images/slides/slider4.png')}}" alt="Virtual Furniture" draggable="false">
                                </a>
                            </li>
                            <li style="width: 1521px; float: left; display: block;" class="">
                                <a href="/day-to-dusk">
                                    <img src="{{asset('images/slides/slider5.jpg')}}" alt="Day to Dusk" draggable="false">
                                </a>
                            </li>
                            <li style="width: 1521px; float: left; display: block;" class="">
                                <a href="/background-removal">
                                    <img src="{{asset('images/slides/slider6.png')}}" alt="Background Removal" draggable="false">
                                </a>
                            </li>
                            <li style="width: 1521px; float: left; display: block;" class="">
                                <a href="/3d-renders">
                                    <img src="{{asset('images/slides/slider7.jpg')}}" alt="3D Renders" draggable="false">
                                </a>
                            </li>
                            <li style="width: 1521px; float: left; display: block;" class="flex-active-slide">
                                <a href="/custom">
                                    <img src="{{asset('images/slides/slider8.png')}}" alt="Custom" draggable="false">
                                </a>
                            </li>
                            <li style="width: 1521px; float: left; display: block;" class="clone" aria-hidden="true">
                                <a href="/image-enhancement">
                                    <img src="{{asset('images/slides/slider.jpg')}}" alt="Image Enhancement" draggable="false">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
          </section>
          <div class="panel panel-default">
              <div class="panel-body">
                  <div class="row">
                      <!-- hot new content -->
                      <div class="col-lg-6">
                          <img src="{!!url('uploads/news/'.$hot1->images)!!}" alt="" height="200" width="100%">
                          <h3 class="title-h3"><a href="{!!url('tin-tuc/'.$hot1->id.'-'.$hot1->slug)!!}" title="">{!!$hot1->title!!} </a></h3>
                          <p class="summary-content">
                              {!!$hot1->intro!!}
                          </p>
                      </div>
                      <div class="col-lg-6 no-padding">
                          <div class="row">
                              @foreach($data as $row)
                              <div class="col-lg-12 ">
                                  <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}">{!!$row->title!!}</a></h4>
                                  <div class="col-lg-8 no-padding">
                                      {!!$row->intro!!}
                                  </div>
                                  <div class="col-lg-4">
                                      <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title=""><img src="{!!url('uploads/news/'.$row->images)!!}" alt="" class="img-responsive"></a>
                                  </div>
                              </div>
                              @endforeach
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      @foreach($all as $row)
                      <div class="col-lg-12 no-padding">
                          <hr>
                          <div class="col-lg-3">
                              <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->slug!!}"><img src="{!!url('/uploads/news/'.$row->images)!!}" alt="" width="90%" height="99%"> </a>
                          </div>
                          <div class="col-lg-9">
                              <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="">{!!$row->title!!}</a></h4>
                              <p>
                                  {!!$row->intro!!}
                              </p>
                              <p><strong>Lúc :</strong> {!!$row->created_at!!} <strong>Bởi : </strong> <a href="#" title="admin"> {!!$row->author!!}</a></p>
                          </div>
                      </div>
                      @endforeach
                  </div>
                  <!-- /row -->
                  {!!$all->render()!!}
              </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <!-- panel inffo 1 -->
          <div class="panel panel-default">
              <ul class="nav nav-tabs">
                  <li class="active"><a href="#1" data-toggle="tab">Tin mới </a></li>
              </ul>
              <div class="panel-body">
                  <div class="tab-content">
                      <div class="tab-pane active" id="1">
                          <ul class="li-menu-tab">
                              <div class="row">
                                  @foreach($all as $row)
                                  <div class="col-lg-12 no-padding">
                                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">
                                          <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}"><img src="{!!url('uploads/news/'.$row->images)!!}" alt="{!!$row->images!!}" width="99%" height="99%"> </a>
                                      </div>
                                      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding">
                                          <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="">{!!$row->title!!}</a>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>
                          </ul>
                      </div>
                  </div>
                  <!-- /tab content -->
              </div>
              <!-- /panel boody -->
          </div>

          <!-- panel info 2  quản cáo 1          -->
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title text-center">Sự kiện HOT</h3>
              </div>
              <div class="panel-body no-padding">
                  <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc1.png')!!}" alt="" width="100%" height="100%"> </a>
                  <br>
                  <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc2.png')!!}" alt="" width="100%" height="100%"> </a>
                  <br>
                  <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc3.png')!!}" alt="" width="100%" height="100%"> </a>
                  <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc4.png')!!}" alt="" width="100%" height="100%"> </a>
                  <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc5.png')!!}" alt="" width="100%" height="100%"> </a>
              </div>
          </div>
          <!-- /panel info 2  quản cáo 1          -->
          <!-- fan pages myweb -->
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Fans Pages</h3>
              </div>
              <div class="panel-body">
                  Hãy <a href="#" title="">Like</a> facebook của Fshop để cập nhật tin mới nhất
              </div>
          </div>
          <!-- /fan pages myweb -->
      </div>
    </div>
</div>
<!-- ===================================================================================/news ============================== -->
@endsection