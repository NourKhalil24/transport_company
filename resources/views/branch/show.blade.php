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
            <th scope="col">BRANCH NAME</th>
            <th scope="col">BRANCH CITY</th>
            <th scope="col">BRANCH STREET</th>
            <th scope="col">OPERATION ON BRANCH</th>
        </tr>
        </thead>
        <tbody>

        @foreach($branch as $branch)
            <tr class="branchRow{{$branch->branch_id}}">

               
            <td>{{$branch->branch_id}}</td>
                <td>{{$branch->branch_name}}</td>
                <td>{{$branch->branch_city}}</td>
                <td>{{$branch->branch_street}}</td>

                <td>
                    <a href=" {{url('Branch/edit/'. $branch->branch_id )}}" class="btn btn-succes">edit</a>
                    <!--<a href="" branch_id="{{$branch->branch_id}}"   class="delete_btn btn btn-denger">delete</a>-->
                    <a href="{{route('branch.employee',$branch->branch_id )}}"  class="btn btn-succes"  >veiw employee</a>
                    <a href="{{route('branchEmployee.delete',$branch->branch_id )}}"   class="btn btn-denger">delete</a>
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
      var branch_id= $(this).attr('branch_id');
            $.ajax({
                type:'post',
                url:"{{route('branch.delete')}}",
                data:{
                '_token':"{{csrf_token()}}",
                    'id':branch_id
                },

                success:function (data){
                    if (data.status==true){
                        $('#success_msg').show();

                    }
                $('.branchRow'+data.id).remove();
                } , error:function (reject){

                }
            });
        });


    </script>
@stop
