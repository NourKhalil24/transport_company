@extends('layouts.user')
@section('content')

    <table id="customers">
        <thead>
        <tr >
            <th scope="col">#</th>
            <th scope="col">BRANCH NAME</th>
            <th scope="col">BRANCH CITY</th>
            <th scope="col">BRANCH STREET</th>

        </tr>
        </thead>
        <tbody>
        @foreach($branch as $branch)
            <tr class="branchRow{{$branch->branch_id}}">

                <th scope="row"></th>
            <td>{{$branch->branch_id}}</td>
                <td>{{$branch->branch_name}}</td>
                <td>{{$branch->branch_city}}</td>
                <td>{{$branch->branch_street}}</td>


            </tr>
        @endforeach
        </tbody>
    </table>
@stop
