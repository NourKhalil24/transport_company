@extends('layouts.admin')
@section('content')
    <div class="alert alert-success" id="success_msg" style="display: none">
        تم الحذف بنجاح
    </div>
    <div class="alert alert-danger" id="danger_msg" style="display: none">
        فشل الحذف
    </div>
    <table id="customers">
        <thead>
        <tr >
            <th scope="col">#</th>
            <th scope="col">Description</th>
            <th scope="col">Sender</th>
            <th scope="col">Recevier</th>
            <th scope="col">Sender phone</th>
            <th scope="col">Recevier phone</th>
            <th scope="col">Weight</th>
            <th scope="col">Source</th>
            <th scope="col">Destination</th>
           
        
            <th scope="col">OPERATION</th>
        </tr>
        </thead>
        <tbody>
        @foreach($good as $good)
            <tr class="goodRow{{$good->goods_id}}">

                <th scope="row"></th>
            <td>{{$good->description}}</td>
                <td>{{$good->sender}}</td>
                <td>{{$good->recevier}}</td>
                <td>{{$good->sender_phone}}</td>
                <td>{{$good->recevier_phone}}</td>
                <td>{{$good->weight}}</td>
                <td>{{$good->source}}</td>
                <td>{{$good->destination}}</td>
                <td>{{$good->arrive}}</td>
                <td>{{$good->receive}}</td>

                <td>
                    
                    <a href="" good_id="{{$good->goods_id}}"   class="delete_btn btn btn-denger">delete</a>

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
      var good_id= $(this).attr('good_id');
            $.ajax({
                type:'post',
                url:"{{route('good.delete')}}",
                data:{
                '_token':"{{csrf_token()}}",
                    'id':good_id
                },

                success:function (data){
                    if (data.status==true){
                        $('#success_msg').show();

                    }
                $('.goodRow'+data.id).remove();
                } , error:function (reject){

                }
            });
        });

    </script>
@stop
