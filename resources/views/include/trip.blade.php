@extends('layouts.user')
@section('content')


<!-- section -->

                    <div class="main_heading text_align_center">
                        <h2>OUR TRIPS LIST </h2>
                        <p class="large">choose what is perfect for you</p>
                    </div>

        <div class="row about_blog">
            <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
                <div class="full text_align_left">
                    <h3>HOW TO MAKE A RESERVATION FROM YOUR HOME </h3>
                    <p>أصبح بالإمكان الحجز والدفع لأي رحلة كانت من أي مكان وأنت جالس بكل سهولة دون عناء ….....….
                        ما عليك سوى اتباع الخطوات التالية بدقة ولتكن رحلتك موفقة
                    </p>
                    <ul>
                        <li><i class="fa fa-check-circle"></i>تصفح قائمة الرحلات الموجودة أدناه </li>
                        <li><i class="fa fa-check-circle"></i>اختر المصدر والوجهة لرحلتك </li>

                        <li><i class="fa fa-check-circle"></i>استعرض تفاصيل الرحلات الموافقة لاختيارك السابق</li>
                        <li><i class="fa fa-check-circle"></i>يمكنك حجز قدر ما تشاء من المقاعد </li>
                        <li><i class="fa fa-check-circle"></i>اختر الرحلة التي تناسبك وقم بإدخال رقم حسابك البنكي بشكل دقيق و صحيح</li>
                        <li><i class="fa fa-check-circle"></i>يرجى تأكيد الايميل الذي يصلك حتى تتم عملية الدفع الالكتروني بنجاح </li>

                        <li><i class="fa fa-check-circle"></i>هاقد حصلت على الحجوزات التي ترغب بها ماعليك الآن سوى الاستمتاع برحلة مريحة </li>          </ul>
                </div>
            </div>

        </div>

<!-- end section -->
<thead>
<tr >
    <th scope="col">#</th>
    <th scope="col">SOURCE</th>
    <th scope="col">DESTINATION</th>
    
    <th scope="col">DEPARTURE TIME</th>
    <th scope="col">DEPARTURE DAY</th>
    
    <th scope="col">COST</th>
    <th scope="col">DRIVER</th>

</tr>
</thead>
<tbody>
@foreach($trip as $trip)

    <tr class="tripRow{{$trip->trip_id}}">

        <th scope="row"></th>
        <td>{{$trip->trip_id}}</td>
        <td>
            {{$trip->trip_source}}
        </td>
        <td>{{$trip->trip_destination}}</td>
        
        <td>{{$trip->departure_time}}</td>
        <td>{{$trip->departure_day}}</td>
       
        <td>{{$trip->cost}}</td>




@endforeach
</tbody>
</table>
@stop

