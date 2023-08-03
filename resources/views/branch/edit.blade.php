@extends('layouts.admin')
@section('content')
    <div class="alert alert-success" id="success_msg" style="display: none">
        updated successfully
    </div>

    <div class="container">
    <div class="flex-center position-ref full-height">
    <form method="post" action="" id="branchFormUpdate">
        @csrf
        <input type="number"  style="display: none" name="branch_id" value="{{$branch->branch_id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label"> branch name</label>
            <input type="text" name="branch_name" value="{{$branch->branch_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <small id="branch_name_error" class="form-text text-danger"></small>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">branch city</label>
            <input type="text" name="branch_city" value="{{$branch->branch_city}}" class="form-control" id="exampleInputPassword1">

            <small id="branch_city_error" class="form-text text-danger">
            </small>

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">branch street</label>
            <input type="text" name="branch_street" value="{{$branch->branch_street}}" class="form-control" id="exampleInputPassword1">

            <small id="branch_street_error" class="form-text text-danger">
            </small>

        </div>

        <button id="update_branch" class="btn btn-primary">Update Branch</button>
    </form>
    </div>
    </div>
    @stop
@section('scripts')
    <script>

        $(document).on('click','#update_branch',function (e){
            e.preventDefault();
            e.preventDefault();
            $('#branch_name_error').text('');
            $('#branch_city_error').text('');
            $('#branch_street_error').text('');

            var formData =new FormData($('#branchFormUpdate')[0]);
            $.ajax({
                type:'post',
                // // من أجل الصور أو الملفات
                //enctype:'multipart/form-data',//
                url:"{{route('branch.update')}}",
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
