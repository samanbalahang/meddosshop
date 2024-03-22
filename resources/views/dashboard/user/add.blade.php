@extends('dashboard.layouts.master')

@section("extracss")

@endsection

@section("main")
<div class="col-12 col-md-10">
    <div class="container-fluid p-0">
        <div class="row">
            <main class="col-12 col-md-12">
                @include('dashboard.extras.pageSettings')
                <section id="mainForm">
                    <section class="formTitle">
                        <h1 class="mb-0 text-center">
                            <strong>{{__("ایجاد کاربر")}}</strong>
                        </h1>
                     
                    </section>
                    <section class="my-4">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data" id="form">
                                    @csrf
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="userName" name="userName" class="form-control" />
                                        <label class="form-label" for="userName">userName</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="password" id="password" name="password" class="form-control" />
                                        <label class="form-label" for="password">password</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="fname" name="fname" class="form-control" />
                                        <label class="form-label" for="fname">fname</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="lname" name="lname" class="form-control" />
                                        <label class="form-label" for="lname">lname</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="email" id="email" name="email" class="form-control" />
                                        <label class="form-label" for="email">email</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <p class="form-label" for="mainImg">profile</p>
                                        <img src="{{url('/')}}/dashboard/assets/images/sections/image.jpg" alt="image" class="cursor-pointer max-w-100" id="addImage">
                                        <input type="file" id="mainImg" name="mainImg" class="form-control d-none" />
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="checkbox" id="active" name="active" class="form-control d-none" />
                                        <label class="form-label forcheckbox" for="active">فعال</label>
                                        <img class="tick changeable" src="{{url('/')}}/dashboard/assets/images/tick-outline.png" alt="tick" data-src="{{url('/')}}/dashboard/assets/images/tick-outline-01.png" data-checkbox="active">
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <select name="role_id" id="role_id" class="w-100 select-2" style="direction: rtl!important;">
                                        <option value="1" selected>مدیر کل</option>
                                        </select>
                                        <label class="form-label forcheckbox" for="active">Role</label>
                                        </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="submit" id="submit" name="submit" class="form-control bg-base-gold" value="ثبت" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </section>
            </main>
        </div>
    </div>

</div>
@endsection

@section("extrajs")
<script src="{{url('/')}}/dashboard/assets/js/form.js"></script>
<script>
    $(function() {
       $("#addImage").on("click",function(){
            $("#mainImg").click();

        });

        mainImg.onchange = evt => {
        const [file] = mainImg.files
            if (file) {
                addImage.src = URL.createObjectURL(file)
            }
        }
        $("#form").on("submit",function(e){
            var password = $("#password").val()
            if (password.length < 8){
                    Swal.fire({
                            title: "پسورد باید بیش از 8 حرف باشد",
                            }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                        // $(this).focusin();
                    });
                }else{
                    var hasUpperCase = /[A-Z]/.test(password);
                    var hasLowerCase = /[a-z]/.test(password);
                    var hasNumbers = /\d/.test(password);
                    var hasNonalphas = /\W/.test(password);
                    if (hasUpperCase + hasLowerCase + hasNumbers + hasNonalphas < 3){
                       Swal.fire({
                        title: "پسورد باید حروف بزرگ و کوچک و عدد علائم مانند % داشته باشد.",
                       }).then((result) => {
                                // $(this).focusin();
                       });

                    }else{
                       
                        console.log("s");
                        $(this).submit();
                     
                    }
                }
                e.preventDefault();
        });
    })
</script>

@endsection