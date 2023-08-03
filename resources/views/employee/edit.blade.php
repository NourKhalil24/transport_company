@extends('layouts.admin')
@section('content')
    <div class="alert alert-success" id="success_msg" style="display: none">
        updated successfully    </div>
<table class="table">
        <thead>
        <tr >
            <th scope="col">#</th>
            <th scope="col">BRANCH NAME</th>
        </tr>
        </thead>
        <tbody>

        @foreach($branch as $branch)
            <tr class="branchRow{{$branch->branch_id}}">

               
            <td>{{$branch->branch_id}}</td>
                <td>{{$branch->branch_name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="container">
    <div class="flex-center position-ref full-height">
    <form method="post" action="" id="branchFormUpdate">
        @csrf
        <input type="number"  style="display: none" name="user_id" value="{{$employee->user_id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label"> hiring date</label>
            <input type="date" name="hiring_date" value="{{$employee->hiring_date}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <small id="hiring_date_error" class="form-text text-danger"></small>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">salary</label>
            <input type="number" name="salary" value="{{$employee->salary}}" class="form-control" id="exampleInputPassword1">

            <small id="salary_error" class="form-text text-danger">
            </small>

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">branch</label>
            <input type="number" name="branch_id" value="{{$employee->branch_id}}" class="form-control" id="exampleInputPassword1">

            <small id="branch_id_error" class="form-text text-danger">
            </small>

        </div>

        <button id="update_employee" class="btn btn-primary">Update Employee</button>
    </form>
    </div>
    </div>
    @stop
@section('scripts')
    <script>

        $(document).on('click','#update_employee',function (e){
            e.preventDefault();
            e.preventDefault();
           
            $('#hiring_date_error').text('');
            $('#salary_error').text('');
            $('#branch_id_error').text('');

            var formData =new FormData($('#employeeFormUpdate')[0]);
            $.ajax({
                type:'post',
                // // من أجل الصور أو الملفات
                //enctype:'multipart/form-data',//
                url:"{{route('employee.update')}}",
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
