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
                                            <h4 class="card-title">Sign up</h4>
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
                                                                <small id="helpId1" class="form-text text-muted ml-1" style="display:none;">Cannot be empty or have special-character and numbers</small>



                                                            <input type="email" class="form-control mt-5" name="email_value"
                                                                id="email" aria-describedby="helpId"
                                                                placeholder="Email">
                                                                <small id="helpId2" class="form-text text-muted ml-1" style="display:none;">Cannot be empty and should be in proper format</small>


                                                            <input type="text" class="form-control mt-5" name="number"
                                                                id="number" aria-describedby="helpId"
                                                                placeholder="Number" maxlength="10">
                                                                <small id="helpId3" class="form-text text-muted ml-1" style="display:none;">Cannot be empty</small>


                                                            <input type="password" class="form-control mt-5"
                                                                name="password" id="password" aria-describedby="helpId"
                                                                placeholder="Password">
                                                                <small id="helpId4" class="form-text text-muted ml-1" style="display:none;">Cannot be empty </small>


                                                            <input type="password" class="form-control mt-5"
                                                                name="cnf_password" id="cnf_password"
                                                                aria-describedby="helpId"
                                                                placeholder="Conform Password">
                                                                <small id="helpId5" class="form-text text-muted ml-1" style="display:none;">Cannot be empty</small>
                                                                <small id="helpId6" class="form-text text-muted ml-1" style="display:none;">Paddword did not mach</small>

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
    var check_pass=true;
    var check_name=true;
    var check_email=true;
    var check_number=true;
    var check_pssword=true;
    var check_cnf_password=true;

    $("#name").keypress(function () {
        name();
    });
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
            $("#helpId1").css("border-color", "red");
            $("#helpId1").show("fast");
            check_name=false;


            
        } else {
            $("#name").css("border-color", "grey");
            $("#helpId1").hide("fast");
            check_name=true;


        }
    }

    $("#email").blur(function () {
        email();
    });
    $("#email").keypress(function () {
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
            $("#helpId2").css("border-color", "red");
            $("#helpId2").show("fast");
            check_email=false;
        } else {
            $("#email").css("border-color", "grey");
            $("#helpId2").hide("fast");
            check_email=true;



        }
    }
    $("#number").blur(function () {
        number();
    });
    $("#number").keypress(function () {
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
            $("#helpId3").css("border-color", "red");
            $("#helpId3").show("fast");
            check_number=false;
        } else {
            $("#number").css("border-color", "grey");
            $("#helpId3").hide("fast");
            check_number=true;


        }
    }
    $("#password").blur(function () {
        password();
    });
    $("#password").keypress(function () {
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
            $("#helpId4").css("border-color", "red");
            $("#helpId4").show("fast");
            check_pssword=false;

        } else {
            $("#password").css("border-color", "grey");
            check_pass = password;
            $("#helpId4").hide("fast");
            check_pssword=true;




        }
    }
    $("#cnf_password").blur(function () {
        cnf_password();
    });
    $("#cnf_password").keypress(function () {
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
            $("#helpId5").css("border-color", "red");
            $("#helpId5").show("fast");
            $("#helpId6").hide("fast");
            check_cnf_password=false;

        } else if (cnf_password == check_pass) {
            $("#cnf_password").css("border-color", "grey");
            $("#helpId5").hide("fast");
            $("#helpId6").hide("fast");
            check_cnf_password=true;



        } else {
            $("#cnf_password").css("border-color", "red");
            $("#helpId6").css("border-color", "red");
            $("#helpId6").show("fast");
            $("#helpId5").hide("fast");
            check_cnf_password=false;
        }

    }

    $("#submit").click(function(){
            
            name();
            password();
            email();
            number();
            cnf_password();

            if((check_name==true)&&(check_number==true)&&(check_email==true)&&(check_pssword==true)&&(check_cnf_password==true))
            {
                return true;
            }
            else{
                return false;
            }
        });

</script>
</body>

</html>
