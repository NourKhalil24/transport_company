@extends('layouts.admin')
@section('content')
    <div class="alert alert-success" id="success_msg" style="display: none">
        added successfully
    </div>

    <div class="container">
    <div class="flex-center position-ref full-height">
    <form method="" action="" id="employeeForm">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">employee name</label>
            <input type="number" name="employee_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <small id="employee_name_error" class="form-text text-danger"></small>

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">hiring date</label>
            <input type="date" name="hiring_date" class="form-control" id="exampleInputPassword1">

            <small id="hiring_date_error" class="form-text text-danger"></small>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">salary</label>
            <input type="number" name="salary" class="form-control" id="exampleInputPassword1">

            <small id="salary_error" class="form-text text-danger"></small>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">branch name</label>
            <input type="number" name="branch_id" class="form-control" id="exampleInputPassword1">

            <small id="branch_id_error" class="form-text text-danger"></small>

        </div>

        <button id="employee-store" class="btn btn-primary">Store employee</button>
    </form>
    </div>
    </div>
    @stop
@section('scripts')
    <script>

        $(document).on('click','#employee-store',function (e){
            e.preventDefault();
            $('#user_id_error').text('');
            $('#hiring_date_error').text('');
            $('#salary_error').text('');
            $('#branch_id_error').text('');

            var formData =new FormData($('#employeeForm')[0]);
            $.ajax({
                type:'post',
                // // من أجل الصور أو الملفات
                //enctype:'multipart/form-data',//
                url:"{{route('employee.store')}}",
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
