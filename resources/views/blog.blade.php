@extends('layouts.main')
@section('content')


<?php

$innerbanner=DB::table('innerbanners')->where('id',1)->first();
?>
<section class="about_banner"  style="background: url({{asset($innerbanner->image)}})no-repeat top center/ cover;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="about_banner1">
          <h1>{{$innerbanner->name}}</h1>
        </div>
      </div>
    </div>
  </div>
</section>
 <section class="blog">
     <div class="container">
         <div class="row">
             @foreach($blog as $value)
             <div class="col-sm-4 col-md-4 col-xs-12">
               
                 <div class="blogCls">
                    <a href="{{url('blogdetail/'.$value->id)}}"><img src="{{asset($value->image)}}" class="img-responsive" alt="img"></a>
                    <div class="itemType">
                    <h3>{{$value->name}}</h3>
                   <?=html_entity_decode($value->short_detail) ?>
                    <ul> 

                    <!--     <li><a href="#"><img src="{{asset('images/icon1.png')}}"></a></li>
                        <li><a href="#"><h5>4</h5></a></li>
                        <li><a href="#"><h5>Comments</h5></a></li>
                        
                        <li><a href="#"><img src="{{asset('images/icon2.png')}}"></a></li>
                        <li><a href="#"><h5>4</h5></a></li>
                        <li><a href="#"><h5>Like</h5></a></li> -->
                       

                    </ul>
                </div>
                    </div>
         </div>
          @endforeach
         
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