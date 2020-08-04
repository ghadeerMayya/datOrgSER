@extends('layouts.app')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="true">إضافة مستفيد</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="wait-tab"  data-toggle="tab" href="#waiting" role="tab" aria-controls="waiting" aria-selected="false">قائمة الانتظار</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="finance-tab" data-toggle="tab" href="#finance" role="tab" aria-controls="finance" aria-selected="false">معالجة</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Add penifit</div>

                            {{--Add penifit Form--}}
                            <form  method = "post" id="addPenifitForm" enctype="multipart/form-data">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <table>
                                    <tr>
                                        <td>الرقم الوطني</td>
                                        <td><input type="text" name='card_id'/></td>
                                        <td colspan = '2'>
                                            <input type="submit" id="searchid" class="btn btn-primary" value="بحث"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>--------------------------</td>
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
                                        <td><select class="selectpicker"  name="sex_select">    // multiple data-live-search="true">
                                                <option value="m">ذكر</option>
                                                <option value="f">أنثى</option>
                                                <option value="o">غير ذلك</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>--------------------------</td>
                                    </tr>


                                    <tr>
                                        <td colspan = '1'>
                                            <input type="submit" id="addtowait" class="btn btn-primary" value="إضافة إلى قائمة الانتظار"/>
                                        </td>

                                        <td colspan = '3'>
                                            <input type="submit" id="removeprev" class="btn btn-primary" value="إضافة مستفيد جديد"/>
                                        </td>
                                    </tr>

                                </table>

                            </form>
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

        ///////////////////// recieve penifit
        $(document).on('click','.recieve_btn',function (e) {
            e.preventDefault();

            var $current_id=$(this).attr('penifit_id');
            var dataid = {};
            dataid['current_id'] = $current_id;
            $.ajax({
                    type:'post',
                    enctype:'multipart/form-data',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                    url:"{{route('csrecieve')}}",
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
                           $('[name="csfirst_name"]').val(thisdata.first_name);
                           $('[name="csfather_name"]').val(thisdata.father_name);
                           $('[name="cslast_name"]').val(thisdata.last_name);





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
                    url: "{{route('getwaitingusers')}}",
                    type: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
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
                                '<td>' + '<button class="recieve_btn" ' +
                                'penifit_id='+val.id+'>'+' Recieve </button>' + '</td>' +
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
