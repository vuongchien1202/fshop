@extends('layouts.new-master') 
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3 class="panel-title">
      <span class="glyphicon glyphicon-home"><a href="#" title=""> Home</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span><a href="#" title=""> Đặt hàng</a>
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title="">{!!$slug!!}</a>
    </h3>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <div class="panel panel-success">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @elseif (Session()->has('flash_level'))
                    <div class="alert alert-success">
                        <ul>
                            {!! Session::get('flash_massage') !!}
                        </ul>
                    </div>
                    @endif
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Action</th>
                                        <th>Giá</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(Cart::content() as $row)
                                    <tr>
                                        <td>{!!$row->id!!}</td>
                                        <td>
                                            <img src="{{asset('uploads/products/'.$row->options->img)}}" width="60" height="50">
                                        </td>
                                        <td>{{$row->name}}</td>
                                        <td class="">
                                            @if(($row->qty)>1)
                                              <a href="{!!url('gio-hang/update/'.$row->rowId.'/'.$row->qty.'-down')!!}">
                                                <span class="glyphicon glyphicon-minus"></span>
                                              </a> 
                                            @else
                                              <a href="#"><span class="glyphicon glyphicon-minus"></span></a> 
                                            @endif
                                            <input type="text" class="qty text-center" value="{!!$row->qty!!}" style="width:30px; font-weight:bold; font-size:15px; color:blue;" readonly="readonly">
                                            <a href="{!!url('gio-hang/update/'.$row->rowId.'/'.$row->qty.'-up')!!}">
                                              <span class="glyphicon glyphicon-plus-sign"></span>
                                            </a>
                                        </td>
                                        <td>
                                          <a href="{!!url('gio-hang/delete/'.$row->rowId)!!}" onclick="return xacnhan('Xóa sản phẩm này ?')">
                                            <span class="glyphicon glyphicon-remove" style="padding:5px; font-size:18px; color:red;"></span>
                                          </a>
                                        </td>
                                        <td>{!! number_format($row->price) !!} Vnd</td>
                                        <td>{!! number_format($row->qty * $row->price) !!} Vnd</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="3"><strong>Tổng cộng :</strong> </td>
                                        <td>{!!Cart::count()!!}</td>
                                        <td colspan="2" style="color:red">{!!Cart::subtotal()!!} Vnđ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 no-paddng">
                            @if(Cart::count() !=0) 
                            @if (Auth::guest())
                              <div class="input-group">
                                  <select name="paymethod" id="inputPaymethod" class="form-control" required="required">
                                      <option value="cod">COD (thanh toán khi nhận hàng)</option>
                                      <option value="paypal">Paypal (Thanh toán qua Paypal)</option>
                                  </select>
                              </div>
                              <a class="btn btn-large btn-buy_ins pull-right" href="{!!url('/login')!!}">Tiến hàng thanh toán</a> 
                            @else
                              <form action="{!!url('/dat-hang')!!}" method="get" accept-charset="utf-8">
                                  <div class="input-group">
                                      <label for="paymethod">Chọn phương thức thanh toán</label>
                                      <select name="paymethod" id="inputPaymethod" class="form-control" required="required">
                                          <option value="">Hãy chọn phương thức thanh toán</option>
                                          <option value="paypal">Thanh toán trực tuyến ( Paypal )</option>
                                          <option value="cod"> Thanh toán khi nhận hàng ( COD )</option>
                                      </select>
                                  </div>
                                  <hr>
                                  <button type="submit" class="btn btn-buy_ins pull-right">Tiến hành thanh toán</button>
                                  <a href="{!!url('/')!!}" type="button" class="btn btn-large btn-primary pull-left">Tiếp tục mua hàng</a>
                              </form>
                            @endif
                            @endif
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===================================================================================/news ============================== -->
@endsection