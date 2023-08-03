@extends('layouts.admin')
@section('content')
    <div class="alert alert-success" id="success_msg" style="display: none">
        added succesfully
    </div>
    <div class="alert alert-danger" id="danger_msg" style="display: none">
        fail to add
    </div>
    <div>EMPLOYEE</div>
    <table class="table">
        <thead>
        <tr >
            <th scope="col">#</th>
            <th scope="col">hiring date</th>
            <th scope="col">salary</th>
            <th scope="col">branch id</th>
            <th scope="col">OPERATION</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr class="employeeRow{{$employee->user_id}}">

                
            <td>{{$employee->user_id}}</td>
                <td>{{$employee->hiring_date}}</td>
                <td>{{$employee->salary}}</td>
                <td>{{$employee->branch_id}}</td>

                <td>
                    <a href=" {{route('employee.role',$employee->user_id )}}" class="btn btn-succes">show roles</a>
                   <!-- <a href="" user_id="{{$employee->user_id}}"   class="delete_btn btn btn-denger">delete</a>-->

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

