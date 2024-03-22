<!DOCTYPE html>
<html lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.rtl.min.css">
    <link rel="shortcut icon" href="{{url('/')}}/assets/images/Meddos-fav.png" type="image/png">
    <title>Meddos future creation &#x1F538;Design &#x1F538;Branding &#x1F538;Marketing &#x1F538;Construction
        &#x1F538;Events &#x1F538;Style </title>
    <style>
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
        h1{
            text-align: center;
        }
        body {
            overflow: hidden;
        }

        video {
            -o-object-fit: cover;
            object-fit: cover;
        }

        .bg-meddos {
            background: url("{{url('/')}}/assets/images/Meddos-background-1.jpg");
            background-size: cover;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#141e30, #243b55);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            width: 100%;
            padding: 40px;
            background: url("{{url('/')}}/assets/images/Meddos-background-1.jpg");
            background-size: cover;
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
            overflow-y: scroll;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #000;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input,
        .login-box .user-box input:focus,
        .login-box .user-box input:focus-visible
        {
            width: 100%;
            padding: 1rem;
            font-size: 16px;
            color: #000;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #9D0817;
            outline: transparent !important;
            box-shadow: none !important;
            background: transparent !important;
        }
        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:active~label,
        .login-box .user-box input.active~label
         {
            top: -20px;
            left: 0;
            color: #9D0817;
            font-size: 12px;
        }

        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #9D0817;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }

        .login-box a:hover {
            background: #9D0817;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #9D0817,
                0 0 25px #9D0817,
                0 0 50px #9D0817,
                0 0 100px #9D0817;
        }

        .login-box a span {
            position: absolute;
            display: block;
        }

        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #9D0817);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        .login-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #9D0817);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        .login-box a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #9D0817);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }

        .login-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #9D0817);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }
        #message{
            direction: rtl;
            text-align: left;
        }
        .alert{
            direction: rtl;
        }
        .random{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .randomeImg{
            width: 100%;
            position: relative;
            z-index: 2;
            opacity: 0.6;
        }
        .randomnumber{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: absolute;
            font-size: 2rem;
            font-weight: 500;
        }
    </style>
</head>

<body style="height: 100vh;">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-4 h-100 p-0">
                @php
                    date_default_timezone_set("Asia/Tehran"); 
                @endphp
                @if(date('w')%2 ==0)
                    <video src="{{url('/')}}/assets/video/login-2.mp4" autoplay muted loop class="w-100 h-100">
                    </video>
                @else
                    <video src="{{url('/')}}/assets/video/login.mp4" autoplay muted loop class="w-100 h-100">
                    </video>
                @endif
            </div>
            <div class="col-8 bg-meddos h-100 d-flex align-item-center justify-content-center">
                <div class="login-box">
                    <h1>Login/register - {{date('w')}}</h1>
                    @if(isset($_GET["messeage"]))
                        {!! $_GET["messeage"] !!}
                    @endif
                    <form action="{{route('users.store')}}" method="post" id="form">
                        @csrf
                        <div class="user-box">
                            <input type="text" class="form-control" name="userName" id="userName" autocomplete="new-password">
                            <label for="userName">userName</label>
                        </div>
                        <div class="user-box">
                            <input type="password" id="password" class="form-control" name="password"   autocomplete="new-password">
                            <label for="password">password</label>
                            <span style="display: none;" id="message"></span>
                        </div>
                        <div class="user-box d-flex">
                             <input type="number" id="rand" min="1000" class="form-control w-50">
                             <label for="rand">کد روبرو را وارد کنید:</label>
                            <div class="random">
                              <img src="{{url('/')}}/assets/images/Meddos-messy-line.png" alt="Meddos" class="randomeImg">
                                <div class="randomnumber">
                                    {{rand(1000,9999)}}
                                </div>
                            </div>
                        </div>
                        <a href="#" id="Submit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Submit
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var inputs    = document.querySelectorAll("input"); 
        var form      = document.getElementById("form");
        
        inputs.forEach(function(item){
              item.addEventListener("blur",function(){
              this.classList.add("active");
            })
        });
        var Submit       = document.getElementById("Submit");
        var userName     = document.getElementById("userName");
        var thepassword  = document.getElementById("password");
        var randomnumber = document.querySelector(".randomnumber");
        var rand         = document.getElementById("rand");
        var message      = document.getElementById("message");
        Submit.onclick   = function(e){
            if(randomnumber.innerText != rand.value){
                rand.focus();
                message.style.display = "block";
                message.style.color   = "red";
                message.innerText     ="عدد تصادفی برابر نیست!";

            }else{
                var password    = document.getElementById("password").value;
                console.log(findGetParameter("messeage"));
                if(findGetParameter("messeage") != null){
                    window.location.href = "<?= url("/");?>/login";
                }
                if(userName.value != ""){
                    if(password != ""){
                        if(password.length >8){
                            var hasUpperCase    = /[A-Z]/.test(password);
                            var hasLowerCase    = /[a-z]/.test(password);
                            var hasNumbers      = /\d/.test(password);
                            var hasNonalphas    = /\W/.test(password);
                            if (hasUpperCase + hasLowerCase +   hasNumbers + hasNonalphas < 3){
                                thepassword.focus();
                                message.style.display = "block";
                                message.style.color   = "red";
                                message.innerText     ="پسورد باید داری حروف کوچک و بزرگ و اعداد و نماد هایی مانند%$# باشد.";
                            }else{
                                console.log("من اینجام");
                                form.submit();
                            }
                        }else{
                            thepassword.focus();
                            message.style.display = "block";
                            message.style.color   = "red";
                            message.innerText     ="پسورد باید حداقل 8 حرف باشد.";
                        }    
                    }else{
                        thepassword.focus();
                        message.style.display = "block";
                        message.style.color   = "red";
                        message.innerText     ="پسورد خالیه!";
                    }
                }else{
                        thepassword.focus();
                        message.style.display = "block";
                        message.style.color   = "red";
                        message.innerText     ="یوزرنیم و پسورد خالیه!";
                }
            }
            e.preventDefault();

           
        }
        // درصورتیکه از قبل پیامی وجود داشته باشد آن را میخوانیم
        function findGetParameter(parameterName) {
            var result = null,
                tmp = [];
            location.search
                .substr(1)
                .split("&")
                .forEach(function (item) {
                tmp = item.split("=");
                if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
                });
            return result;
        }
    </script>
</body>

</html>