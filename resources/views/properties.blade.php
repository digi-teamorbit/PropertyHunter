@extends('layouts.main')
@section('content')

<?php
$type=$_GET['name'];
if($type=='commercial'){
$innerbanner=DB::table('innerbanners')->where('id',3)->first();
}else{

  $innerbanner=DB::table('innerbanners')->where('id',2)->first();
}
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
    <section class="commercialPage">
        <div class="container">
             
            <div class="row space3">
             @foreach($property as $value)
                <div class="col-sm-4 col-md-4 col-xs-12">
                  
                    <div class="buildingCs">
                        <img src="{{asset($value->image)}}" class="img-responsive" alt="img"  style="height: 215px">
                        
                        <div class="starType">
                          <ul>
                         {!! str_repeat('<span class="fa fa-star" aria-hidden="true"></span>', $value->rating) !!}

                        {!! str_repeat('<span class="fa fa-star-o" aria-hidden="true"></span>', 5 - $value->rating) !!}

                          </ul>
                        </div>
                        <div class="heading">
                            <h3>{{$value->name}}<span>$315</span></h3>
                            <?=html_entity_decode($value->Short_description) ?>
                             <ul>
                               <li>
                                 <a href="#"><i class="fa fa-bed" aria-hidden="true"></i>{{$value->BEDROOMS}}</a>
                               </li>
                                <li>|</li>
                                <li>
                                 <a href="#"><i class="fa fa-bath" aria-hidden="true"></i>{{$value->BATHROOMS}}</a>
                               </li>
                                 <li>|</li>
                                 <li>
                                 <a href="#"><i class="fa fa-building" aria-hidden="true"></i>{{$value->SIZE}}</a>
                               </li>
                                  <li><div class="appHead1"><a href="{{url('/propertiesdetails/'.$value->id)}}">Check Details</a></div></li>
                                   <li></li>
                                    <li></li>
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
.starType{
  color: #fff;
}
</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection