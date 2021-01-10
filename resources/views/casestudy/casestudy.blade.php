@extends('layouts.app')

<link href="{{ url('css/right6.css') }}" rel="stylesheet">
<link href="{{ url('css/font.css') }}" rel="stylesheet">
{{--<link href="{{ url('css/alert.css') }}" rel="stylesheet">--}}

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <div id="wrapper" class="toggled" style="margin-top: 5rem">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="shadow-lg" style="border-radius:.25rem;">
            <ul class="sidebar-nav "style="font-size: 1.5vh">
                <div class="row">
                    <div class="col">
                        <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical"style="width: 100%;">
                            <a class="list-group-item list-group-item-action active " id="add-tab" data-toggle="tab" href="#add" data-toggle="pill" role="tab" aria-controls="v-pills-home" aria-selected="true" style="border: none">اضافة مستفيد</a>
                            <a class="list-group-item list-group-item-action" id="wait-tab"  data-toggle="tab" href="#waiting" role="tab" aria-controls="v-pills-profile" aria-selected="false"style="border: none">قائمة الانتظار</a>
                            <a class="list-group-item list-group-item-action" id="userprofile"  data-toggle="tab" href="#finance" role="tab" aria-controls="v-pills-profile" aria-selected="false"style="border: none">صفحتي الشخصية </a>

                            {{--                            <a class="list-group-item list-group-item-action" id="side_money_tab" data-toggle="pill" href="#side_money" role="tab" aria-controls="v-pills-messages" aria-selected="false"style="border: none">التحويلات المالية</a>--}}
{{--                            <a class="list-group-item list-group-item-action" id="side_work_tab" data-toggle="pill" href="#side_work" role="tab" aria-controls="v-pills-settings" aria-selected="false"style="border: none">أوقات العمل</a>--}}
{{--                            <a class="list-group-item list-group-item-action" id="side_edit_tab" data-toggle="pill" href="#side_edit" role="tab" aria-controls="v-pills-settings" aria-selected="false"style="border: none">تعديل البيانات </a>--}}

                        </div>

                    </div>


                </div>
            </ul>

        </div>


    <div class="tab-content" id="myTabContent">

        {{--Add penifit Form--}}
        <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">



            <div class="tab-pane fade show active" id="add" role="tabpanel" >

                <div class="col" >

                    <div class="card shadow-lg" style="border: none"  >
                        <div class="card-body"style="text-align: right">
                            <div class="row">
                                <div class="col">
                                    <form  method = "post" id="addPenifitForm" enctype="multipart/form-data">
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                        {{--                                new--}}
                                        <h5 class="card-title" style="text-align: right;font-size: 1.9vh;"><i class="fa fa-plus" aria-hidden="true"style="padding-left: 1rem;padding-right: 1rem;color: #00aeef"></i>اضافة مستفيد</h5>
                                        <hr>

                                        <div class="form-row" style="direction: rtl">


