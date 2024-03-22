@extends('dashboard.layouts.master')

@section("extracss")
<meta name="csrf-token" content="{{csrf_token()}}">
<link href="{{url('/')}}/dashboard/assets/css/summernote.min.css" rel="stylesheet">
<script src="{{url('/')}}/dashboard/assets/js/summernote.min.js"></script>
@endsection

@section("main")
<div class="col-12 col-md-10">
    <div class="container-fluid p-0">
        <div class="row">
            <main class="col-12 col-md-9">
                @include('dashboard.extras.pageSettings')
                <section id="mainForm">
                    <section class="formTitle">
                        <h1 class="mb-0 text-center">
                            <strong>{{__("ایجاد محصول")}}</strong>
                        </h1>

                    </section>
                    <section class="my-4">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="" id="tags">
                                    <input type="hidden" value="" id="cats">
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="uri" name="uri" class="form-control" />
                                        <label class="form-label" for="uri">uri</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="title" name="title" class="form-control" />
                                        <label class="form-label" for="title">title</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="post_desc" name="post_desc" class="form-control" />
                                        <label class="form-label" for="post_desc">post_desc</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <label class="form-label" for="content">content</label>
                                        <textarea name="content" id="content" cols="30" rows="10" class="summernote summernote-elemant"></textarea>

                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <a href="#" type="button" id="AddCatFeature" class="btn btn-primary">
                                            Add Features for this cat. (please choose cat from left panel) +
                                        </a>

                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <div class="d-flex w-100 flex-row-reverse">
                                            <div class="col-5">
                                                <p>
                                                    feature name: (like:composition)
                                                </p>
                                                <select name="feature" id="feature" class="w-100 select-2" style="direction: rtl!important;">
                                                </select>
                                            </div>
                                            <div class="col-5">
                                                <p>
                                                    feature value: (like:steel)
                                                </p>
                                                <select name="feature" id="value_of_features" class="w-100 select-2" style="direction: rtl!important;">
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <a href="#" id="addFeature" class="btn btn-warning my-2">+</a>
                                            </div>
                                        </div>
                                        <div id="newfeature">

                                        </div>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <select name="priceType" id="priceType" class="w-100 select-2" style="direction: rtl!important;">
                                        <option value="" disabled selected>
                                            Choose Type Of Price
                                        </option>
                                        <option value="1">
                                            Static Price (no different on each value)
                                        </option>
                                        <option value="1">
                                            Dynamic Price (different on each value)
                                        </option>
                                        </select>
                                        
                                        <label class="form-label" for="priceType">Type Of Price</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5 d-none" id="pricediv">

                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="number" id="sort" name="sort" class="form-control" />
                                        <label class="form-label" for="sort">sort</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <p class="form-label" for="mainImg">main img</p>
                                        <img src="{{url('/')}}/dashboard/assets/images/sections/image.jpg" alt="image" class="cursor-pointer max-w-100" id="addImage">
                                        <input type="file" id="mainImg" name="umainImg" class="form-control d-none" />

                                    </div>

                                    <div class="md-form form-outline form-gold my-5">
                                        <p class="form-label" for="SquareImg">عکس مربعی</p>
                                        <img src="{{url('/')}}/dashboard/assets/images/sections/image.jpg" alt="image" class="cursor-pointer max-w-100" id="addSquareImage">
                                        <input type="file" id="SquareImg" name="uSquareImg" class="form-control d-none" />
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <p class="form-label" for="largeImg">عکس بزرگ زوم</p>
                                        <img src="{{url('/')}}/dashboard/assets/images/sections/image.jpg" alt="image" class="cursor-pointer max-w-100" id="addLargeImgImage">
                                        <input type="file" id="largeImg" name="ulargeImg" class="form-control d-none" />
                                    </div>

                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="submit" id="submit" name="submit" class="form-control bg-base-gold" value="ثبت" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </section>
                <!-- مودال افزودن ویژگی های محصول -->
                <div class="modal fade" id="AddCatFeatureModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-dismiss="AddCatFeatureModal" aria-label="Close" id="CloseAddCatFeatureModal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="bg-primary d-none" id="message">
                                    
                                </div>
                                <form action="#">
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="Feature_name" name="Feature_name" class="form-control" />
                                        <label class="form-label" for="post_desc">Feature_name</label>
                                    </div>
                                    <div class="d-none md-form form-outline form-gold my-5" id="showValues">
                                        <p class="mt-5 pt-5">
                                            آبی
                                            <br>
                                            سبز
                                        </p>
                                        <textarea type="text" id="Feature_values" name="Feature_name" class="form-control"></textarea>
                                        <label class="form-label" for="post_desc">Feature_values</label>
                                    </div>
                                    <a href="#" id="Add_values" class="btn btn-primary w-100 d-block">
                                        ADD values + 
                                    </a>
                                    <a href="#" id="next_feature" class="btn btn-primary w-100 d-none my-5">
                                        Next Feature + 
                                    </a>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include("dashboard.layouts.leftSideMedia")
        </div>
    </div>

