@extends('layouts.main')
@section('content')

<?php

$type1 = DB::table('categories')->where('name' , 'commercial')->first();
$type2 = DB::table('categories')->where('name' , 'Residential')->first();


?>
<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->


<!-- BANNER SECTION BEGIN -->
<div id="myCarousel" class="carousel slide banner_text" data-ride="carousel">
  <!-- Indicators -->
  <?php $counter=0;?>
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    @if($banner)
    @foreach($banner as $value)
     <div class="item {{ $counter == 0 ? 'active' : '' }}">
    <img src="{{asset($value->image)}}" alt="image" class="img-responsive">
      <div class="carousel-caption">
        <div class="banner_txt_1">
          <h1>Find Your <span>Dream House</span></h1>
        </div>
       
      </div>
    </div>
     <?php $counter++;  ?>
      @endforeach

  </div>
</div>
        @endif

<div class="new_york_txt">
  <a href="#">New York <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
</div>
<!-- MENUBAR SECTION END -->

<!-- SECOND SECTION BEGIN -->
<section class="second_sec_txt"> 
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="second_sec_txta">
          <img src="{{asset($residency->image)}}" alt="image" class="img-responsive">
        </div>
        <div class="second_sec_txtb">
        <a href="{{route('property', ['name' => $type2->name])}}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
        <div class="second_sec_txtbc">
         <?=html_entity_decode($residency->content)?>
        </div>
      </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="second_sec_txta">
          <img src="{{asset($commercial->image)}}" alt="image" class="img-responsive">
        </div>
        <div class="second_sec_txtb">
        <a href="{{route('property', ['name' => $type1->name])}}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
        <div class="second_sec_txtbc">
          <?=html_entity_decode($commercial->content)?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- SECOND SECTION END -->

<!-- POPULAR PROPERTIES SECTION BEGIN -->
<section class="popular_properties_sec"style="
    background: url({{asset($pop->image)}}) style="
    background: url({{asset($innerbanner->image)}}) no-repeat top center/ cover;
">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="popular_properties_sec1">
            <?=html_entity_decode($pop->content)?>
          <a href="#">Read More</a>
        </div>
      </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
      </div>
    </div>
  </div>
</section>
<!-- POPULAR PROPERTIES SECTION END -->

<!-- ABOUT PROPERTY SECTION BEGIN -->
<section class="about_sec_property"  style="
    background: url({{asset($cms_about->image)}}) no-repeat top center/ cover;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="about_sec_property1">
        <?= html_entity_decode($truncated = Str::limit($cms_about->content, 644)) ?>
      
          <a href="{{url('about')}}">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ABOUT PROPERTY SECTION END -->

<!-- POPULAR SECTION BEGIN -->
<section class="popular_sec_txt">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="popular_sec_txt1">
          <h2>Popular City Searches</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 border_right">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="popular_sec_txt1a">
                  <ul>
                    <li>Washington</li>    
                    <li>Springfield</li>
                    <li>Franklin</li>
                    <li>Greenville</li>
                    <li>Bristol</li>
                    <li>Clinton</li>
                  </ul>
                </div>
              </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="popular_sec_txt1a">
                  <ul>
                    <li>88</li>
                    <li>41</li>
                    <li>35</li>
                    <li>30</li>
                    <li>29</li>
                    <li>29</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 border_left">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="popular_sec_txt1a">
                  <ul>
                    <li>Washington</li>    
                    <li>Springfield</li>
                    <li>Franklin</li>
                    <li>Greenville</li>
                    <li>Bristol</li>
                    <li>Clinton</li>
                  </ul>
                </div>
              </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="popular_sec_txt1a">
                  <ul>
                    <li>88</li>
                    <li>41</li>
                    <li>35</li>
                    <li>30</li>
                    <li>29</li>
                    <li>29</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="popular_sec_txt1">
          <h2>Popular Destinations</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 border_right">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="popular_sec_txt1a">
                  <ul>
                    <li>Washington</li>    
                    <li>Springfield</li>
                    <li>Franklin</li>
                    <li>Greenville</li>
                    <li>Bristol</li>
                    <li>Clinton</li>
                  </ul>
                </div>
              </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="popular_sec_txt1a">
                  <ul>
                    <li>88</li>
                    <li>41</li>
                    <li>35</li>
                    <li>30</li>
                    <li>29</li>
                    <li>29</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="popular_sec_txt1a">
                  <ul>
                    <li>Washington</li>    
                    <li>Springfield</li>
                    <li>Franklin</li>
                    <li>Greenville</li>
                    <li>Bristol</li>
                    <li>Clinton</li>
                  </ul>
                </div>
              </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="popular_sec_txt1a">
                  <ul>
                    <li>88</li>
                    <li>41</li>
                    <li>35</li>
                    <li>30</li>
                    <li>29</li>
                    <li>29</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- POPULAR SECTION END -->



<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection