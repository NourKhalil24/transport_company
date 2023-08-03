<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register</title>

    <!-- CSS  -->
{{--    <link rel="stylesheet">--}}
    <link href="{{ url('css/app.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="loaded">
<div class="container">
    <div class="row">
        <div class="col l4 m3"></div>
        <div class="col l4 s12 m6">

            <div id="loader-wrapper">
                <div id="loader"></div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
            <div id="login-page" class="row">
                <div class="col s12 z-depth-4 card-panel">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="col l4 m3"></div>
    </div>
</div>

{{--@yield('content')--}}
</body>
</html>
@push('pageJs')
<script type="text/javascript">
    $(".select2").select2();
    $(function () {

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });

        $('#btn_reg').click(function (e) {

            e.preventDefault();

            $.ajax({

                data: $('#register_form').serialize(),
                url: "{{ route('register') }}" ,

                type: "POST",

                dataType: 'json',

                success: function (data) {
                    if(data.status===200) {

                        $('#register_form').trigger("reset");
                        toastr.success("create account success ");
                        window.location.reload();
                    }
                    else{
                        toastr.warning(data.success);
                        // window.location.reload('login.blade.php');
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });

        });

    });


</script>
@endpush

