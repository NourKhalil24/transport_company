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
            <th scope="col">ROLE NAME</th>
             <th scope="col">OPERATIONS</th>
        
        </tr>
        </thead>
        <tbody>

        @foreach($role as $role)
            <tr class="roleRow{{$role->role_id}}">

               
            <td>{{$role->role_id}}</td>
                <td>{{$role->role_name}}</td>
                

                <td>
                    <a href=" {{url('Role/edit/'. $role->role_id )}}" class="btn btn-succes">edit</a>
                    <a href="" role_id="{{$role->role_id}}"   class="delete_btn btn btn-denger">delete</a>
                  
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
      var role_id= $(this).attr('role_id');
            $.ajax({
                type:'post',
                url:"{{route('role.delete')}}",
                data:{
                '_token':"{{csrf_token()}}",
                    'id':role_id
                },

                success:function (data){
                    if (data.status==true){
                        $('#success_msg').show();

                    }
                $('.roleRow'+data.id).remove();
                } , error:function (reject){

                }
            });
        });


    </script>
@stop
