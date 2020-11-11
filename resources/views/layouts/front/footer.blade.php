<?php

$cms_home2 = DB::table('pages')->where('id', 2)->first();
$cms_footer = DB::table('pages')->where('id', 9)->first();
$type1 = DB::table('categories')->where('name' , 'commercial')->first();
$type2 = DB::table('categories')->where('name' , 'Residential')->first();
?>

<footer style="
    background: url({{asset($cms_home2->image)}}) no-repeat top center/ cover;
">>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="address-box">
                  <div class="row flexRow">
                    <div class="col-md-3 col-xs-12 col-sm-3">
                      <div class="icon-list">
                        <div class="iconfooterBox"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></div>
                      </div>
                    </div>
                    <div class="col-md-9 col-xs-12 col-sm-9">
                      <div class="adress-list">
                        <h3>Address</h3>
                       <p>{{ App\Http\Traits\HelperTrait::returnFlag(519)}}</p>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>  Visit Us</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                   <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="address-box ">
                  <div class="row flexRow">
                    <div class="col-md-3 col-xs-12 col-sm-3">
                      <div class="icon-list">
                       <div class="iconfooterBox">  <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></div>
                      </div>
                    </div>
                    <div class="col-md-9 col-xs-12 col-sm-9">
                      <div class="adress-list">
                        <h3>Email ID</h3>
                       <p><a href= "mailto:{{ App\Http\Traits\HelperTrait::returnFlag(218)}}">{{ App\Http\Traits\HelperTrait::returnFlag(218)}}</p>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>  Visit Us</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                   <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="address-box ">
                  <div class="row flexRow">
                    <div class="col-md-3 col-xs-12 col-sm-3">
                      <div class="icon-list">
                         <div class="iconfooterBox"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a></div>
                      </div>
                    </div>
                    <div class="col-md-9 col-xs-12 col-sm-9">
                      <div class="adress-list">
                        <h3>Phone No</h3>
                     <p><a href= "tel:{{ App\Http\Traits\HelperTrait::returnFlag(59)}}">{{ App\Http\Traits\HelperTrait::returnFlag(59)}}</p>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>  Visit Us</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="footering">
                 <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-img">
                  <img src="{{asset($cms_footer->image)}}" class="img-responsive" alt="">
               <?=html_entity_decode($cms_home2->content)?>
                </div>
              </div>
               <div class="col-md-2 col-sm-2 col-xs-12">
                 <div class="footer-list">
                   <h3>Quick Links</h3>
                   <ul>
                     <li><a href="#">Search</a></li>
                       <li><a href="{{route('property', ['name' => $type2->name])}}">Residential</a></li>
                         <li><a href="{{route('property', ['name' => $type1->name])}}">Commercial</a></li>
                   </ul>
                 </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-12">
                 <div class="footer-list">
                   <h3> &nbsp;</h3>
                   <ul>
                     <li><a href="{{ url('blog') }}">Blog</a></li>
                       <li><a href="#">Marketing</a></li>
                         <li><a href="{{ url('about') }}">About Us</a></li>
                         <li><a href="{{ url('document-library') }}">Document library</a></li>
                   </ul>
                 </div>
               </div>
                @include('widgets.newsletter')
              </div>
            </div>
            </div>
          </div>
        </div>
    
       <div class="copyright">
        <div class="container">
         <div class="row">
         <div class="col-md-6 col-xs-12 col-sm-6">  <div class="copy-text">
             <p class="pull-left">{{ App\Http\Traits\HelperTrait::returnFlag(499) }}</p>
           </div>
           </div>
            <div class="col-md-6 col-xs-12 col-sm-6">
           <div class="footerSocial">
             <ul>
               <li><a href="{{ App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
               <li><a href="{{ App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank"><i class="fa fa-facebook-f"aria-hidden="true"></i></a></li>
               <li><a href="{{ App\Http\Traits\HelperTrait::returnFlag(1961) }}" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
               <li><a href="{{ App\Http\Traits\HelperTrait::returnFlag(1962) }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
             </ul>
           </div>
         </div>
      
       </div>
       </div>
       </div>
    </footer>