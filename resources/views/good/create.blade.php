@extends('layouts.admin')
@section('content')
    <div class="alert alert-success" id="success_msg" style="display: none">
        تم الحفظ بنجاح
    </div>

    <div class="container">
    <div class="flex-center position-ref full-height">
    <form method="" action="" id="goodForm">
        @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">description</label>
            <input type="text" name="description" class="form-control" id="exampleInputPassword1">

            <small id="description_error" class="form-text text-danger"></small>

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">sender</label>
            <input type="text" name="sender" class="form-control" id="exampleInputPassword1">

            <small id="sender_error" class="form-text text-danger"></small>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">receiver</label>
            <input type="text" name="receiver" class="form-control" id="exampleInputPassword1">

            <small id="receiver_error" class="form-text text-danger"></small>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">sender phone</label>
            <input type="text" name="sender_phone" class="form-control" id="exampleInputPassword1">

            <small id="sender_phone_error" class="form-text text-danger"></small>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">receiver phone</label>
            <input type="text" name="receiver_phone" class="form-control" id="exampleInputPassword1">

            <small id="receiver_phone_error" class="form-text text-danger"></small>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">weight</label>
            <input type="text" name="weight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <small id="weight_error" class="form-text text-danger"></small>

        </div>
       
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">source</label>
            
            <select class="form-control" name="source">
              @foreach($source as $sources)
                <option value="{{ $sources->branch_id}}">
                    {{ $sources->branch_name}}
                </option>
                @endforeach
            </select>

            <small id="source_error" class="form-text text-danger"></small>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">destination</label>
            
            <select class="form-control" name="destination">
              @foreach($destination as $destinations)
                <option value="{{ $destinations->branch_id}}">
                    {{ $destinations->branch_name}}
                </option>
                @endforeach
            </select>

            <small id="destination_error" class="form-text text-danger"></small>

        </div>
        
        <button id="good-store" class="btn btn-primary">Store Good</button>
    </form>
    </div>
    </div>
    @stop
@section('scripts')
    <script>

        $(document).on('click','#good-store',function (e){
            e.preventDefault();
            $('#description_error').text('');
            $('#sender_error').text('');
            $('#receiver_error').text('');
            $('#sender_phone_error').text('');
            $('#receiver_phone_error').text('');
            $('#source_error').text('');
            $('#weight_error').text('');
            
            $('#destination_error').text('');
           


            var formData =new FormData($('#goodForm')[0]);
            $.ajax({
                type:'post',
                // // من أجل الصور أو الملفات
                //enctype:'multipart/form-data',//
                url:"{{route('good.store')}}",
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
