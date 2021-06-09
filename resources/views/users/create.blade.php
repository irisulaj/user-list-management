
@extends('layouts.app')

@section('content')
<h1 class="text-center">User Register</h1>


<div class="form-group" style="margin: auto;
width: 30%;
position: relative;
padding: 10px;">
{!! Form::open(['action'=> 'App\Http\Controllers\UsersController@store', 'method'=>'POST']) !!}
    {{ Form::text('name', '', ['class'=> 'form-control', 'placeholder'=> 'Name'])}}
    {{ Form::label('','') }}
    {{ Form::text('lastname', '', ['class'=> 'form-control', 'placeholder'=> 'Last Name'])}}
    {{ Form::label('','') }}
    {{ Form::text('username', '', ['class'=> 'form-control', 'placeholder'=> 'Username'])}}
    {{ Form::label('','') }}
    {{ Form::text('email', '', ['class'=> 'form-control', 'placeholder'=> 'Email'])}}
    {{ Form::label('','') }}
    {{ Form::text('dob', '', ['class'=> 'form-control', 'placeholder'=> 'Dob'])}}
    {{ Form::text('address', '', ['class'=> 'form-control', 'placeholder'=> 'Address'])}}
    {{ Form::label('','') }}
    {{ Form::text('password', '', ['class'=> 'form-control', 'placeholder'=> 'Password'])}}
    {{ Form::label('','') }}
    {{ Form::submit('Register', ['class'=> 'form-control btn btn-primary'])}}
    </div>

@endsection