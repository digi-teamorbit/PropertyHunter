@extends('layouts.main')
@section('content')


<section class="about_banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="about_banner1">
          <h1>Blog</h1>
        </div>
      </div>
    </div>
  </div>
</section>
 <section class="blog">
     <div class="container">
         
            
                 <div class="blogCls1">
                    <img src="{{asset($BlogDetail->image)}}" class="img-responsive" alt="img">
                    <div class="itemType bordertype1">
                    <h3>{{$BlogDetail->name}}y</h3>
                    
            <!--         <ul> 

                        <li><a href="#"><img src="{{asset('images/icon1.png')}}"></a></li>
                        <li><a href="#"><h5>4</h5></a></li>
                        <li><a href="#"><h5>Comments</h5></a></li>
                        
                        <li><a href="#"><img src="{{asset('images/icon2.png')}}"></a></li>
                        <li><a href="#"><h5>4</h5></a></li>
                        <li><a href="#"><h5>Like</h5></a></li>
                       

                    </ul> -->

         <?=html_entity_decode($BlogDetail->detail)?>



                </div>
                    </div>
     
 </div>
</section>

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection