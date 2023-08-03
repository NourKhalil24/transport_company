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
            
            <th scope="col">EMAIL</th>
            <th scope="col">COMMENT</th>
           
        </tr>
        </thead>
        <tbody>

        @foreach($contact as $contact)
            <tr class="contactRow{{$contact->id}}">

               
            <td>{{$contact->email}}</td>
                <td>{{$contact->comment}}</td>
               

                
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

