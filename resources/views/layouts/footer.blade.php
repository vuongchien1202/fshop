
<footer>
    © 2017 - 2018 Công Ty Cổ Phần Bán Lẻ Kỹ Thuật Số / Địa chỉ: TP. BMT / GPĐKKD số: Websitr đang thử nghiệm.
    <br> Thiết Kế Bởi : <a href="https://www.facebook.com/vuongchien.2412" title="" target="#">Vương Chiến</a>
</footer>

<a id="back-to-top" href="#" class="btn btn-warning btn-lg back-to-top" role="button" title="Click lên đâu trang" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
</script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{{--
<script src="{!!url('public/bootstrap/js/ie10-viewport-bug-workaround.js')!!}"></script> --}}
<!-- menu js -->
<script src="{{asset('js/menu.js')}}"></script>
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script type='text/javascript' src='{{asset('js/jquery.easing.1.3.js')}}'></script>
<script type='text/javascript' src='{{asset('js/camera.min.js')}}'></script>
<script type='text/javascript' src='{!!url('js/myscript.js')}}'></script>
<script type='text/javascript' src='{!!url('js/active-menu.js')}}'></script>
{{-- <script src="{{asset('js/bootstrap-image-gallery.min.js')}}"></script> --}}
<script src="{{asset('js/jquery.blueimp-gallery.min.js')}}"></script>
{{-- validate --}}
<script src="{{asset('js/validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/validate/jquery.validate.js')}}"></script>

<script type="text/javascript">
	$(document).on("click", ".countrySelect", function() {
    toggleCurrencyMenu();
});

function toggleCurrencyMenu() {
    var menu = $('.menuCurrencyContainer');
    if (menu.hasClass('hidden')) {
        menu.slideDown(100);
        menu.removeClass('hidden');
    } else {
        menu.slideUp(100);
        menu.addClass('hidden');
    }
}

$(".flexslider").flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: "100%",
    pausePlay: true,
    slideshowSpeed: 6000,
    directionNav: false,
    controlNav: true,
    pauseOnAction: true,
    start: function(slider) {
        $('body').removeClass('loading');
    },
    after: function(slider) {
        /* auto-restart player if paused after action */
        if (!slider.playing) {
            slider.play();
        }
    }
});
</script>
</body>

</html>