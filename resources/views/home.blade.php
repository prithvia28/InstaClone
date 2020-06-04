@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
            </thead>

            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}} </td>
                    <td>{{$user->name}} </td>
                    <td><a href="/profile/{{$user->id}}">{{$user->username}} </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection