<!-- ============================================================== -->
<!-- All SCRIPTS AND JS LINKS BELOW  -->
<!-- ============================================================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 

<!-- Mobile Menu JS --> 
<script src="{{asset('js/jquery.slicknav.js')}}"></script> 
<script src='https://unpkg.com/aos@2.3.1/dist/aos.js'></script>
<script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>

<!-- Custom JS  --> 
 <script src="js/custom.js"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
 <script src="{{asset('js/all.js')}}"></script>
 <script>
              new WOW().init();
</script>
<script>
              AOS.init();
</script>
<script>
$(document).ready(function() {
  $(".gallery a").fancybox();
});
</script>


  <!-- Notification JS Below  -->

  <script src="{{ asset('/plugins/vendors/toast-master/js/jquery.toast.js') }}"></script>

  <script>

       $(document).ready(function () {

             @if(\Session::has('message')) 
                  $.toast({
                      heading: 'Success!',
                      position: 'bottom-right',
                      text:  '{{session()->get('message')}}',
                      loaderBg: '#ff6849',
                      icon: 'success',
                      hideAfter: 3000,
                      stack: 6
                  });
              @endif
              
              
              @if(\Session::has('flash_message')) 
                  $.toast({
                      heading: 'Error!',
                      position: 'bottom-right',
                      text:  '{{session()->get('flash_message')}}',
                      loaderBg: '#ff6849',
                      icon: 'error',
                      hideAfter: 3000,
                      stack: 6
                  });
              @endif

              
          })
      
  </script>
