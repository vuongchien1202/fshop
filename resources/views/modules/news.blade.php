<?php 
    $data = DB::table('news')
    ->limit(4)
    ->orderBy('created_at', 'desc')
    ->get(); 
  ?> 
@foreach($data as $row)
<div class="col-lg-4 no-padding" style="margin-bottom: 10px;">
    <div class="col-lg-4">
        <a href="#" title=""><img src="{!!url('uploads/news/'.$row->images)!!}" alt="" class="img-responsive"> </a>
    </div>
    <div class="col-lg-8">
        <p><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}">{!!$row->title!!}</a><p>
        {{-- <p>
            {!!$row->intro!!}
        </p> --}}
        {{-- <p><strong>Lúc :</strong>{!!$row->created_at!!} Bởi : <strong> {!!$row->author!!}</strong></p> --}}
    </div>
</div>
@endforeach