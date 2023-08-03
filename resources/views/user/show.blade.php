@extends('layouts.admin')
@section('content')
    <div class="alert alert-success" id="success_msg" style="display: none">
        added successfully
    </div>
    <div class="alert alert-danger" id="danger_msg" style="display: none">
        fail to add
    </div>
    <table class="table">
        <thead>
        <tr >
            
            <th scope="col">#</th>
            <th scope="col">first name</th>
            <th scope="col">second name</th>
            <th scope="col">last name</th>
            <th scope="col">birthday</th>
            <th scope="col">phone number</th>
            <th scope="col">email</th>
            <th scope="col">pass</th>
            <th scope="col">user name</th>
            
            
           
        </tr>
        </thead>
        <tbody>

        @foreach($user as $user)
            <tr class="userRow{{$user->id}}">

               
            <td>{{$user->id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->middle_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->birthday}}</td>
                <td>{{$user->phone_number}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->user_name}}</td>
               

                
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

