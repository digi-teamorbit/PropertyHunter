@extends('layouts.main')
@section('content')

<?php


$SignUp=DB::table('pages')->where('id',4)->first();


?>
    <div class="top-prog-sec top-prog-sec2 contact-sec">
    <section class="siginInSec" style="
    background: url({{asset($SignUp->image)}}) no-repeat top center/ cover;
">
  <div class="container">
    <div class="row">
		
	
	
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
        <div class="account_form">
          <div class="siginInPage">
        <?=html_entity_decode($SignUp->content)?>
          </div>
          <form class="loginForm" method="POST" action="{{ route('register') }}">
		      @csrf
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Full name" required>
				  
				   @if ($errors->has('name'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
				   @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" required>
      				   @if ($errors->has('email'))
      						<span class="invalid-feedback" role="alert">
      							<strong>{{ $errors->first('email') }}</strong>
      						</span>
      				   @endif
                </div>
              </div>
            </div>
			
			<div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
				
                 <!--  <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" required>--> 
				   
                </div>
              </div>
            </div>
			
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
        				  @if ($errors->has('password'))
        						<span class="invalid-feedback" role="alert">
        							<strong>{{ $errors->first('password') }}</strong>
        						</span>
        				   @endif
				  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
              </div>
            </div>
			
            <div class="row logRow">
			
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			 
			  <div class="log submit-btn"> <a href="javascript:void(0)" class="btn btn1">  </a>  <input type="submit" class="log submit-btn" value="Register" /> </div>
			 
			 </div>
			 
            </div>
			
	<!-- 		<hr/> -->
			
			
			    <!-- <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <div class="customer">
                        <h5> Already have an account?</h5>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right">
                      <div class="request"> <a href="{{ route('signin') }}" class="btn btn1 "> Login </a></div>
                    </div>
                  </div> -->
			
			
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
