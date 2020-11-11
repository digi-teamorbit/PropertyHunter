<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('category') ? 'has-error' : ''}}">
    <div class="col-md-12">
        {!! Form::Label('item', 'Select Category:') !!}
        
        {!! Form::select('item_id', $items, isset($product)?$product->category:null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('Name') ? 'has-error' : ''}}">
    {!! Form::label('Name', 'Name', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('Name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('Name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('Short_description') ? 'has-error' : ''}}">
    {!! Form::label('Short_description', 'Short Description', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('Short_description', null, ('required' == 'required') ? ['class' => 'form-control', 'id' => 'summary-ckeditor', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('Short_description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('Property_price') ? 'has-error' : ''}}">
    {!! Form::label('Property_price', 'Property price', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('Property_price', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('Property_price', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('Permit_Number') ? 'has-error' : ''}}">
    {!! Form::label('Permit_Number', 'Permit Number', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('Permit_Number', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('Permit_Number', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('Licence_Number') ? 'has-error' : ''}}">
    {!! Form::label('Licence_Number', 'Licence Number', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('Licence_Number', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('Licence_Number', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('Registration_Number') ? 'has-error' : ''}}">
    {!! Form::label('Registration_Number', 'Registration Number', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('Registration_Number', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('Registration_Number', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('BEDROOMS') ? 'has-error' : ''}}">
    {!! Form::label('BEDROOMS', 'Bedrooms', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('BEDROOMS', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('BEDROOMS', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('BATHROOMS') ? 'has-error' : ''}}">
    {!! Form::label('BATHROOMS', 'Bathrooms', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('BATHROOMS', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('BATHROOMS', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('SIZE') ? 'has-error' : ''}}">
    {!! Form::label('SIZE', 'Size', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('SIZE', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('SIZE', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('detail') ? 'has-error' : ''}}">
    {!! Form::label('detail', 'Detail', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('detail', null, ('required' == 'required') ? ['class' => 'form-control', 'id' => 'summary-ckeditor1', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('category') ? 'has-error' : ''}}">
    <div class="col-md-12">
        {!! Form::Label('rating', 'Select Rate:') !!}
        
                 <select name="rating" required="" class="form-control">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    </div>
</div>


<div class="form-group row justify-content-center  {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">

      <div class="max-text">
        <img alt="" class="img-responsive" id="banner1" 
        src="{{ isset($product)?asset($product->image):asset('images/upload.jpg') }}" style=" width: 30%; "> 
        <br/>
      </div>
        <br/>
        {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group row justify-content-center  {{ $errors->has('images') ? 'has-error' : ''}}">
    {!! Form::label('images', 'Gallery Images', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">

    @if(isset($product_images) && count($product_images) > 0)
      <div class="max-text">
        @foreach($product_images as $pimage)
        <div class="gallery_css">
            <a href="{{ route('image.delete', $pimage->id) }}" class="delete_css">X</a>
                <img style="width: 100%;padding: 10px;" alt="" class="img-responsive" id="banner1" 
                src="{{ asset($pimage->image) }}" > 
        </div>  
        @endforeach        
        
      </div>
    @else            
    @endif  

        
    </div>
    
        <div class="col-md-12">
        <br/>
              <div id="demo"></div>
        <br/>
        </div>
</div>









<div class="form-group row justify-content-center">
    <div class="col-lg-4 col-12 align-content-center">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>


<style>
a.delete_css {
    position: absolute;
    background: red;
    padding: 5px 10px;
    color: #fff;
    font-weight: 800;
}

.gallery_css {
    width: 24%;
    float: left;
    margin: 0px 4px;
}

</style>

@push('js')

<script type="text/javascript">
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#banner1').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#image").change(function() {
  readURL(this);
});
</script>

<script>
$("#demo").spartanMultiImagePicker({
  fieldName:  'images[]'
});

</script>


@endpush