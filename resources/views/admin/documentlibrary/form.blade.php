<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('form_category') ? 'has-error' : ''}}">
    <div class="col-md-12">
        {!! Form::Label('item', 'Select Category:') !!}
        
        {!! Form::select('item_id', $form_category, isset($documentlibrary)?$documentlibrary->form_category:null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('doc_title') ? 'has-error' : ''}}">
    {!! Form::label('doc_title', 'Doc Title', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('doc_title', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('doc_title', '<p class="help-block">:message</p>') !!}
    </div>
</div><!-- <div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('Type') ? 'has-error' : ''}}">
    {!! Form::label('Type', 'Type', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('Type', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('Type', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->
<!-- <div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('form_category') ? 'has-error' : ''}}">
    {!! Form::label('form_category', 'Form Category', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::select('form_category', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('form_category', '<p class="help-block">:message</p>') !!}
    </div>
</div> --><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
         {!! Form::textarea('description', null, ('required' == 'required') ? ['class' => 'form-control', 'id' => 'summary-ckeditor', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('file') ? 'has-error' : ''}}">
    {!! Form::label('file', 'File', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::file('file', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row justify-content-center">
    <div class="col-lg-4 col-12 align-content-center">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
