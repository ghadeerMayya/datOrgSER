@extends('layouts.app')

@section('content')

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="true">إضافة مستفيد</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="wait-tab" data-toggle="tab" href="#waiting" role="tab" aria-controls="waiting" aria-selected="false">قائمة الانتظار</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="finance-tab" data-toggle="tab" href="#finance" role="tab" aria-controls="finance" aria-selected="false">تحويلات مالية</a>
        </li>
    </ul>

{{--    ------------------------------------------test-------------------------------------------------------------}}





{{--    ---------------------------------------------------------------------------------------}}

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header input-field ">اضافة مستفيد</div>

                                          {{--Add penifit Form--}}

                            <form  method = "post" id="addPenifitForm" enctype="multipart/form-data">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <table class="table_body">
                                    <tr>
                                        <td><input type="text" name='card_id'/></td>
                                        <td>الرقم الوطني</td>

                                    </tr>

                                    <tr>
                                        <td><input type='text' name='first_name' id="f_name" /></td>
                                        <td>الاسم الأول</td>



                                    <tr>
                                        <td><input type="text" name='father_name'/></td>
                                        <td>اسم الأب</td>

                                    </tr>
                                    <tr>
                                        <td><input type="text" name='last_name'/></td>
                                        <td>الاسم الأخير</td>

                                    </tr>
                                    <tr>
                                        <td><input type="text" name='city_name'/></td>
                                        <td>المدينة</td>

                                    </tr>
                                    <tr>
                                        <td><input type="date" name='birth_date'/></td>
                                        <td>تاريخ الميلاد</td>

                                    </tr>
                                    <tr>

                                        <td><select class="selectpicker"   name="sex_select" >    // multiple data-live-search="true">
                                                <option value=""></option>
                                                <option value="m">ذكر</option>
                                                <option value="f">أنثى</option>
                                                <option value="o">غير ذلك</option>
                                            </select></td>
                                        <td>الجنس</td>
                                    </tr>
                                    <tr>

                                        <td><select class="selectpicker"  name="Social_status" ">
                                                <option value=""></option>
                                                <option value="m">أعزب</option>
                                                <option value="f">متزوج</option>
                                                <option value="o">مطلق</option>
                                            </select></td>
                                        <td>الحالة الاجتماعية</td>
                                    </tr>
                                    <tr>

                                        <td><select class="selectpicker"  name="Convert_to">
                                                <option value=""></option>
                                                <option value="m">doctor1</option>
                                                <option value="f">doctor2</option>
                                                <option value="o">doctor3</option>
                                            </select></td>
                                        <td>تحويل الى</td>
                                    </tr>


                                </table>

                            </form>








                                <tr>
                                    <td colspan = '1'>
                                        <input type="submit" id="addtowait" class="btn btn-primary" value="إضافة إلى قائمة الانتظار"/>
                                    </td>

                                    <td colspan = '3'>
                                        <input type="submit" id="removeprev" class="btn btn-primary" value="إضافة مستفيد جديد"/>
                                    </td>
                                    <td colspan = '2'>
                                        <input type="submit" id="searchid" class="btn btn-primary" value="بحث"/>
                                    </td>
                                    <td colspan = '4'>
                                        <input type="submit"  id="Ap_Booking_button" onclick="myFunction()"  class="btn btn-primary" value="حجز موعد"/>

                                                          {{--javacsript_Ap_Booking--}}
                                        <script>
                                            function myFunction() {
                                                var x = document.getElementById("Ap_Booking");
                                                if (x.style.display === "none") {
                                                    x.style.display = "block";
                                                } else {
                                                    x.style.display = "none";
                                                }
                                            }
                                        </script>
                                                        {{--end_javacsript_Ap_Booking--}}
                                    </td>

                                </tr>






                            <form  method = "post" id="Ap_Booking" enctype="multipart/form-data" style="display: none">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <div class="card">
                                    <div class="card-header">حجز موعد</div>
                                    <table class="table_body">

                                        <tr>
                                            <td>تاريخ الحجز</td>
                                            <td><input type="date" name='Ap_Booking_date'/></td>
                                        </tr>

                                        <tr>
                                            <td>اسم الطبيب </td>
                                            <td><select class="selectpicker"  name="Ap_Booking_date_convert_to" >
                                                    <option value="AP_A">doctor1</option>
                                                    <option value="AP_B">doctor2</option>
                                                    <option value="AP_C">doctor3</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>من الساعة </td>
                                            <td><input type="time" name='Ap_Booking_date'/></td>
                                        </tr>
                                        <tr>
                                            <td>الى الساعة </td>
                                            <td><input type="time" name='Ap_Booking_date'/></td>
                                        </tr>
                                        <td colspan = '3'>
                                            <input type="submit" id="booking" class="btn btn-primary" value="حجز"/>
                                        </td>





                                    </table>
                                </div>
                           </div>
                    </div>
                </div>
            </div>

        </div>


                                <div class="tab-content" id="Ap_Booking" style="display: none">
                                    <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8">
                                                    <div class="card">
                                                        <div class="card-header">حجز موعد</div>


                                                        <table>

                                                            <tr>
                                                                <td>تاريخ الحجز</td>
                                                                <td><input type="date" name='Ap_Booking_date'/></td>
                                                            </tr>

                                                            <tr>
                                                                <td>اسم الطبيب </td>
                                                                <td><select class="selectpicker"  name="Ap_Booking_date_convert_to" style="border-color: #00aeef; width: 15rem">
                                                                        <option value="AP_A">doctor1</option>
                                                                        <option value="AP_B">doctor2</option>
                                                                        <option value="AP_C">doctor3</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>من الساعة </td>
                                                                <td><input type="time" name='Ap_Booking_date'/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>الى الساعة </td>
                                                                <td><input type="time" name='Ap_Booking_date'/></td>
                                                            </tr>
                                                            <td colspan = '3'>
                                                                <input type="submit" id="booking" class="btn btn-primary" value="حجز"/>
                                                            </td>
                                                        </table>
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
                    <th scope="col">تاريخ التحويل</th>
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


{{--                            ---------------------------------------------}}





                            <div class="alert alert-success" id="success_msg" style="display: none;">
                                تم الحفظ بنجاح

                            </div>
                            <div class="alert alert-failed" id="error_msg" style="display: none;">
                                الرجاء إعادة المحاولة
                            </div>
                            <div class="alert alert-failed" id="exist_msg" style="display: none;">
                                الرقم الوطني موجود فعلا يرحى الضفط على زر البحث
                            </div>
                            <div class="alert alert-failed" id="nopenifit_msg" style="display: none;">
                                الرقم الوطني غير موجود سابقا
                            </div>
                            <div class="alert alert-failed" id="existadded_msg" style="display: none;">
                                موجود سابقا وتمت إضافته إلى قائمة الانتظار
                            </div>





    <div class="modal" id="loading" >
        <p><img src="{{url('/images/lo.gif')}}" alt="Image" style="  font-family: 'Almarai', sans-serif;"/>  </p>
    </div>

@endsection

@section('scripts')



    <script>
        $(document).ajaxStart(function(){
            $('#loading').show();
        }).ajaxStop(function(){
            $('#loading').hide();
        });
        /////////////////////////////////////////////////////////////////////// add penifit and add to wait if exist
        $(document).on('click','#addtowait',function (e) {
            e.preventDefault();
            var addPenifitFormData=new FormData($('#addPenifitForm')[0]);
            //  var sex_select = $('#sex_select').find(":selected").text();
            $.ajax({
                    type:'post',
                    enctype:'multipart/form-data',
                    url:"{{route('addtowaitinglist')}}",
                    data:addPenifitFormData,
                    processData:false,
                    contentType:false,
                    cache:false,
                    success: function (data) {
                        if(data.msg === 'saved and added to log'){
                            $('#success_msg').show();
                            $('#exist_msg').hide();
                        }
                        else if(data.msg ==='user already exist'){
                            $('#exist_msg').show();
                            $('#success_msg').hide();
                        }
                        else if(data.msg ==='user already exist added to log list'){
                            $('#existadded_msg').show();
                            $('#success_msg').hide();
                        }
                        else{
                            $('#error_msg').show();
                            $('#exist_msg').hide();
                            $('#success_msg').hide();
                        }
                    },error: function (reject) {
                        alert('Error');
                        $('#error_msg').show();
                        $('#exist_msg').hide();
                        $('#success_msg').hide();
                    }
                }
            );
        });
        /////////////////////////////////////////////////////////////////////// Get log should move to c.s
        /////////////////////////////////////////////////////////////////////// Remove fields
        $(document).on('click','#removeprev',function (e) {
            e.preventDefault();
            // Add remove fields
            $('[name="card_id"]').val('');
            $('[name="first_name"]').val('');
            $('[name="father_name"]').val('');
            $('[name="last_name"]').val('');
            $('[name="city_name"]').val('');
            $('[name="birth_date"]').val('');
            $('#error_msg').hide();
            $('#exist_msg').hide();
            $('#success_msg').hide();
            $('#nopenifit_msg').hide();
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
                            $('#nopenifit_msg').show();
                            $('#exist_msg').hide();
                            $('#success_msg').hide();
                            $('[name="first_name"]').val('');
                            $('[name="father_name"]').val('');
                            $('[name="last_name"]').val('');
                            $('[name="city_name"]').val('');
                            $('[name="birth_date"]').val('');
                        }
                        else if(data.msg ==='user already exist'){
                            $('#exist_msg').hide();
                            $('#success_msg').hide();
                            $('#nopenifit_msg').hide();
                            ///////////////////////////////////////user found fill in grabs
                            $('[name="first_name"]').val(data.penifit[0].first_name);
                            $('[name="father_name"]').val(data.penifit[0].father_name);
                            $('[name="last_name"]').val(data.penifit[0].last_name);
                            $('[name="city_name"]').val(data.penifit[0].city_name);
                            $('[name="birth_date"]').val(data.penifit[0].birth_date);
                            $('[name="sex_select"]').val(data.penifit[0].sex);
                        }
                        else{
                            $('#error_msg').show();
                            $('#exist_msg').hide();
                            $('#success_msg').hide();
                            $('#nopenifit_msg').hide();
                        }
                    },error: function (reject) {
                        alert('Error');
                        $('#error_msg').show();
                        $('#exist_msg').hide();
                        $('#success_msg').hide();
                        $('#nopenifit_msg').hide();
                    }
                }
            );
        });
        ///////////////////////////////////////////////////////////////////// waiters tab
        $(document).on('click','#wait-tab',function (e) {
            e.preventDefault();
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
                            var timstamp= new Date(val.created_at);
                            timstamp.toLocaleString(undefined, {
                                day: 'numeric',
                                month: 'numeric',
                                year: 'numeric',
                                hour: '2-digit',
                                minute: '2-digit',
                            })
                            var date = timstamp.getDate();
                            var month = timstamp.getMonth();
                            var year = timstamp.getFullYear();
                            var hour=timstamp.getHours();
                            var minutes=timstamp.getMinutes();
                            var formattedDate  = date+ "/" + (month+1)  + "/" + year+ "  -- at :  " + hour+ ":" + minutes;
                            // var userTimezoneOffset = timstamp.getTimezoneOffset() * 60000;
                            // var modifiedTstamp=new Date(timstamp.getTime() - userTimezoneOffset);
                            // timstamp.toLocaleString(undefined, {
                            //     day: 'numeric',
                            //     month: 'numeric',
                            //     year: 'numeric',
                            //     hour: '2-digit',
                            //     minute: '2-digit',
                            // })
                            var gender='غير ذلك';
                            if (val.sex=='m'){
                                gender='ذكر';
                            }
                            else if(val.sex=='f'){
                                gender='أنثى';
                            }
                            else {
                                gender='غير ذلك';
                            }
                            var htm = '<tr>' +
                                '<td>' + val.id + '</td>' +
                                '<td>' + val.first_name + '</td>' +
                                '<td>' + val.last_name + '</td>' +
                                '<td>' + gender + '</td>' +
                                '<td>' + val.birth_date + '</td>' +
                                '<td>' + formattedDate + '</td>' +
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
    </script>

@endsection
