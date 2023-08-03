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
            <th scope="col">SOURCE</th>
            <th scope="col">DESTINATION</th>
            <th scope="col">DEPARTURE TIME</th>
            <th scope="col">DEPARTURE DAY</th>
            <th scope="col">COST</th>
            <th scope="col">OPERATION</th>
        </tr>
        </thead>
        <tbody>

        @foreach($trip as $trip)
            <tr class="tripRow{{$trip->trip_id}}">

               
            <td>{{$trip->trip_id}}</td>
                <td>{{$trip->trip_source}}</td>
                <td>{{$trip->trip_destination}}</td>
                <td>{{$trip->departure_time}}</td>
                <td>{{$trip->departure_day}}</td>
                <td>{{$trip->cost}}</td>
                <td>
                    <a href=" {{url('Trip/edit/'. $trip->trip_id )}}" class="btn btn-succes">edit</a>
                    <a href="" trip_id="{{$trip->trip_id}}"   class="delete_btn btn btn-denger">delete</a>
                    
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('scripts')
    <script>

        $(document).on('click','.delete_btn',function (e){
           e.preventDefault();
      var trip_id= $(this).attr('trip_id');
            $.ajax({
                type:'post',
                url:"{{route('trip.delete')}}",
                data:{
                '_token':"{{csrf_token()}}",
                    'id':trip_id
                },

                success:function (data){
                    if (data.status==true){
                        $('#success_msg').show();

                    }
                $('.tripRow'+data.id).remove();
                } , error:function (reject){

                }
            });
        });


    </script>
@stop
