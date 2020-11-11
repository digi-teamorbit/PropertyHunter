@extends('layouts.main')
@section('content')


<section class="searchSec">
  <div class="container">
    <h2>Search Properties</h2>
    <div class="row">
      <div class="col-md-2 col-sm-2 col-xs-12"></div>
      <div class="col-md-8 col-sm-8 col-xs-12">
        <form>
    <div class="row">
      <div class="col-md-2 col-sm-2 col-xs-12">
        <div class="searchType">
          <h4>Location</h4>
        </div>
      </div>
      <div class="col-md-10 col-sm-10 col-xs-12">
        <div class="searchInput">
          <input type="text" name="" placeholder="Where do you want to buy?">
          <p>*Required. Enter an address, city, neighborhood, or zip code.</p>
        </div>
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-2 col-sm-2 col-xs-12">
       
        <div class="searchType">
          <h4>Type</h4>
        </div>
      </div>
      <div class="col-md-10 col-sm-10 col-xs-12">
        <div class="searchcheck">
         <ul>
           <li><input type="checkbox" id="" name="" value="">
  <label for=""> House</label></li>
           <li><input type="checkbox" id="" name="" value="">
  <label for=""> Condo    </label></li>
           <li><input type="checkbox" id="" name="" value="">
  <label for="">  Townhome </label></li>
           <li><input type="checkbox" id="" name="" value="">
  <label for=""> Multi-family </label></li>
  <li><input type="checkbox" id="" name="" value="">
  <label for=""> Land </label></li>
  <li><input type="checkbox" id="" name="" value="">
  <label for="">  Farm / Ranch</label></li>


         </ul>
            
             
         
         
        </div>
      </div>
      
    </div>

    <div class="row">
      <div class="col-md-2 col-sm-2 col-xs-12">
       
        <div class="searchType">
          <h4>Price</h4>
        </div>
      </div>
      <div class="col-md-10 col-sm-10 col-xs-12">
        <div class="searchcheck">
         <ul>
           <li>
            <select>
              <option>No Min</option>
              <option>No Min</option>
              <option>No Min</option>
            </select>
  </li>
           
           <li><h4>To</h4></li>
           <li>
            <select>
              <option>No Max</option>
              <option>No Max</option>
              <option>No Max</option>
            </select>
  </li>


         </ul>
            
           
        </div>
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-2 col-sm-2 col-xs-12">
       
        <div class="searchType">
          <h4>Rooms</h4>
        </div>
      </div>
      <div class="col-md-10 col-sm-10 col-xs-12">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="beds">
        <h4>Beds</h4><br>
        <ul>
         <li class="flow1"><a href="#">Any</a></li>
           <li class="flow2"><a href="#">+1</a></li>
            <li class="flow3"><a href="#">+2</a></li>
             <li class="flow2"><a href="#">+3</a></li>
              <li class="flow3"><a href="#">+4</a></li>

        </ul>
       </div></div>
           <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="beds">
        <h4>Rooms</h4><br>
        <ul>
          <li class="flow1"><a href="#">Any</a></li>
           <li class="flow2"><a href="#">+1</a></li>
            <li class="flow3"><a href="#">+2</a></li>
             <li class="flow2"><a href="#">+3</a></li>
              <li class="flow3"> <a href="#">+4</a></li>

        </ul>
       </div></div>
        </div>
       
      </div>
      
    </div>
    <div class="row fox">
      <div class="col-md-6 col-sm-6 col-xs-12 margin1">
        <div class="showMore1">
        <a href="#">+ Show more filters</a>
        </div>
      </div>
       <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="showMore2">
           <button>Search</button>
         </div>
       </div>
    </div>
    </form>
  </div>
      <div class="col-md-2 col-sm-2 col-xs-12"></div>
    </div>
    
  </div>
</section>

<!-- footer start -->
    
     <!-- footer end -->
    <!-- Main Banner begin -->
    <!-- Placed at the end of the document so the pages load faster -->



@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection