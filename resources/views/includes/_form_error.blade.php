 @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <h6 class="alert alert-danger">{{$error}} </h6>
    @endforeach
@endif


    <div class="form-group mb-3">
        {!! Form::label('name', 'Name',) !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Jane Dow']) !!}
    </div>

    <div class="form-group mb-3">
        {!! Form::label('email', 'Email', []) !!}
        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'JaneDow@gmail.com']) !!}
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group mb-3">
        {!! Form::label('role_id', 'Role', []) !!}
        {!! Form::select('role_id', [''=>'Select a role'] + $roles, null, ['class'=>'custom-select']) !!}
    </div>

    <div class="form-group mb-3">
        {!! Form::label('is_active', 'Status', []) !!}
        {!! Form::select('is_active', ['0'=>'Not active', '1'=>'Active'], null, ['class'=>'custom-select']) !!}
    </div>

    <div class="form-group mb-3">
        {!! Form::label('password', 'password', []) !!}
       {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group mb-3">
        {!! Form::label('photo_id', 'Photo', []) !!}
        {!! Form::file('photo_id', ['class'=>'form-control-file']) !!}
    </div>

    <div class="form-group mb-3">
       {!! Form::submit($text, ['class'=>'btn btn-primary']) !!}
    </div>

