<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.addons')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            height: 15%;
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


        ::-webkit-scrollbar {
            width: 10px;
        }


        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }


        ::-webkit-scrollbar-thumb {
            background: #888;
        }


        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .fa-cash-register {
            font-size: 150px;
            align-items: center;
            flex-direction: inherit;
            justify-content: center;
            margin-top: 80px;
            margin-left: 190px;
        }

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <html lang="en" class="full-height">

                @include('include.header')
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <i class="fas fa-cash-register"></i>
                            <h1 style="text-align:center;font-size:70px;margin-top:20px;"><strong>Regester</strong></h1>
                        </div>
                        <div class="col-md-5">
                            <div class="card">
                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="card-title">Sign UP</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{url('/regester/regester_account')}}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for=""></label>
                                                            <input type="text" class="form-control" name="name"
                                                                id="name" aria-describedby="helpId"
                                                                placeholder="Full name">



                                                            <input type="email" class="form-control mt-5" name="email_value"
                                                                id="email" aria-describedby="helpId"
                                                                placeholder="Email">


                                                            <input type="number" class="form-control mt-5" name="number"
                                                                id="number" aria-describedby="helpId"
                                                                placeholder="Number">


                                                            <input type="password" class="form-control mt-5"
                                                                name="password" id="password" aria-describedby="helpId"
                                                                placeholder="Password">


                                                            <input type="password" class="form-control mt-5"
                                                                name="cnf_password" id="cnf_password"
                                                                aria-describedby="helpId"
                                                                placeholder="Conform Password">

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 mt-3 ml-2">
                                                        <button type="submit" class="btn btn-outline-primary"
                                                            id="submit">Submit</button>

                                                    </div>
                                                    <div class="col-md-5 mt-3">

                                                    </div>
                                                    <div class="col-md-2 mt-3">
                                                        <a href="{{url('/')}}" type="button"
                                                            class="btn btn-outline-info">Back</a>

                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>
<script>
    var check_pass;

    $("#name").blur(function () {
        name();
    });
    $("#submit").click(function () {
        name();
    });

    function name() {

        var name = document.getElementById("name").value;

        console.log(name);
        if (name == "") {
            $("#name").css("border-color", "red");
            return false;
        } else {
            $("#name").css("border-color", "grey");


        }
    }

    $("#email").blur(function () {
        email();
    });
    $("#submit").click(function () {
        email();
    });

    function email() {
        var email = document.getElementById("email").value;

        console.log(email);
        if (email == "") {
            $("#email").css("border-color", "red");
            return false;
        } else {
            $("#email").css("border-color", "grey");


        }
    }
    $("#number").blur(function () {
        number();
    });
    $("#submit").click(function () {
        number();
    });

    function number() {
        var number = document.getElementById("number").value;

        console.log(number);
        if (number == "") {
            $("#number").css("border-color", "red");
            return false;
        } else {
            $("#number").css("border-color", "grey");


        }
    }
    $("#password").blur(function () {
        password();
    });
    $("#submit").click(function () {
        password();
    });

    function password() {
        var password = document.getElementById("password").value;

        console.log(password);
        if (password == "") {
            $("#password").css("border-color", "red");
            return false;

        } else {
            $("#password").css("border-color", "grey");
            check_pass = password;


        }
    }
    $("#cnf_password").blur(function () {
        cnf_password();
    });
    $("#submit").click(function () {
        cnf_password();
    });

    function cnf_password() {
        var cnf_password = document.getElementById("cnf_password").value;

        console.log(check_pass);
        if (cnf_password == "") {
            $("#cnf_password").css("border-color", "red");
            return false;
        } else if (cnf_password == check_pass) {
            $("#cnf_password").css("border-color", "grey");


        } else {
            $("#cnf_password").css("border-color", "red");
            return false;
        }
    }

</script>
</body>

</html>
