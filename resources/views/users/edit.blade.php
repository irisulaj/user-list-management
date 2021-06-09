
@extends('layouts.app')

@section('content')
<h1 class="text-center">User Register</h1>


<div class="form-group" style="margin: auto;
width: 30%;
position: relative;
padding: 10px;">
{!! Form::open(['action'=> ['App\Http\Controllers\UsersController@update', $user->id], 'method'=>'POST']) !!}
    {{ Form::text('name', $user->name, ['class'=> 'form-control', 'placeholder'=> 'Name'])}}
    {{ Form::label('','') }}
    {{ Form::text('lastname', $user->lastname, ['class'=> 'form-control', 'placeholder'=> 'Last Name'])}}
    {{ Form::label('','') }}
    {{ Form::text('username', $user->username, ['class'=> 'form-control', 'placeholder'=> 'Username'])}}
    {{ Form::label('','') }}
    {{ Form::text('email', $user->email, ['class'=> 'form-control', 'placeholder'=> 'Email'])}}
    {{ Form::label('','') }}
    {{ Form::text('dob', $user->dob, ['class'=> 'form-control', 'placeholder'=> 'Dob'])}}
    {{ Form::label('','') }}
    {{ Form::text('address', $user->address, ['class'=> 'form-control', 'placeholder'=> 'Address'])}}
    {{ Form::label('','') }}
    {{ Form::text('status', $user->status, ['class'=> 'form-control', 'placeholder'=> 'Status'])}}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::label('','') }}
    {{ Form::submit('Update', ['class'=> 'form-control btn btn-primary'])}}
    </div>

@endsection