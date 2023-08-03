@extends('layouts.admin')
@section('content')
    <div class="alert alert-success" id="success_msg" style="display: none">
        deleted successfully
    </div>
    <div class="alert alert-danger" id="danger_msg" style="display: none">
        fail to delete
    </div>
    <table class="table">
        <thead>
        <tr >
            
            <th scope="col">Employee </th>
            <th scope="col">HIRING DATE</th>
            <th scope="col"> SALARY</th>
            <th scope="col"> BRANCH</th>
            
            <th scope="col">OPERATIONS</th>
        </tr>
        </thead>
        <tbody>

        @foreach($employee as $employee)
            <tr class="employeeRow{{$employee->user_id}}">

               
            <td>{{$employee->user_id}}</td>
                <td>{{$employee->hiring_date}}</td>
                <td>{{$employee->salary}}</td>
                <td>{{$employee->branch_id}}</td>
td>{{$employee->id}}</td>
                <td>
                    <a href=" {{url('Employee/edit/'. $employee->user_id )}}" class="btn btn-succes">edit</a>
                    <a href="" user_id="{{$employee->user_id}}"   class="delete_btn btn btn-denger">delete</a>
                    
                    
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
