@extends('dashboard')
@section('content2')


<!-- section -->

                    <div class="main_heading text_align_center">
                        <h2>OUR TRIPS LIST </h2>
                        <p class="large">choose what is perfect for you</p>
                    </div>

        <div class="row about_blog">
            <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
                <div class="full text_align_left">
                    <h3>HOW TO MAKE A RESERVATION FROM YOUR HOME </h3>
                    <p>It is now possible to book and pay for any trip from anywhere while you are sitting with ease without any trouble……….
                    <br>
                    All you have to do is follow these steps carefully and have a successful trip :</p>
                    <ul>
                        <li><i class="fa fa-check-circle"></i>Browse the list of flights below </li>
                        <li><i class="fa fa-check-circle"></i>Choose the source and destination of your trip</li>

                        <li><i class="fa fa-check-circle"></i>View the details of the flights corresponding to your previous selection</li>
                        <li><i class="fa fa-check-circle"></i>You can reserve as many seats as you want </li>
                        <li><i class="fa fa-check-circle"></i>Choose the flight that suits you and enter your bank account number accurately and correctly</li>
                        <li><i class="fa fa-check-circle"></i>Please confirm the email you receive in order for the electronic payment process to be completed successfully </li>

                        <li><i class="fa fa-check-circle"></i>You've got the reservations you want, now you just have to enjoy a comfortable trip  </li>          </ul>
                </div>
            </div>

        </div>

<table class="table" >
<thead>
<tr >
    <th scope="col">#</th>
    <th scope="col">SOURCE</th>
    <th scope="col">DESTINATION</th>
    <th scope="col">DEPARTURE TIME</th>
    <th scope="col">DEPARTURE DAY</th>
    <th scope="col">COST</th>
    <th scope="col">operation</th>

</tr>
</thead>
<tbody>
@foreach($trip as $t)

    <tr class="tripRow{{$t->trip_id}}">

        <!-- <th scope="row"></th> -->
        <td>{{$t->trip_id}}</td>
        <td>{{$t->trip_source}}</td>
        <td>{{$t->trip_destination}}</td>
        <td>{{$t->departure_time}}</td>
        <td>{{$t->departure_day}}</td>
        <td>{{$t->cost}}</td>
        <td><button type="button"  style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19) " ><a href="https://portal.myfatoorah.com/En/All/Account/Register">book </a> </button></td>
       



@endforeach
</tbody>
</table>
@stop

