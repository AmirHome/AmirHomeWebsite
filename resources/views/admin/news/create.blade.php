@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1Add new</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('files' => true, 'route' => 'admin.news.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('items_id', 'Item ID*', array('class'=>'col-md-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('items_id', old('items_id'), array('class'=>'form-control')) !!}
        <p class="help-block">کد منحصربفردي که خود فيدلي ميده</p>
    </div>
</div><div class="form-group">
    {!! Form::label('keywords', 'Keywords', array('class'=>'col-md-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('keywords', old('keywords'), array('class'=>'form-control')) !!}
        <p class="help-block">تگ هاي مربوط به خبر</p>
    </div>
</div><div class="form-group">
    {!! Form::label('originId', 'OriginId', array('class'=>'col-md-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('originId', old('originId'), array('class'=>'form-control')) !!}
        <p class="help-block">آدرس اينترنتي خبر</p>
    </div>
</div><div class="form-group">
    {!! Form::label('title', 'Title', array('class'=>'col-md-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('title', old('title'), array('class'=>'form-control')) !!}
        <p class="help-block">عنوان</p>
    </div>
</div><div class="form-group">
    {!! Form::label('published', 'Published Time', array('class'=>'col-md-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('published', old('published'), array('class'=>'form-control datetimepicker')) !!}
        <p class="help-block">زمان انتشار خبر</p>
    </div>
</div><div class="form-group">
    {!! Form::label('content', 'Content', array('class'=>'col-md-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('content', old('content'), array('class'=>'form-control ckeditor')) !!}
        <p class="help-block">متن خبر</p>
    </div>
</div><div class="form-group">
    {!! Form::label('visual_url', 'Image', array('class'=>'col-md-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('visual_url') !!}
        {!! Form::hidden('visual_url_w', 4096) !!}
        {!! Form::hidden('visual_url_h', 4096) !!}
        <p class="help-block">تصاوير مربوط به خبر</p>
    </div>
</div><div class="form-group">
    {!! Form::label('direction', 'Direction', array('class'=>'col-md-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('direction', $direction, old('direction'), array('class'=>'form-control')) !!}
        <p class="help-block">جهت نگارش خبر</p>
    </div>
</div><div class="form-group">
    {!! Form::label('language', 'Language', array('class'=>'col-md-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('language', $language, old('language'), array('class'=>'form-control')) !!}
        <p class="help-block">زبان خبر</p>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {!! Form::submit('Create', array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection