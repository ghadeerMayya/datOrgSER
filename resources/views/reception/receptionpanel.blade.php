@extends('layouts.app')

@section('content')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="true">إضافة مستفيد</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="wait-tab" data-toggle="tab" href="#waiting" role="tab" aria-controls="waiting" aria-selected="false">قائمة المواعيد</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="finance-tab" data-toggle="tab" href="#finance" role="tab" aria-controls="finance" aria-selected="false">تحويلات مالية</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        {{--Add penifit Form--}}
        <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">اضافة مستفيد</div>
                            <form  method = "post" id="addPenifitForm" enctype="multipart/form-data">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <table class="table_body">
                                    <tr>
                                        <td>الرقم الوطني</td>
                                        <td><input type="text" name='card_id'/></td>

                                    </tr>
                                    <tr>
{{--                                        <td>--------------------------</td>--}}
                                    </tr>
                                    <tr>
                                        <td>الاسم الأول</td>
                                        <td><input type='text' name='first_name' id="f_name" /></td>
                                    <tr>
                                        <td>اسم الأب</td>
                                        <td><input type="text" name='father_name'/></td>
                                    </tr>
                                    <tr>
                                        <td>الاسم الأخير</td>
                                        <td><input type="text" name='last_name'/></td>
                                    </tr>
                                    <tr>
                                        <td>المدينة</td>
                                        <td><input type="text" name='city_name'/></td>
                                    </tr>
                                    <tr>
                                        <td>تاريخ الميلاد</td>
                                        <td><input type="date" name='birth_date'/></td>
                                    </tr>
                                    <tr>
                                        <td>الجنس</td>
                                        <td><select class="selectpicker"  name="gender_select" >    // multiple data-live-search="true">
                                                <option value="m">ذكر</option>
                                                <option value="f">أنثى</option>
                                                <option value="o">غير ذلك</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>الحالة الاجتماعية</td>
                                        <td><select class="selectpicker"  name="Social_status" style="border-color: #00aeef; width: 15rem">
                                                <option value="single">أعزب</option>
                                                <option value="married">متزوج</option>
                                                <option value="divorced">مطلق</option>
                                            </select></td>
                                    </tr>
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

                                    </tr>


                                </table>

                                <div  method = "post" id="Ap_Booking" enctype="multipart/form-data" style="display: none">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    {{--                                <input type = "hidden" name = "penifit_id" value = "<?php echo $_SERVER['current_id']; ?>">--}}
                                    <div class="card">
                                        <div class="card-header">حجز موعد</div>
                                        <table class="table_body">

                                            <tr>
                                                <td>تاريخ الحجز</td>
                                                <td><input type="date" name='Ap_Booking_date'/></td>
                                            </tr>


                                            <tr>
                                                <td>من الساعة </td>
                                                <td><input type="time" name='starts_at'/></td>
                                            </tr>
                                            <tr>
                                                <td>الى الساعة </td>
                                                <td><input type="time" name='ends_at'/></td>
                                            </tr>
                                            <tr>
                                                <td>تحويل إلى </td>
                                                <td><select class="selectpicker" id="trans_select"  name="doctor_select" style="border-color: #00aeef; width: 15rem">
                                                        <option value="AP_A">doctor1</option>
                                                        <option value="AP_B">doctor2</option>
                                                        <option value="AP_C">doctor3</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                    <input type="submit"  id="Booking_btn" class="btn btn-primary" value="تثبيت موعد"/>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>

                            </form>

                            <div class="alert alert-success" id="alert_msg"  style="display: none;">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- Waiting form       --}}
        <div class="tab-pane fade" id="waiting" role="tabpanel" aria-labelledby="waiting-tab">
            <table class="table table-hover" id="waiting_table">
                <thead>
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

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">الاسم الأول</th>
                    <th scope="col">الاسم الأخير</th>
                    <th scope="col">التكلفة المطلوبة</th>
                </tr>
                </thead>
                <tbody>

                {{--                foreach loop to get data from penifits table--}}
                {{--@foreach($waiters as $waiter)--}}
                {{--                <tr>--}}
                {{--                    <th scope="row">{{$waiter_>id}}</th>--}}
                {{--                    <td>{{$waiter_>id}}</td>--}}
                {{--                    <td>{{$waiter_>id}}</td>--}}
                {{--                    <td>{{$waiter_>id}}</td>--}}
                {{--                </tr>--}}
                {{--@endforeach--}}

                </tbody>
            </table>
        </div>

      </div>

    <div class="modal" id="loading" >
        <p><img src="{{url('/images/loading.gif')}}" alt="Image"/> Please Wait</p>
    </div>
@endsection

@section('scripts')



    <script>
        $(document).ajaxStart(function(){
            $('#loading').show();
        }).ajaxStop(function(){
            $('#loading').hide();
        });

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

        ////////////////////////////////////////////////////////////show booking form
        $(document).on('click','#Ap_Booking_button',function (e) {
            e.preventDefault();
            $('#alert_msg').hide();
            var x = document.getElementById("Ap_Booking");
            if (x.style.display === "none") {
                x.style.display = "block";
                getDoctorsList();
            } else {
                x.style.display = "none";
            }

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
        ///////////////////////////////////////////////////////////////////// waiters tab
        $(document).on('click','#wait-tab',function (e) {
            e.preventDefault();
            $('#alert_msg').hide();
            getwaitingusers();
        });

        function getwaitingusers() {
            $(function(){
                $('#waitingTbody').empty();
                $.ajax({
                    url: "{{route('getwaitingusers')}}",
                    type: 'GET',
                    data: { },
                    success: function(response)
                    {
                        $.map(response.data, function(val, i) {
                            // var timstamp= new Date(val.created_at);
                            // timstamp.toLocaleString(undefined, {
                            //     day: 'numeric',
                            //     month: 'numeric',
                            //     year: 'numeric',
                            //     hour: '2-digit',
                            //     minute: '2-digit',
                            // })
                            // var date = timstamp.getDate();
                            // var month = timstamp.getMonth();
                            // var year = timstamp.getFullYear();
                            // var hour=timstamp.getHours();
                            // var minutes=timstamp.getMinutes();
                            // var formattedDate  = date+ "/" + (month+1)  + "/" + year+ "  -- at :  " + hour+ ":" + minutes;
                            // // var userTimezoneOffset = timstamp.getTimezoneOffset() * 60000;
                            // var modifiedTstamp=new Date(timstamp.getTime() - userTimezoneOffset);
                            // timstamp.toLocaleString(undefined, {
                            //     day: 'numeric',
                            //     month: 'numeric',
                            //     year: 'numeric',
                            //     hour: '2-digit',
                            //     minute: '2-digit',
                            // })
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
