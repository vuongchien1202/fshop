@include('layouts.header')
@include('modules.menu')
<div class="container">
	<div class="row">
		@include('modules.slide')
		@include('modules.news')
	</div>
</div>
    <div class="container">  
      	<div class="row">   
			@yield('content')
      	</div>       <!-- /row -->
    </div> <!-- /container -->
@include('modules.menu_footer')
@include('layouts.footer')