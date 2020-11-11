@extends('layouts.main')
@section('content')



<section class="properties">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="gerllerySlider">
        

        <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
   <img src="{{asset($PropertyDetail->image)}}">
  </div>

  <div id="menu1" class="tab-pane fade">
  <img src="{{asset('images/slid11.png')}}">
  </div>

  <div id="menu2" class="tab-pane fade">
    <img src="{{asset('images/slid11.png')}}">
  </div>
  <div id="menu1" class="tab-pane fade">
   <img src="{{asset('images/slid11.png')}}">
  </div>
  <div id="menu1" class="tab-pane fade">
   <img src="{{asset('images/slid11.png')}}">
  </div>
</div>  
      <ul class="nav nav-tabs">
            @foreach($images as $value)
  <li class="active">
    <a data-toggle="tab" href="#home"><img src="{{asset($value->image)}}"></a>  
  </li>
   @endforeach

<!--   <li><a data-toggle="tab" href="#menu1"><img src="{{asset('images/slid2.png')}}"></a></li> --> 
  
</ul>
  </div>
</div>
     
       <div class="col-md-4 col-sm-4 col-xs-12 borderLine4">
         <div class="propertyTitle">
         <h2>{{$PropertyDetail->Name}}</h2>
         <h4>{{$PropertyDetail->Property_price}}</h4>
         <?=html_entity_decode($PropertyDetail->Short_description) ?>
         <ul>
           <li><h5>RERA Permit Number: <span><a href="#">{{$PropertyDetail->Permit_Number}}</a></span> </h5></li>
            <li><h5>DED Licence Number:<span><a href="#"> {{$PropertyDetail->Licence_Number}}</a></span></h5></li>
             <li><h5>RERA Registration Number:<span><a href="#"> {{$PropertyDetail->Registration_Number}}</a></span></h5></li>
         </ul>
         <h3><a href="#">T1L 1A2, Alberta, AB, North America (View Map)</a></h3>
         </div>
         <div class="propertyBtn">
           <ul>
             <li class="btn1"> <a href= "tel:{{ App\Http\Traits\HelperTrait::returnFlag(59)}}">Contact Now</a></li>
             <li class="btn2"><a href="#">Send Message</a></li>
           </ul>
         </div>        
       </div>
    </div>
    <div class="row">
      <div class="col-sm-8 col-md-8 col-xs-12">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-xs-12 middle12">
            <div class="bedroomcls">
              <h3>BEDROOMS</h3>
              <i class="fa fa-bed" aria-hidden="true"></i>
              <h4>{{$PropertyDetail->BEDROOMS}}</h4>
            </div>
          </div>
          <div class="col-sm-3 col-md-3 col-xs-12 middle12">
            <div class="bedroomcls">
              <h3>BATHROOMS</h3>
              <i class="fa fa-bath" aria-hidden="true"></i>
              <h4>{{$PropertyDetail->BATHROOMS}}</h4>
            </div>
          </div>
          <div class="col-sm-3 col-md-3 col-xs-12 middle12">
            <div class="bedroomcls">
              <h3>SIZE</h3>
              <i class="fa fa-home" aria-hidden="true"></i>
              <h4>{{$PropertyDetail->SIZE}}</h4>
            </div>
          </div>
          <div class="col-sm-3 col-md-3 col-xs-12 middle12">
            <div class="bedroomcls">
              <h3>PRICE</h3>
              <i class="fa fa-usd" aria-hidden="true"></i>
              <h4>{{$PropertyDetail->Property_price}}</h4>
            </div>
          </div>
        </div>
        <div class="description">
          <h3>Description</h3>
         <?=html_entity_decode($PropertyDetail->detail)?>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-xs-12">
        <div class="descriptionCls">

        <div class="descriptionMap">
          <h4>View in Map</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46673068.25015423!2d18.86779702890077!3d44.43935645499148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2s!4v1602909190764!5m2!1sen!2s" width="341" height="253" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <h5>Home ID 1003790499</h5>
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