</div>
@endsection


@section("extrajs")
<script src="{{url('/')}}/dashboard/assets/js/form.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/summernote-ext-elfinder.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/leftSide-media.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/dropzone.min.js"></script>
<script>
    $(function() {
        var summernote = $(".summernote");
        $(".summernote").summernote({
            height: 300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    sendFile(files[0], editor, welEditable);
                }
            }
        });

        function sendFile(file, editor, welEditable) {
            data = new FormData();
            data.append("file", file);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                data: data,
                type: "POST",
                url: "<?php echo route("summerNoteMedia"); ?>",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    console.log(url);
                    var imgNode = document.createElement('img');
                    var src = URL.createObjectURL(file);
                    console.log(src);
                    imgNode.setAttribute("src", src);
                    imgNode.setAttribute("class", "w-100");
                    imgNode.setAttribute("alt", "alt");
                    $(summernote).summernote('insertNode', imgNode);
                }
            });
        }

        // نمایش ایپوت تایپ فایل با کلیک روی عکس
        $("#addImage").on("click", function() {
            $("#mainImg").click();
        });
        $("#addSquareImage").on("click", function() {
            $("#SquareImg").click();
        });
        $("#addLargeImgImage").on("click", function() {
            $("#largeImg").click();
        });

        mainImg.onchange = evt => {
            var [file] = mainImg.files
            if (file) {
                addImage.src = URL.createObjectURL(file)
            }
        }

        SquareImg.onchange = evt => {
            var [file] = SquareImg.files
            if (file) {
                addSquareImage.src = URL.createObjectURL(file)
            } 
        }

        largeImg.onchange = evt => {
            var [file] = largeImg.files
            if (file) {
                addLargeImgImage.src = URL.createObjectURL(file)
            }
        }

        // ساخت URL
        $("#title").on("focusout", function() {
            if($("#title").val() != "") {
                if ($("#uri").val() == "") {
                    str = $("#title").val();
                    str = str.replace(/\s+/g, '-').toLowerCase();
                    str = str.trim();
                    $("#uri").val(str);
                }
            }
        });

        // ADD Feature
        var AddCatFeature           = document.getElementById("AddCatFeature");
        var AddCatFeatureModal      = document.getElementById("AddCatFeatureModal");
        var CloseAddCatFeatureModal = document.getElementById("CloseAddCatFeatureModal");
        var Feature_name            = document.getElementById("Feature_name");
        var Add_values              = document.getElementById("Add_values");
        var showValues              = document.getElementById("showValues");
        var next_feature            = document.getElementById("next_feature");
        var Feature_values          = document.getElementById("Feature_values");
        var message                 = document.getElementById("message");
        var feature                 = document.getElementById("feature");
        var value_of_features       = document.getElementById("value_of_features");
        var featureArray            = [];
        var value_of_features_object= {};
       
   
