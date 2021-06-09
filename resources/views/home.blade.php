@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (count($add_users)>0)
                         
                
                    <table class="table table-stripped">
                        <tr>

                            <th>Name</th>
                            <th>
                                Lastname
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Edit User
                            </th>
                            <th>
                                Delete User
                            </th>
                        </tr>
                        @foreach($add_users as $user )

                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->status }}</td>
                            <td><a href="/users/{{ $user->id }}/edit" class="btn btn-warning">Edit</a></td>
                            <td>{!! Form::open(['action'=> ['App\Http\Controllers\UsersController@destroy', $user->id], 'method'=>'POST']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class'=> 'btn btn-danger']) }}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                            
                        @endforeach
                    </table>
                    @else
                    <p>U have no users</p>
                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
