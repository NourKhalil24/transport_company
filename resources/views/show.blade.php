@extends('dashboard')
@section('content2')
    
    <table class="table">
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

               
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
<!-- 
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
@stop -->