{{--newForm--}}
                                            <form class="row g-3">
                                                <div class="col-md-6">
                                                    <label class="form-label"> الرقم الوطني</label>
{{--                                                    <input type="search" class="form-control shadow-sm" id='card_id_id' name='card_id' >--}}
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control shadow-sm " style="border-radius: 0" name='card_id' id="card_id_id">
                                                        <button class="btn  btn_bas shadow-lg" type="button" style="border-radius: 0" id="searchid" >بحث</button>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label  class="form-label">الاسم الأول</label>
                                                    <input type="text" class="form-control shadow-sm" style="border-radius: 0" name='first_name' id="f_name" >
                                                </div>

                                                <br>  <br>  <br>  <br>

                                                <div class="col-md-6">
                                                    <label  class="form-label">اسم الأب </label>
                                                    <input type="text" class="form-control shadow-sm" name='father_name'style="border-radius: 0" >
                                                </div>
                                                <div class="col-md-6">
                                                    <label  class="form-label">الاسم الأخير</label>
                                                    <input type="text" class="form-control shadow-sm" name='last_name'style="border-radius: 0"  >
                                                </div>

                                                <br>  <br>  <br>  <br>

                                                <div class="col-md-6">
                                                    <label  class="form-label">المدينة  </label>
                                                    <input type="text" class="form-control shadow-sm"name='city_name'style="border-radius: 0" >
                                                </div>
                                                <div class="col-md-6">
                                                    <label  class="form-label">تاريخ الميلاد </label>
                                                    <input  type="date" class="form-control shadow-sm" name='birth_date'style="border-radius: 0" >
                                                </div>

                                                <br>  <br>  <br>  <br>

                                                <div class="col-md-6">
                                                    <label  class="form-label">الجنس  </label>
                                                    <select class="custom-select shadow-sm" name="gender_select" style="border-radius: 0" >
                                                        <option selected disabled value="">اختيار...</option>
                                                        <option value="m">ذكر</option>
                                                        <option value="f">أنثى</option>
                                                        <option value="o">غير ذلك</option>
                                                    </select>                                                </div>
                                                <div class="col-md-6">
                                                    <label  class="form-label "">الحالة الاجتماعية  </label>
                                                    <select class="custom-select shadow-sm" name="Social_status">
                                                        <option selected disabled value="">اختيار...</option>
                                                        <option value="single">أعزب</option>
                                                        <option value="married">متزوج</option>
                                                        <option value="divorced">مطلق</option>
                                                    </select>                                                </div>

                                                <br>  <br>  <br>  <br>  <br>

                                                <div class="col-12">
                                                    <hr>
                                                    <br>

                                                </div>

{{--            EndNewForm--}}

                                        </div>


                                        <div class="form-row"style="z-index: 1">

                                            <div class=" alert-success shadow " id="alert_msg"  style="display: none;z-index:1 ">

                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col">
                                                <button type="button" id="savedata"  class="btn btn-primary  shadow btn_bas" style="font-size: 12px;border-radius: 0">حفظ البيانات</button>
                                                <button type="button" id="removeprev" class="btn btn-primary shadow btn_bas"style="font-size: 12px;border-radius: 0">إضافة مستفيد جديد</button>
{{--                                                <button type="button" id="searchid" class="btn btn-primary shadow btn_bas"style="font-size: 12px;border-radius: 0">بحث</button>--}}
                                                <button type="button" class="btn btn-primary shadow btn_bas" id="Ap_Booking_button" style="font-size: 12px;border-radius: 0" data-toggle="modal" data-target="#myModal">حجز موعد</button>
                                                <button type="button"  id="penidit_profile" class="btn btn-primary shadow btn_bas"style="font-size: 12px;border-radius: 0" >الصفحة الشخصية للمستفيد</button>

                                            </div>
                                        </div>

                                </div>






                                <div class="col " style="padding-top: 15rem" >
                                    {{--                                    2 of 2--}}

{{--                                    <div  method = "post" class="" id="Ap_Booking" enctype="multipart/form-data" >--}}
{{--                                        <div class="row shadow" >--}}
{{--                                            <div class="col">--}}
{{--                                                <h5 class="card-title" style="text-align: right;font-size: 1.4vh;"><i aria-hidden="true"style="padding-left: 1rem;padding-right: 1rem;padding-top:2rem;color: #00aeef"></i>حجز موعد </h5>--}}
{{--                                                <hr>--}}

