<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.addons')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        body {
            font-family: 'Istok Web', sans-serif;
            outline: none;
            background-color: rgb(240, 240, 240);


        }

        #Search_all {
            width: 100%;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 2px solid rgb(236, 236, 236);
            padding-bottom: 10px;
            padding-left: 10px;
            font-size: 20px;
            font-family: 'Istok Web', sans-serif;


        }

        /* .view {
            background: url("public/img/weather.jpg")no-repeat center center;
            background-size: cover;
        } */

        html,
        body,
        header,
        .view {
            height: 60%;
        }

        #header_select {
            height: 40px;
            font-size: 15px;
            border: none;

        }

        .fa-instagram {
            color: white;
            font-size: 30px;
        }

        .fa-cloud {
            font-size: 150px;
        }

        .fa-globe-europe {
            font-size: 300px;
        }

        .fa-map {

            font-size: 100px;
        }

        .fa-user-circle {
            font-size: 40px;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background:

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <html lang="en" class="full-height">

                @include('include.header')

                <!--Main Layout-->
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-md-4 ml-4">
                            <h><span><i class="fas fa-globe-europe"></i></span> <span><i
                                        class="far fa-map pl-5"></i></span></h3>
                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-4" style="border-left:3px solid;">
                            <div style="margin-left:40px;">
                                <h5 class="mt-5"><strong>Ghatshila <span><i
                                                class="fas fa-map-marked-alt pl-3"></i></span></strong></h5>
                                <h5 class="mt-3"><strong>Jamshedpur - 35<sup> ℃</sup><i
                                            class="fas fa-temperature-low pl-3"></i></strong></h5>
                                <br>
                                <h5 class="mt-3"><strong>Wind - 15 <span style="font-size:15px;"> kmph</span><i
                                            class="fas fa-wind pl-3"></i></strong></h5>
                                <h5 class="mt-3"><strong>Himidity - 10 <span style="font-size:15px;">%</span><i
                                            class="fas fa-smog pl-3"></i></strong></h5>
                                <h5 class="mt-3"><strong>Rain storm - 5<span style="font-size:15px;"> ml</span><i
                                            class="fas fa-cloud-showers-heavy pl-3"></i></strong></h5>
                            </div>
                        </div>
                        <div class="col-md-2 mt-5 pt-5">
                            <i class="fas fa-cloud"></i>
                        </div>
                    </div>
                </div>


                <!--Main Layout-->
            </div>
        </div>

    </div>
    @include('include.footer')
</body>
<script>
    // $("#header_select").click(function(){
    //     $('#show_select').appendTo('#header_select').show('slow');
    // });

</script>

</html>
