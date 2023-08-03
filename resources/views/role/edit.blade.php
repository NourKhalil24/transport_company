@extends('layouts.admin')
@section('content')
    <div class="alert alert-success" id="success_msg" style="display: none">
        updated successfully
    </div>

    <div class="container">
    <div class="flex-center position-ref full-height">
    <form method="post" action="" id="roleFormUpdate">
        @csrf
        <input type="number"  style="display: none" name="role_id" value="{{$role->role_id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label"> role name</label>
            <input type="text" name="role_name" value="{{$role->role_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <small id="role_name_error" class="form-text text-danger"></small>
        </div>

<button id="update_role" class="btn btn-primary">Update Role</button>    </form>
    </div>
    </div>
    @stop
@section('scripts')
    <script>

        $(document).on('click','#update_role',function (e){
            e.preventDefault();
            e.preventDefault();
            $('#role_name_error').text('');
            

            var formData =new FormData($('#roleFormUpdate')[0]);
            $.ajax({
                type:'post',
                // // من أجل الصور أو الملفات
                //enctype:'multipart/form-data',//
                url:"{{route('role.update')}}",
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
