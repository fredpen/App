@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <h6 class="alert alert-danger">{{$error}} </h6>
    @endforeach
@endif


<div class="form-group mb-3">
    {!! Form::label('title', 'Title', []) !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group mb-3">
    {!! Form::label('category_id', 'Category', []) !!}
    {!! Form::select('category_id', [''=>'select a category'] + $categories, null, ['class'=>'text-capitalise custom-select']) !!}
</div>

<div class="form-group mb-3">
    {!! Form::label('photo_id', 'Select a photo', []) !!}
    {!! Form::file('photo_id', ['class'=>'form-control-file']) !!}
</div>

<div class="form-group mb-3">
    {!! Form::label('body', 'Content', []) !!}
    {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>5, 'placeholder'=>'content goes here']) !!}
</div>

<div class="form-group mb-3">
   {!! Form::submit($text, ['class'=>'btn btn-primary']) !!}
</div>