{{--                                                <div class="form-row">--}}
{{--                                                    <div class="col-md-3 mb-3">--}}
{{--                                                        <label>تاريخ الحجز</label>--}}
{{--                                                        <input  type="date" class="form-control"  name='Ap_Booking_date' >--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="form-row">--}}
{{--                                                    <div class="col-md-3 mb-3">--}}
{{--                                                        <label>من الساعة</label>--}}
{{--                                                        <input  type="time" class="form-control"  name='starts_at' >--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="form-row">--}}
{{--                                                    <div class="col-md-3 mb-3">--}}
{{--                                                        <label>الى الساعة</label>--}}
{{--                                                        <input  type="time" class="form-control"  name='ends_at' >--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}


{{--                                                <div class="form-row">--}}
{{--                                                    <div class="col-md-3 mb-3">--}}
{{--                                                        <label>تحويل الى </label>--}}
{{--                                                        <select class="form-control" id="trans_select" name="doctor_select" aria-label="Default select example">--}}
{{--                                                            <option selected>Open this select menu</option>--}}
{{--                                                            <option value="AP_A">doctor1</option>--}}
{{--                                                            <option value="AP_B">doctor2</option>--}}
{{--                                                            <option value="AP_C">doctor3</option>--}}
{{--                                                        </select>--}}

{{--                                                        <br>--}}


{{--                                                        <input type="submit"  id="Booking_btn" class="btn btn-primary" value="تثبيت موعد"/>--}}


{{--                                                    </div>--}}





                                                <div class="alert alert-success" id="alert_msg"  style="display: none;">

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
            </div>
        </div>


                        {{--modal--}}
                        <div class="container">
{{--                            <h2>Modal Example</h2>--}}
                            <!-- Trigger the modal with a button -->
{{--                            <button type="button" class="btn btn-info btn-lg" id="Ap_Booking_button" data-toggle="modal" data-target="#myModal">Open Modal</button>--}}

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <div  method = "post" class="" id="Ap_Booking" enctype="multipart/form-data" >

                                    <!-- Modal content-->
                                    <div class="modal-content"style="direction: rtl">
                                        <div class="modal-header"style="direction: rtl">
                                            <button type="button" class="close"  data-dismiss="modal">&times;</button>

                                            <h4 class="modal-title" > حجز موعد</h4>
                                        </div>
                                        <div class="modal-body">
                                                <div class="form-row">
{{--                                                    <div class="col-md-3 mb-3">--}}
                                                        <label>تاريخ الحجز</label>
                                                        <input  type="date" class="form-control" id="Ap_Booking_date_id" name='Ap_Booking_date' >
{{--                                                    </div>--}}
                                                </div>

                                                <div class="form-row">
{{--                                                    <div class="col-md-3 mb-3">--}}
                                                        <label>من الساعة</label>
                                                        <input  type="time" class="form-control"  name='starts_at' >
{{--                                                    </div>--}}
                                                </div>

                                                <div class="form-row">
{{--                                                    <div class="col-md-3 mb-3">--}}
                                                        <label>الى الساعة</label>
                                                        <input  type="time" class="form-control"  name='ends_at' >
{{--                                                    </div>--}}
                                                </div>


                                                <div class="form-row">
{{--                                                    <div class="col-md-3 mb-3">--}}
                                                        <label>تحويل الى </label>
                                                        <select class="form-control" id="trans_select" name="doctor_select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="AP_A">doctor1</option>
                                                            <option value="AP_B">doctor2</option>
                                                            <option value="AP_C">doctor3</option>
                                                        </select>


{{--                                                    </div>--}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  id="Booking_btn" class="btn btn_bas shadow" data-dismiss="modal" style="border-radius: 0">تثبيت موعد</button>
{{--                                            <button type="submit"  id="Booking_btn" class="btn btn-primary" value="تثبيت موعد"/>--}}

                                        </div>
                                    </div>

                                </div>

                                        </div>

                        {{--modal--}}

                        {{--                                                    <script>--}}
                        {{--                                                        // Example starter JavaScript for disabling form submissions if there are invalid fields--}}
                        {{--                                                        (function() {--}}
                        {{--                                                            'use strict';--}}
                        {{--                                                            window.addEventListener('load', function() {--}}
                        {{--                                                                // Fetch all the forms we want to apply custom Bootstrap validation styles to--}}
                        {{--                                                                var forms = document.getElementsByClassName('needs-validation');--}}
                        {{--                                                                // Loop over them and prevent submission--}}
                        {{--                                                                var validation = Array.prototype.filter.call(forms, function(form) {--}}
                        {{--                                                                    form.addEventListener('submit', function(event) {--}}
                        {{--                                                                        if (form.checkValidity() === false) {--}}
                        {{--                                                                            event.preventDefault();--}}
                        {{--                                                                            event.stopPropagation();--}}
                        {{--                                                                        }--}}
                        {{--                                                                        form.classList.add('was-validated');--}}
                        {{--                                                                    }, false);--}}
                        {{--                                                                });--}}
                        {{--                                                            }, false);--}}
                        {{--                                                        })();--}}
                        {{--                                                    </script>--}}



                        <div class="modal" id="loading" style="z-index: 1">
                            <p><img src="{{url('/images/loading2.gif')}}" alt="Image"/> </p>

                        </div>





                    </div>
                </div>
            </div>




        </div>
        {{--                                endNew--}}
        {{--
                                            <tr>

                                                <td>--------------------------</td>
                                            </tr>

                                        </table>

                                        <table>
                                            <tr>
                                                <td colspan = '1'>
                                                    <input type="submit" id="savedata" class="btn btn-primary" value="حفظ البيانات"/>
                                                </td>

                                                <td colspan = '3'>
                                                    <input type="submit" id="removeprev" class="btn btn-primary" value="إضافة مستفيد جديد"/>
                                                </td>
                                                <td colspan = '2'>
                                                    <input type="submit" id="searchid" class="btn btn-primary" value="بحث"/>
                                                </td>
                                                <td colspan = '4'>
                                                    <input type="submit"  id="Ap_Booking_button" class="btn btn-primary" value="حجز موعد"/>

                                                </td>
                                                <td colspan = '5'>
                                                    <input type="submit"  id="penidit_profile" class="btn btn-primary" value="الصفحة الشخصية للمستفيد"/>

                                                </td>

                                            </tr>


                                        </table>

                                        <div  method = "post" id="Ap_Booking" enctype="multipart/form-data" style="display: none">
        {{--                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">--}}
        {{--                                    --}}{{--                                <input type = "hidden" name = "penifit_id" value = "<?php echo $_SERVER['current_id']; ?>">--}}




        {{-- Waiting form       --}}


{{--            new--}}

        <div class="tab-pane fade" id="waiting" role="tabpanel" aria-labelledby="waiting-tab">
            {{--            modal--}}



            {{--            modal--}}



            {{--                    <div class="col">--}}
            {{--                        <div class="card shadow" style="border: none">--}}
            {{--                            <div class="card-body"style="text-align: right">--}}
            {{--                                <table class="table table-hover" id="waiting_table" style="font-size: 10px">--}}
            {{--                                    <thead>--}}
            {{--                                    <tr>--}}
            {{--                                        <th scope="col">#</th>--}}
            {{--                                        <th scope="col">الاسم الأول</th>--}}
            {{--                                        <th scope="col">الاسم الأخير</th>--}}
            {{--                                        <th scope="col">الجنس</th>--}}
            {{--                                        <th scope="col">تاريخ الميلاد</th>--}}
            {{--                                        <th scope="col">تاريخ الحجز</th>--}}
            {{--                                        <th scope="col">من الساعة</th>--}}
            {{--                                        <th scope="col">إلى الساعة</th>--}}
            {{--                                        <th scope="col">محول إلى</th>--}}
            {{--                                        <th scope="col">محول من</th>--}}
            {{--                                    </tr>--}}
            {{--                                    </thead>--}}
            {{--                                    <tbody id="waitingTbody">--}}

            {{--                                    --}}{{--                                foreach loop to get data from penifits table--}}

            {{--                                    --}}{{--                @foreach($waiters as $waiter)--}}
            {{--                                    --}}{{--                                <tr>--}}
            {{--                                    --}}{{--                                    <th scope="row">{{$waiter_>id}}</th>--}}
            {{--                                    --}}{{--                                    <td>{{$waiter_>id}}</td>--}}
            {{--                                    --}}{{--                                    <td>{{$waiter_>id}}</td>--}}
            {{--                                    --}}{{--                                    <td>{{$waiter_>id}}</td>--}}
            {{--                                    --}}{{--                                </tr>--}}
            {{--                                    --}}{{--                @endforeach--}}



            {{--                                    </tbody>--}}
            {{--                                </table>--}}

            <style>
                table{
                    width:100%;
                }
                #example_filter{
                    float:right;
                }
                #example_paginate{
                    float:right;
                    padding-top: 4rem;
                }
                label {
                    display: inline-flex;
                    margin-bottom: .5rem;
                    margin-top: .5rem;

                }

            </style>
            <div class="container shadow"style="margin-top: 5rem;">
                <div class="col " >

                    <div class="card " style="border: none"  >
                        <div class="card-body"style="text-align: right">
                            <div class="row">

                    <table id="waiting_table" class="table table-hover" style="width:100%;">
                        <thead>
                        <tr>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الاسم الأول</th>
                            <th scope="col">الاسم الأخير</th>
                            <th scope="col">الجنس</th>
                            <th scope="col">تاريخ الميلاد</th>
                            <th scope="col">تاريخ الحجز</th>
                            <th scope="col">من الساعة</th>
                            <th scope="col">إلى الساعة</th>
                            <th scope="col">محول إلى</th>
                            <th scope="col">محول من</th>
                        </tr>
                        </thead>
                        <tbody id="waitingTbody">
                        </tbody>
                    </table>





                </div></div></div>


{{--            endNew--}}
                {{--                                foreach loop to get data from penifits table--}}

                {{--                @foreach($waiters as $waiter)--}}
                {{--                                <tr>--}}
                {{--                                    <th scope="row">{{$waiter_>id}}</th>--}}
                {{--                                    <td>{{$waiter_>id}}</td>--}}
                {{--                                    <td>{{$waiter_>id}}</td>--}}
                {{--                                    <td>{{$waiter_>id}}</td>--}}
                {{--                                </tr>--}}
                {{--                @endforeach--}}



                </tbody>
            </table>
        </div>
        {{-- finance form       --}}
        <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab">

        </div>
    </div>

    <div class="modal" id="loading" >
        <p><img src="{{url('/images/loading.gif')}}" alt="Image"/> Please Wait</p>
    </div>

@endsection

@section('scripts')

    <script>

        ///////////////////////////////////////////////init ajax
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ajaxStart(function(){
            $('#loading').show();
        }).ajaxStop(function(){
            $('#loading').hide();
        });
        ////////////////////////////////////////////////////////////////////////save data
        $(document).on('click','#savedata',function (e) {
            e.preventDefault();
            var addPenifitFormData=new FormData($('#addPenifitForm')[0]);
            //  var sex_select = $('#sex_select').find(":selected").text();
            $.ajax({
                    type:'post',
                    enctype:'multipart/form-data',
                    url:"{{route('savepenifit')}}",
                    data:addPenifitFormData,
                    processData:false,
                    contentType:false,
                    cache:false,
                    success: function (data) {
                        if(data.msg === 'saved and added to log'){
                            $('#alert_msg').show();
                            $('.alert-success').html(data.msg);

                        }
                        else if(data.msg ==='user already exist'){
                            $('#alert_msg').show();
                            $('.alert-success').html(data.msg);
                        }
                        else if(data.msg ==='user already exist added to log list'){
                            $('#alert_msg').show();
                            $('.alert-success').html(data.msg);
                        }
                        else{
                            $('#alert_msg').show();
                            $('.alert-success').html(data.msg);
                        }
                    },error: function (reject) {
                        alert('Error');
                        $('#alert_msg').show();
                        $('.alert-success').html(data.msg);
                    }
                }
            );
        });
        ////////////////////////////////////////////////////////////////////////Remove fields
        $(document).on('click','#removeprev',function (e) {
            e.preventDefault();

            var x = document.getElementById("Ap_Booking");
            x.style.display = "none";
            // Add remove fields
            $('[name="card_id"]').val('');
            $('[name="first_name"]').val('');
            $('[name="father_name"]').val('');
            $('[name="last_name"]').val('');
            $('[name="city_name"]').val('');
            $('[name="birth_date"]').val('');
            $('#alert_msg').hide();

        });
        ////////////////////////////////////////////////////////////////////////search id
        $(document).on('click','#searchid',function (e) {
            e.preventDefault();
            // Add search and fill fields
            var addPenifitFormData=new FormData($('#addPenifitForm')[0]);
            $.ajax({
                    type:'post',
                    enctype:'multipart/form-data',
                    url:"{{route('searchid')}}",
                    data:addPenifitFormData,
                    processData:false,
                    contentType:false,
                    cache:false,
                    success: function (data) {
                        if(data.msg === 'no penifit found'){
                            $('#alert_msg').show();
                            $('.alert-success').html(data.msg);
                            /////////////////////////////////// empty fields
                            $('[name="first_name"]').val('');
                            $('[name="father_name"]').val('');
                            $('[name="last_name"]').val('');
                            $('[name="city_name"]').val('');
                            $('[name="birth_date"]').val('');
                        }
                        else if(data.msg ='المستخدم موجود'){
                            $('#alert_msg').show();
                            $('.alert-success').html(data.msg);
                            ///////////////////////////////////////user found fill in grabs
                            $('[name="first_name"]').val(data.penifit[0].first_name);
                            $('[name="father_name"]').val(data.penifit[0].father_name);
                            $('[name="last_name"]').val(data.penifit[0].last_name);
                            $('[name="city_name"]').val(data.penifit[0].city_name);
                            $('[name="birth_date"]').val(data.penifit[0].birth_date);
                            $('[name="gender_select"]').val(data.penifit[0].gender);
                            $('[name="Social_status"]').val(data.penifit[0].social_status);
                        }
                        else{
                            $('#alert_msg').show();
                            $('.alert-success').html(data.msg);
                        }
                    },error: function (reject) {
                        $('#alert_msg').show();
                        $('.alert-success').html(data.msg);
                    }
                }
            );
        });
        ///////////////////////////////////////////////////////////////////////penifit profile
        $(document).on('click','#penidit_profile',function (e) {
            e.preventDefault();
            var card_id = document.getElementById("card_id_id").value;
            //  var sex_select = $('#sex_select').find(":selected").text();
            var url = "{{route('profile', '')}}"+"/"+card_id;

            window.location=url;

        });
        //////////////////////////////////////////////////////////////////////show booking form
        $(document).on('click','#trans_select',function (e) {
            e.preventDefault();
            // $('#alert_msg').hide();
            // var x = document.getElementById("Ap_Booking");
            // if (x.style.display === "none") {
            //     x.style.display = "block";
                getDoctorsList1();
            // } else {
            //     x.style.display = "none";
            // }

        });
        //////////////////////////////////////////////////////////////////////waiters tab
        $(document).on('click','#wait-tab',function (e) {
            e.preventDefault();
            getwaitingusers();

        });
        //////////////////////////////////////////////////////////////////////implement booking
        $(document).on('click','#Booking_btn',function (e) {
            e.preventDefault();
            $('#alert_msg').show();
            // $('.alert-success').html("Wait....");
            var addPenifitFormData=new FormData($('#addPenifitForm')[0]);
            $.ajax({
                    type:'post',
                    enctype:'multipart/form-data',
                    url:"{{route('booking')}}",
                    data:addPenifitFormData,
                    processData:false,
                    contentType:false,
                    cache:false,
                    success: function (data) {
                        var msg=data.msg +'   '+ data.penifit;
                        $('#alert_msg').show();
                        $('.alert-success').html(msg);

                    },error: function (reject) {
                        alert('Error');
                        $('#alert_msg').show();
                        $('.alert-success').html(data.msg);
                    }
                }
            );

        });
        //////////////////////////////////////////////////////////////////////recieve penifit
        $(document).on('click','.recieve_btn',function (e) {
            e.preventDefault();

            var card_id=$(this).attr('c_card_id');

            var url = "{{route('profile', '')}}"+"/"+card_id;

            window.location=url;
        });

        $(document).on('click','#userprofile',function (e) {
            e.preventDefault();
//  var sex_select = $('#sex_select').find(":selected").text();
            var url = "{{route('userprofile', '')}}"+"/"+ {{Auth::user()->id}};

            window.location=url;

        });
        function getwaitingusers() {
            $(function(){

                $('#waitingTbody').empty();
                {{--$.ajax({--}}
                {{--    url:"{{route('routecasheclear')}}",--}}
                {{--    type: 'GET',--}}
                {{--    success: function(response) {--}}
                {{--        alert('Route cashe cleared');--}}
                {{--    },--}}
                {{--    error: function (reject) {--}}
                {{--        alert('Error');--}}
                {{--    }--}}
                {{--})--}}

                $.ajax({
                    url: "{{route('getspecificwaitinguser')}}",
                    type: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: { },
                    success: function(response)
                    {
                        $.map(response.data, function(val, i) {
                            var gender='غير ذلك';
                            if (val.penifit_booked.gender=='m'){
                                gender='ذكر';
                            }
                            else if(val.penifit_booked.gender=='f'){
                                gender='أنثى';
                            }
                            else {
                                gender='غير ذلك';
                            }
                            var htm = '<tr>' +
                                '<td>' + val.penifit_booked.id + '</td>' +
                                '<td>' + val.penifit_booked.first_name + '</td>' +
                                '<td>' + val.penifit_booked.last_name + '</td>' +
                                '<td>' + gender + '</td>' +
                                '<td>' + val.penifit_booked.birth_date + '</td>' +
                                '<td>' + val.booking_date + '</td>' +
                                '<td>' + val.starts_at + '</td>' +
                                '<td>' + val.ends_at + '</td>' +
                                '<td>' + val.user_booked.name + '</td>' +
                                '<td>' + '<button class="btn recieve_btn" ' +
                                'c_card_id='+val.penifit_booked.card_id+'>'+' Open profile </button>' + '</td>' +
                                '</tr>';
                            $('#waitingTbody').append(htm);
                        })

                        // $('#waitingTbody').html(response);
                    },error: function (reject) {
                        alert('Error');
                    }
                });

            });

        }

        function getDoctorsList() {
            $(function(){
                $.ajax({
                    url: "{{route('getdoctorslist')}}",
                    type: 'GET',
                    data: { },
                    success: function(response)
                    {

                        $("#trans_select1").empty();
                        var options = '';
                        for (var i = 0; i < response.itemlist.length; i++) {
                            options += '<option value="' + response.itemlist[i].id + '">' + response.itemlist[i].name + '</option>';
                        }
                        $("#trans_select1").append(options);


                    },error: function (reject) {
                        alert('Error');
                    }
                });
            });

        }

        function getDoctorsList1() {
            $(function(){
                $.ajax({
                    url: "{{route('getdoctorslist')}}",
                    type: 'GET',
                    data: { },
                    success: function(response)
                    {

                        $("#trans_select").empty();
                        var options = '';
                        for (var i = 0; i < response.itemlist.length; i++) {
                            options += '<option value="' + response.itemlist[i].id + '">' + response.itemlist[i].name + '</option>';
                        }
                        $("#trans_select").append(options);


                    },error: function (reject) {
                        alert('Error');
                    }
                });
            });

        }


    </script>

                {{-- alert--}}
                <script>

                    $( "#searchid" ).click(function() {
                        $( "div.alert-success" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
                    });


                </script>
                <script>

                    $( "#Booking_btn" ).click(function() {
                        $( "div.alert-success" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
                    });


                </script>
                <script>

                    $( "#savedata" ).click(function() {
                        $( "div.alert-success" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
                    });


                </script>
{{--                <script>--}}

{{--                    $( "#Ap_Booking_button" ).click(function() {--}}
{{--                        $( "div.alert-success" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );--}}
{{--                    });--}}


{{--                </script>--}}
                {{--alert--}}
                <script src="{{ asset('js/right.js') }}" type="text/javascript"></script>
                <script src="{{ asset('js/alert.js') }}" type="text/javascript"></script>
    {{--end-alert--}}



@endsection
