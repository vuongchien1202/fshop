@extends('layouts.new-master')
@section('content')
	<div class="container">
    <h3 class="panel-title">
      <span class="glyphicon glyphicon-home"><a href="#" title=""> Home</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span><a href="#" title=""> Tin Tức</a>
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title="">{!!$slug!!}</a>
    </h3>              
    <div class="">              
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
              <!-- hot new content -->
                <div class="col-lg-12">
                  <h3 class="title-h3"><a href="#" title="{!!$data->title!!}">{!!$data->title!!}</a></h3>
                   <p class="time-views"> <span> Đăng bởi: </span> <strong>{!!$data->author!!}</strong> <strong> - 106 lượt xem</strong></p>
                  <img class="img-new" src="{!!url('uploads/news/'.$data->images)!!}" alt="{!!$data->images!!}" >                  
                  <p class="summary-content">
                  <div class="panel-body">
                    <p class="text-left" style=" padding-bottom: 0px;">
                      <strong>
                        {!!$data->intro!!}
                      </strong>                  
                    </p>          
                      <div class="accordion-inner">
                        {!!$data->full!!}
                      </div>
                    <p class="text-left"><strong> Nguồn : <a target="#" href="#"> {!!$data->source!!}</a> </strong><br>
                      <span style="font-size:10px;color:#bdc3c7;">Sử lần cuối: {!!$data->updated_at!!} </span></p>
                      <p class="text-right"> <span class="glyphicon glyphicon-user" style="color:blue;"></span> <strong> {!!$data->author!!} </strong></p>
                  </div>
                  </p>
                </div>                
              </div>
              <div class="row">
                <?php 
                    $data = DB::table('news')
                    ->orderBy('created_at', 'desc')
                    ->paginate(5); 
                  ?>
                <h1 style="padding-left: 20px;"> Tin khác</h1>
                <hr>
                @foreach($data as $row)
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-bottom: 15px;">
                      <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}"><img src="{!!url('uploads/news/'.$row->images)!!}" alt="{!!$row->title!!}" width="90%" height="99%"> </a>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                      <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}"" title="{!!$row->title!!}">{!!$row->title!!}</a></h4>
                      <p> 
                        {!!$row->intro!!}
                      </p>
                      <p><strong>Lúc :</strong> {!!$row->created_at!!} Bởi : <strong>{!!$row->author!!} </strong></p>
                    </div>
                    <div><hr style="margin:15px 0;"></div> 
                  </div>
                  
                @endforeach 
              </div><!-- /row -->
              {!!$data->render()!!}
            </div>
          </div>   
        </div>
      </div>     
    </div>
  </div>
<!-- ===================================================================================/news ============================== -->
@endsection