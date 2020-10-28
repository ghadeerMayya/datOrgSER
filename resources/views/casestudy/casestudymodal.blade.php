@extends('layouts.app')


@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="true">إضافة مستفيد</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="wait-tab"  data-toggle="tab" href="#waiting" role="tab" aria-controls="waiting" aria-selected="false">قائمة الانتظار</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="finance-tab" data-toggle="tab" href="#finance" role="tab" aria-controls="finance" aria-selected="false">معالجة</a>
        </li>


{{--        <li class="nav-item">--}}
{{--            <div class="search_container">--}}
{{--            <input type="text" class="btn " placeholder="Search" role="tab"><button type="submit" class="btn"><i class="fa fa-search"></i></button>--}}
{{--            </div>--}}
{{--        </li>--}}


    </ul>




{{--    <div class="modal" id="loading" >--}}
{{--        <p><img src="{{url('/images/lo.gif')}}" alt="Image"/> Please Wait</p>--}}
{{--    </div>--}}
{{--    ---------------------------------------------start_tab_1-----------------------------------------------------------}}

    <div class="alert alert-success  " id="alert_msg"  style="display: none;">

    </div>


    <div class="container2">
        <div class="row row-cols-4">
            <div class="text-center ">
                <div class="spinner-border" role="status" id="loading" style="display: none;margin: 3rem;color: #00aeef">
                    <span class="sr-only">Loading...</span>
                </div>
            </div></div></div>



    {{--    <div class="alert alert-success alert-dismissible fade show " id="alert_msg"style="display: none;>--}}
{{--        <p><strong>succsess</strong></strong><i class="fa fa-check-circle"></i> ggggg</p>--}}
{{--        <button type="button" class="close" data-dismiss="alert">&times;</button>--}}
{{--    </div>--}}

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="home-tab">
            <form  method = "post" id="addPenifitForm" enctype="multipart/form-data">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">



                <div class="container">
                    <div class="card">
                        <div class="card-header font_header"  id="header_id">
                            اضافة مستفيد
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 align">
                                    <input type="hidden" id="current_user_id" name="c_user_id"   />
                                    <label class="font_header  ">: الاسم الأول   </label>
                                    <input type='text' name='first_name'  class="form-control right input_border"id="num_fam" />
                                </div>
                                <div class="form-group col-md-6 align">
                                    <label class="font_header ">: الرقم الوطني </label>
                                    <input type='search' name='card_id' class="form-control right input_border" id="card_id_id"  />
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 align">
{{--                                    <input type="hidden" id="current_user_id" name="c_user_id"  />--}}
                                    <label class="font_header ">: الاسم الأخير   </label>
                                    <input type='text' name='last_name'  class="form-control right input_border"id="num_fam" />
                                </div>
                                <div class="form-group col-md-6 align">
                                    <label class="font_header ">: اسم الأب </label>
                                    <input type='text' name='father_name' class="form-control right input_border" id="l_job"  />
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 align">
{{--                                    <input type="hidden" id="current_user_id" name="c_user_id"  />--}}
                                    <label class="font_header ">: تاريخ الميلاد   </label>
                                    <input type='date' name='birth_date'  class="form-control right input_border"id="num_fam" />
                                </div>
                                <div class="form-group col-md-6 align">
                                    <label class="font_header ">: المدينة </label>
                                    <input type='text' name='city_name' class="form-control right input_border" id="l_job"  />
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 align">
{{--                                    <input type="hidden" id="current_user_id" name="c_user_id"  />--}}
                                    <label class="font_header ">: الحالة الاجتماعية    </label>
                                    <select type='date' name='Social_status'  class="form-control right input_border"id="num_fam" >
                                        <option value="single">أعزب</option>
                                        <option value="married">متزوج</option>
                                        <option value="divorced">مطلق</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 align">
                                    <label class="font_header ">: الجنس </label>
                                    <select type='text' name='gender_select' class="form-control right input_border" id="l_job" >
                                        <option value="m">ذكر</option>
                                        <option value="f">أنثى</option>
                                        <option value="o">غير ذلك</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary " id="removeprev"> <svg width="1em" height="1em"  viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                                </svg> اضافة مستفيد       </button>
                            <button type="button" class="btn btn-primary" id="savedata">حفظ البيانات</button>
                            <button type="button" class="btn btn-primary" id="penidit_profile">الصفحة الشخصية للمستفيد</button>
{{--                            <button type="button" class="btn btn-primary" id="Ap_Booking_button2">حجز موعد  </button>--}}
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="Ap_Booking_button" data-whatever="@mdo">حجز موعد جديد</button>
                            <button type="button" class="btn btn-primary" id="searchid">بحث</button>

                        </div>

{{--                        ----------------------------------تصميم حجز الموعد الجديد-------------------------------------------------}}

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header right">

                                        <h5 class="modal-title right" id="exampleModalLabel"> حجز موعد</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group right">
                                                <label for="recipient-name" class="col-form-label">: تاريخ الحجز</label>
                                                <input type="date" class="form-control" name="Ap_Booking_date-name">
                                            </div>
                                            <div class="form-group right">
                                                <label for="message-text" class="col-form-label"> : من الساعة</label>
                                                <input type="time" class="form-control" name="starts_at">
                                            </div>
                                            <div class="form-group right">
                                                <label for="message-text" class="col-form-label"> : الى الساعة</label>
                                                <input type="time" class="form-control" name="ends_at">
                                            </div>
                                            <div class="form-group right">
                                                <label for="message-text" class="col-form-label"> : تحويل الى </label>
                                                <select type="date" class="selectpicker form-control" id="trans_select" name="doctor_select">
                                                    <option value="AP_A">doctor1</option>
                                                    <option value="AP_B">doctor2</option>
                                                    <option value="AP_C">doctor3</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                        <button type="button" class="btn btn-primary" id="Booking_btn"> تثبيت الحجز</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    {{--                        ----------------------------------انتهاء تصميم حجز الموعد الجديد-------------------------------------------------}}


                    {{--                        ----------------------------------بداية تصميم حجز الموعد القديم-------------------------------------------------}}



{{--                    <div  method = "post" id="Ap_Booking" enctype="multipart/form-data" style="display: none">--}}
{{--                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">--}}




{{--                        <div class="card ">--}}
{{--                            <div class="card-header">حجز موعد</div>--}}
{{--                            <table class="table_body">--}}

{{--                                <tr>--}}
{{--                                    <td>تاريخ الحجز</td>--}}
{{--                                    <td><input type="date" name='Ap_Booking_date'/></td>--}}
{{--                                </tr>--}}


{{--                                <tr>--}}
{{--                                    <td>من الساعة </td>--}}
{{--                                    <td><input type="time" name='starts_at'/></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>الى الساعة </td>--}}
{{--                                    <td><input type="time" name='ends_at'/></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>تحويل إلى </td>--}}
{{--                                    <td><select class="selectpicker" id="trans_select"  name="doctor_select" style="border-color: #00aeef; width: 15rem">--}}
{{--                                            <option value="AP_A">doctor1</option>--}}
{{--                                            <option value="AP_B">doctor2</option>--}}
{{--                                            <option value="AP_C">doctor3</option>--}}
{{--                                        </select>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td >--}}
{{--                                        <input type="submit"  id="Booking_btn" class="btn btn-primary" value="تثبيت موعد"/>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            </table>--}}
{{--                        </div>--}}

{{--                    </div>--}}

                    {{--                        ----------------------------------نهاية تصميم حجز الموعد القديم-------------------------------------------------}}











                </div>
            </form>
        </div>



        <div class="tab-pane fade" id="waiting" role="tabpanel" aria-labelledby="waiting-tab">
            <table class="table table-hover" id="waiting_table">
                <thead class="">
                <tr>
                    <th scope="col" >id</th>
                    <th scope="col">الاسم الأول</th>
                    <th scope="col">الاسم الأخير</th>
                    <th scope="col">الجنس</th>
                    <th scope="col">تاريخ الميلاد</th>
                    <th scope="col">تاريخ الحجز</th>
                    <th scope="col">من الساعة</th>
                    <th scope="col">إلى الساعة</th>
                    <th scope="col">محول إلى</th>
                    <th scope="col">محول من</th>
                    <th scope="col">الإجراء</th>
                </tr>
                </thead>

                <tbody id="waitingTbody">

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

{{--------------------------------end_2---------------------------------------------------------}}

        <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab">

        </div>




    </div> {{--this div is the basic / basheer --}}






{{--    <div class="modal" id="loading" >--}}
{{--        <p><img src="{{url('/images/lo.gif')}}" alt="Image"/> Please Wait</p>--}}
{{--    </div>--}}

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
        ///////////////////////////////////////////////////////////save data
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
        /////////////////////////////////////////////////////////////////////// Remove fields
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
        ////////////////////////////////////////////////////////////////////// search id
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
                        else if(data.msg ==='user already exist'){
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
        ////////////////////////////////////////////////////////////show booking form
        $(document).on('click','#Ap_Booking_button',function (e) {
            e.preventDefault();
                getDoctorsList1();
        });
        ///////////////////////////////////////////////////////////////////// waiters tab
        $(document).on('click','#wait-tab',function (e) {
            e.preventDefault();
            getwaitingusers();

        });
        /////////////////////////////////////////////////////////////implement booking
        $(document).on('click','#Booking_btn',function (e) {
            e.preventDefault();
            $('#alert_msg').show();
            $('.alert-success').html("Wait....");
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
        ///////////////////// recieve penifit
        $(document).on('click','.recieve_btn',function (e) {
            e.preventDefault();

            var $current_id=$(this).attr('penifit_id');
            var dataid = {};
            // alert($current_id);
            dataid['current_id'] = $current_id;
            $.ajax({
                    type:'post',
                    enctype:'multipart/form-data',

                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    url:"{{route('getSurvey')}}",
                    data:dataid,


                    // processData:false,
                    //     contentType:false,
                    cache:false,


                    success: function (data) {
                        var thisdata=data.penifit[0];
                        // var returnedData = JSON.parse(data);
                        // $("html").html(response);
                        if(data.redirect){



                            $('.nav-tabs a[href="#finance"]').tab('show');
                            $('#finance').html(data.html).html();
                            /////////////////////////////////////////////////////////////////////// append data
                            $('[name="c_user_id"]').val(thisdata.id);
                            var headertext="";

                            if(thisdata.gender=='m')
                            {
                                headertext="التقييم الأولي للسيد  "+thisdata.first_name+"  "+thisdata.last_name;
                                $('#header_id').html(headertext);
                            }
                            else if(thisdata.gender=='f'){
                                headertext="التقييم الأولي للسيدة  "+thisdata.first_name+"  "+thisdata.last_name;
                                $('#header_id').html(headertext);
                            }
                            else{
                                headertext="التقييم الأولي للسيد/ة  "+thisdata.first_name+"  "+thisdata.last_name;
                                $('#header_id').html(headertext);
                            }
                            getDoctorsList();



                            /*
                                                       $('[name="header"]').val(headertext);
                                                       $('[name="csfirst_name"]').val(thisdata.first_name);
                                                       $('[name="csfather_name"]').val(thisdata.father_name);
                                                       $('[name="cslast_name"]').val(thisdata.last_name);

                             */





                        }

                    },
                    error: function (reject) {
                        alert('Error');
                        $('#error_msg').show();
                        $('#exist_msg').hide();
                        $('#success_msg').hide();
                        $('#nopenifit_msg').hide();
                    }
                }
            );


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
                                '<td>' + val.doctor.name + '</td>' +
                                '<td>' + val.user_booked.name + '</td>' +
                                '<td>' + '<button class="btn recieve_btn" ' +
                                'penifit_id='+val.penifit_booked.id+'>'+' Recieve </button>' + '</td>' +
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

@endsection
