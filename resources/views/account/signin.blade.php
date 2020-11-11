@extends('layouts.main')
@section('content')

<?php


$SignIn=DB::table('pages')->where('id',5)->first();


?>
    <div class="top-prog-sec top-prog-sec2 contact-sec">
    <section class="siginInSec" style="
    background: url({{asset($SignIn->image)}}) no-repeat top center/ cover;
">
  <div class="container">
    <div class="row">
    
  
  
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
        <div class="account_form">
          <div class="siginInPage">
        <?=html_entity_decode($SignIn->content)?>
          </div>
          <form method="POST" class="loginForm" id="login" action="{{ route('login') }}">
                @csrf
               <div class="form-group">
             
                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                    <strong class="validate_css" >{{ $errors->first('email') }}</strong>
                    </span>
                @endif
               </div>
               <div class="form-group">
                 
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password">
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="validate_css">{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
               </div>
               <div class="form-group">
                  <label class="remember" style="color: #fff;"><input type="checkbox" > Remember me </label>
                  <a href="{{ url('password/reset') }}" class="pull-right forg_text" style="color: #fff;"> Forgot password? </a>
               </div>
               <div class="form-group">
                <div>

                   <div class="log submit-btn"> <a href="javascript:void(0)" class="btn btn1">  </a>  <input type="submit" class="log submit-btn" value="login" /> </div>
                  <!-- <input type="submit" class="Submit_btn" value="Log In"> -->
               </div>
             </form>
        </div>
      </div>
    </div>
  </div>
</section>
    
<!-- END: Checkout Section -->
    </div>
    <!-- product page end-->




@endsection
@section('css')
<style type="text/css">
  
  .account_form {
    margin: 70px 0px;
  }

  input.log.submit-btn {
  background-color: transparent;
    border: 1px solid #fff;
    color: #fff;
    padding: 17px 62px;
    margin: 58px auto;
    display: table;
    font-size: 17px;

}
</style>
@endsection
@section('js')
<script type="text/javascript">
   $(document).on('click', ".btn1", function(e){
      $('.loginForm').submit();
   });
</script>
@endsection
