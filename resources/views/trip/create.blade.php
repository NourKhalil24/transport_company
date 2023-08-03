@extends('layouts.admin')
@section('content')
    <div class="alert alert-success" id="success_msg" style="display: none">
        added sucessfully
    </div>

    <div class="container">
    <div class="flex-center position-ref full-height">
    <form method="" action="" id="tripForm">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">trip source</label>
            <input type="text" name="trip_source" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <small id="trip_source_error" class="form-text text-danger"></small>

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">trip destination</label>
            <input type="text" name="trip_destination" class="form-control" id="exampleInputPassword1">

            <small id="trip_destination_error" class="form-text text-danger"></small>

        </div>
        

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">departure time</label>
                <input type="time" name="departure_time" class="form-control" id="exampleInputPassword1">

                <small id="departure_time_error" class="form-text text-danger"></small>

            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">departure  day</label>
                <input type="date" name="departure_day" class="form-control" id="exampleInputPassword1">

                <small id="departure_day_error" class="form-text text-danger"></small>

           
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">cost</label>
                <input type="text" name="cost" class="form-control" id="exampleInputPassword1">

                <small id="cost_error" class="form-text text-danger"></small>

            </div>



        <button id="trip-store" class="btn btn-primary">Store Trip</button>
    </form>
    </div>
    </div>

    @stop
@section('scripts')
    <script>

        $(document).on('click','#trip-store',function (e){
            e.preventDefault();
            $('#trip_source_error').text('');
            $('#trip_destination_error').text('');
           
            $('#departure_time_error').text('');
            $('#departure_day_error').text('');
           
            $('#cost_error').text('');


            var formData =new FormData($('#tripForm')[0]);
            $.ajax({
                type:'post',
                // // من أجل الصور أو الملفات
                //enctype:'multipart/form-data',//
                url:"{{route('trip.store')}}",
                data:formData,
                processData:false,
                contentType:false,
                cache:false,
                success:function (data){
                    if (data.status==true){
                        $('#success_msg').show();

                    }

                } , error:function (reject){
                 var response = $.parseJSON(reject.responseText);
                 $.each(response.errors,function (key,val) {
                     $("#" + key + "_error").text(val[0]);


                 });
                }
            });
        });

    </script>
@stop
