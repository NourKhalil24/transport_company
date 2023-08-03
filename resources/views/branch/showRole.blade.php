@extends('layouts.admin')
@section('content')
    <div class="alert alert-success" id="success_msg" style="display: none">
        added successfully
    </div>
    <div class="alert alert-danger" id="danger_msg" style="display: none">
        fail to add
    </div>
    <div>ROLES</div>
    <table class="table">
        <thead>
        <tr >
            <th scope="col">#</th>
            <th scope="col">role name</th>

        </tr>
        </thead>
        <tbody>

        @foreach($role as $roles)
            <tr class="roleRow{{$roles->role_id}}">

                
                <td>{{$roles->role_id}}</td>
                <td>{{$roles->role_name}}</td>



            </tr>
        @endforeach
        </tbody>
    </table>
@stop


 

@section('scripts')
    <script>

        $(document).on('click','.delete_btn',function (e){
            e.preventDefault();
            var user_id= $(this).attr('user_id');
            $.ajax({
                type:'post',
                url:"{{route('employee.delete')}}",
                data:{
                    '_token':"{{csrf_token()}}",
                    'id':user_id
                },

                success:function (data){
                    if (data.status==true){
                        $('#success_msg').show();

                    }
                    $('.employeeRow'+data.id).remove();
                } , error:function (reject){

                }
            });
        });

    </script>
@stop

