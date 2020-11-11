<?php

$type1 = DB::table('categories')->where('name' , 'commercial')->first();
$type2 = DB::table('categories')->where('name' , 'Residential')->first();

?>

<header class="header_area">
    <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="code_txt">
                  <a href="{{url('/')}}">
                    <img src="{{asset($logo->img_path)}}" alt="image" class="img-responsive">
                  </a>
                </div>
          </div>
              <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12">
                 <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                 <!--    <li><a class="{{request()->routeIs('search') ? 'active' : '' }}" href="{{ url('search') }}">Search</a> -->
                    <li><a class="{{request()->routeIs('blog') ? 'active' : '' }}" href="{{ url('blog') }}">Blog</a></li>
                      
         
                    <li><a class="{{request()->routeIs('residential') ? 'active' : '' }}" href="{{route('property', ['name' => $type2->name])}}">Residential</a></li>
           
                    <li><a class="{{request()->routeIs('commercial') ? 'active' : '' }}" href="{{route('property', ['name' => $type1->name])}}">Commercial</a></li>
                    
            

                    <li><a class="{{request()->routeIs('about') ? 'active' : '' }}" href="{{ url('about') }}">About Us</a></li>
                    
                    </ul>
                  </div>
              </nav>
              </div>

             <div class="col-md-3 col-sm-3 col-xs-12">
               <div class="sign_link">
                 <ul>
                   <li><a href="{{url('signin')}}">Sign In</a></li>
                   <li><span>|</span></li>
                   <li><a href="{{url('signup')}}">Sign Up</a></li>
                 </ul>
               </div>
             </div>
        </div>
    </div>
</header>