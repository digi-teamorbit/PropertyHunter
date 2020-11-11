@extends('layouts.main')
@section('content')

<?php

$innerbanner=DB::table('innerbanners')->where('id',4)->first();
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
    <section class="aboutPage">
      <div class="container">
        <div class="col-md-1"></div>
        <div class="col-md-10">
       <?=html_entity_decode($cms_about->content)?>
        </div>
        <div class="col-md-1"></div>
<div class="AboutImg">
  <img src="{{asset($cms_about->image)}}" class="img-responsive" alt="img">
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