// باز کردن مدال انتخاب ویژگی ها برای افزون ویژگی و مقادیر آن
        AddCatFeature.addEventListener("click", function(e) {
            AddCatFeatureModal.classList.toggle("show");
            AddCatFeatureModal.style.display = "block";
            e.preventDefault();
        });


        /* 
            در داخل مدال امکان اضافه کردن مقدار به ویژگی تایپ شده را میدهد
            این دکمه صرفاً یک کلاس نمایش و مخفی شدن را اضافه و حذف میکند
        */
        Add_values.addEventListener("click",function(e){
            e.preventDefault();
            if(Feature_name.value == ""){
                Swal.fire({
                    title: "Feature_name نباید خالی باشد!",
                });
                Feature_name.focus();
            }else{
                showValues.classList.toggle("d-none");
                next_feature.classList.add("d-block");
               next_feature.classList.remove("d-none");
            }
        });


        /* 
            در پنجره مدال بعد از اینکه کاربر مقادیر را وارد کرد امکان
            ذخیره کردن با کمک 
            Ajax  وجود دارد.
        */
        next_feature.addEventListener("click",function(e){
            e.preventDefault();
            Feature_name_val    = Feature_name.value;
            Feature_values_val  = Feature_values.value;
            Feature_values_val  = Feature_values_val.split("\n");
            message.classList.add("d-none");
            for (let index = 0; index < Feature_values_val.length; index++) {
                Feature_values_val[index] = Feature_values_val[index].trim();
            }
            var data = {
                Feature_name    :Feature_name_val,
                Feature_values  :Feature_values_val,
            }
            // اضافه کردن امکان هش به اجکس
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $.ajax({
                data: data,
                type: "POST",
                url: "{{route('cat-feature.store')}}",
                // cache: false,
                // contentType: false,
                // processData: false,
                success: function(url) {
                    message.classList.toggle("d-none");
                    // var doc = new DOMParser().parseFromString(url, "text/xml");
                    message.innerHTML    = url;
                    featureArray.push(Feature_name_val);
                    value_of_features_object ={
                        [Feature_name_val] : Feature_values_val,
                    }
                    console.log(featureArray);
                    console.log(value_of_features_object);
                    Feature_name.value   = "";
                    Feature_values.value = "";
                }
            });
        });
        //  دکمه ضربدر مدال افزون ویژگی ها
        CloseAddCatFeatureModal.addEventListener("click", function() {
            AddCatFeatureModal.classList.toggle("show");
            AddCatFeatureModal.style.display = "none";
            featureArray.forEach(function(feature){
                feature.append("<option>"+feature+"</option>");
            });
            for (let index = 0; index < value_of_features_object.length; index++) {
                const element = value_of_features_object[index];
                value_of_features.append(element);           
            }
        });



        var addFeature = document.getElementById("addFeature");
        var newfeature = document.getElementById("newfeature");
        addFeature.addEventListener("click", function(e) {
            e.preventDefault();
            var flex = document.createElement("div");
            flex.classList.add("d-flex");
            flex.classList.add("my-3");
            flex.classList.add("w-100");
            flex.classList.add("flex-row-reverse");
            var col = document.createElement("div");
            col.classList.add("col-5");
            var select2 = document.createElement("select");
            select2.classList.add("w-100");
            // select2.classList.add("select-2");
            select2.style.direction = "rtl!important";
            var childLength = newfeature.childNodes.length;
            var select2Id = `feature_${childLength}`;
            select2.id = select2Id;
            select2.setAttribute("name", "feature");
            var col2 = document.createElement("div");
            col2.classList.add("col-5");
            var input = document.createElement("input");
            input.classList.add("form-control");
            input.setAttribute("name", "feature_value");
            input.setAttribute("type", "text");
            input.id = `feature_value_${childLength}`;
            col.append(select2);
            col2.append(input);
            flex.append(col);
            flex.append(col2);
            console.log(newfeature.childNodes.length);
            newfeature.append(flex);
            var target = document.getElementById(select2Id);
        });

    });
</script>

@endsection