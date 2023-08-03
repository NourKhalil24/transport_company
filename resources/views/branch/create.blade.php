@extends('layouts.admin')
@section('content')
    <div class="alert alert-success" id="success_msg" style="display: none">
        added successfully
    </div>

    <div class="container">
    <div class="flex-center position-ref full-height">
    <form method="" action="" id="branchForm">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">branch name</label>
            <input type="text" name="branch_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <small id="branch_name_error" class="form-text text-danger"></small>

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">barnch city</label>
            <input type="text" name="branch_city" class="form-control" id="exampleInputPassword1">

            <small id="branch_city_error" class="form-text text-danger"></small>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">barnch street</label>
            <input type="text" name="branch_street" class="form-control" id="exampleInputPassword1">

            <small id="branch_street_error" class="form-text text-danger"></small>

        </div>

        <button id="branch-store" class="btn btn-primary">Store Branch</button>
    </form>
    </div>
    </div>
    @stop
@section('scripts')
    <script>

        $(document).on('click','#branch-store',function (e){
            e.preventDefault();
            $('#branch_name_error').text('');
            $('#branch_city_error').text('');
            $('#branch_street_error').text('');

            var formData =new FormData($('#branchForm')[0]);
            $.ajax({
                type:'post',
                // // من أجل الصور أو الملفات
                //enctype:'multipart/form-data',//
                url:"{{route('branch.store')}}",
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
