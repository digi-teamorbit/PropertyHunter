@extends('layouts.main')
@section('content')

<!-- COLLAPSABLE SECTION BEGIN -->
<section class="collapsable_tabs">
  <div class="container">
    <div class="row">
      <div class="col-md-12 co-sm-12 col-xs-12">
        <div class="panel-group" id="accordionGroupClosed" role="tablist" aria-multiselectable="true">
@foreach($cate as $key=> $value)
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordionGroupClosed" href="#collapseCloseOne{{$key}}" aria-expanded="true" aria-controls="collapseCloseOne{{$key}}">
         {{$value->name}}
        </a>
      </h4>
    </div>
    <div id="collapseCloseOne{{$key}}" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <table class="table">
  <thead>
    <tr class="download_filezero">
      <th scope="col">DOCUMENT TITLE</th>
      <th scope="col">VERSION</th>
      <th scope="col">LINK</th>
      <th scope="col" width="10%">TYPE</th>

    </tr>
  </thead>
  <tbody>
    <?php
$doc =DB::table('documentlibraries')->where('form_category',$value->id)->get();

    ?>
    @foreach($doc as $value)

    <tr class="download_file">
      <th scope="row"><a href="#" class="download_file1">{{$value->doc_title}}</a>  <?=html_entity_decode($value->description) ?>
         </th>
      <td class="download_file2">Published:</td>
      <td>
      <a href="{{asset($value->file)}}" class="download_file3" download >DOWNLOAD</a>
      
      <span class="download_file31">8314 downloads</span>
      </td>
      <td><a href="{{asset($value->file)}}" class="pdf_img"><img src="{{asset('images/pdf.svg')}}" alt="image" class="img-responsive"></a></td>
    </tr>
  @endforeach
  </tbody>
</table>
      </div>
    </div>
  </div>
@endforeach
      </div> 
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