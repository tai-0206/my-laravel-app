<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_name', 'User Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('icon', 'Icon:') !!}
    <div>
        <img src="{{ asset($user->icon)}}" class="user-image elevation-2" alt="User Image">
    </div>
</div>
