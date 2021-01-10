@extends('layouts.app')


@section('content')

<style>


    body {
        background: #F1F3FA;
    }

</style>

    <div class="container-fluid" style="padding-top: 5rem">

        <form method="get" id="profile_form">

        <div class="row" style="direction:rtl;">
          <div class="col-lg-3 col-md-12" >{{--  25%--}}


              <div class="col shadow"style="background:white;">


                    <div class="profile-userpic" style="text-align: center;padding-top: 1rem;">
                        <img src="{{url('/images/profile.png')}}" id="profile_form_image" style="border-radius: 50%" />
                        <br><br>
                        <input type="text"  style="border-bottom: 1px solid #F1F3FA;text-align: center" id="profile_form_full_name" class="form-control" value="يكتب هنا المعرف الكامل" />

                    </div>

                  <br>
                  <br>
<hr>
                  <div class="container-fluid" style="padding-bottom: 1rem;margin-top: 3rem;width: 100%">
                      <div class="row" style="direction:rtl;">
                    <div class="col-md">

                        <div class="list-group right " id="v-pills-tab" role="tablist" aria-orientation="vertical"style="padding-top:2rem;padding-bottom: 2rem">
                            <a class="list-group-item list-group-item-action active" data-toggle="pill" href="#info" role="tab" aria-controls="v-pills-home" aria-selected="true">معلومات أساسية</a>
                            <a class="list-group-item list-group-item-action" id="records_tab" data-toggle="pill" href="#Records" role="tab" aria-controls="v-pills-profile" aria-selected="false">سجل المستفيد</a>
                            <a class="list-group-item list-group-item-action" data-toggle="pill" href="#Operations" role="tab" aria-controls="v-pills-messages" aria-selected="false">العمليات</a>
                            <a class="list-group-item list-group-item-action" data-toggle="pill" href="#mony_Transfers" role="tab" aria-controls="v-pills-settings" aria-selected="false">التحويلات المالية</a>
                            <a class="list-group-item list-group-item-action" id="finance_log" data-toggle="pill" href="#finance_amounts" role="tab" aria-controls="v-pills-settings" aria-selected="false">مستحقات مالية</a>
                        </div>

                    </div>

                    </div>

                  </div>
              </div>
          </div>



{{--            <div class="container" >--}}

           <div class="col-lg-9 col-md-12  " style=";width: 100%" >{{-- 75%--}}

                <div class="profile-content shadow">
                    <div class="tab-content">

{{--                        ----------------------المعلومات الأساسية------------------------}}

                        <div class="tab-pane fade show active"  id="info" role="tabpanel" aria-labelledby="v-pills-home-tab" style="background-color: white;">

                          <form>
                                  <div class="input-group mb-3" style="padding-top: 1rem;background-color: white">


                            <div class="col-md"style="background:white;">
                            <ul class="list-group" style="float: right;padding: 2rem">
                                <li class="list-group-item right">
                                    <div class="row">
                                        <div class="col">
                                            <p class="form-control"  style="border: none" > معرف المستفيد</p>
                                        </div>

                                        <div class="col">
                                            <input type="text"  style="border: none" id="profile_form_info_id" class="form-control" value="{{$card_id ?? ''}}"/>
                                            <input type = "hidden" id = "penifit_id" value = "">
                                        </div>

                                    </div>
                                </li>

                                <li class="list-group-item right">
                                    <div class="row">
                                        <div class="col">
                                            <p class="form-control"  style="border: none;" >الاسم الأول</p>
                                        </div>
                                        <div class="col">
                                            <input id="profile_form_info_firstName" style="border: none" class="form-control" value=""/>

                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item right">
                                    <div class="row">
                                        <div class="col">
                                            <p class="form-control"  style="border: none" >اسم الأب</p>
                                        </div>
                                        <div class="col">
                                            <input id="profile_form_info_father"  style="border: none" class="form-control" value=""/>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item right">
                                    <div class="row">
                                        <div class="col">
                                            <p class="form-control"  style="border: none" >الاسم الأخير</p>
                                        </div>

                                        <div class="col">
                                            <input id="profile_form_info_lastName"  style="border: none" class="form-control" value=""/>

                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item right">
                                    <div class="row">
                                        <div class="col">
                                            <p class="form-control"  style="border: none" >الحالة الاجتماعية</p>
                                        </div>

                                        <div class="col">
                                            <input id="profile_form_info_social_status"  style="border: none" class="form-control" value=""/>

                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item right">
                                    <div class="row">
                                        <div class="col">
                                            <p class="form-control"  style="border: none" >مكان الولادة</p>
                                        </div>

                                        <div class="col">
                                            <input id="profile_form_info_city_name"  style="border: none" class="form-control" value=""/>

                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item right">
                                    <div class="row">
                                        <div class="col">
                                            <p class="form-control"  style="border: none" >تاريخ الميلاد</p>
                                        </div>

                                        <div class="col">
                                            <input id="profile_form_info_birth_date"  style="border: none" class="form-control" value=""/>

                                        </div>
                                    </div>
                                </li>



                                {{--                            <li class="list-group-item"></li>--}}
                            </ul>

                            </div>


</form>

                        </div>
                    </div>

{{-----------------------------------------------------نهايو المعلومات الأساسية-----------------------------------------------}}



                        {{----------------------------------------------------- سجل المستفيد-----------------------------------------------}}

                        <div class="tab-pane fade" id="Records" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="col-md"style="background:white;padding: 2rem">
                            <table class="table table-hover table_pro " id="profile_form_Records_table" >
                                <thead class="thead_pro">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">المستخدم</th>
                                    <th scope="col">نوع العملية</th>
                                    <th scope="col">وصف العملية</th>
                                    <th scope="col">تاريخ العملية</th>
                                    <th scope="col">تفاصيل</th>


                                </tr>
                                </thead>

                                <tbody id="LogBody">

                                </tbody>
                            </table>
                            </div>
                        </div>

{{---------------------------------نهاية سجل المستفيد------------------------------------------------------}}



{{-- -----------------------------------العميات------------------------------------                       --}}

                        <div class="tab-pane fade" id="Operations" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="col-md"style="background:white;padding: 2rem">

                            <div class="col-md" style="width: 50%">
                            <div class="input-group mb-3" style="padding-top: 1rem">
                                <div class="input-group-prepend">
{{--                                    <button class="btn btn btn-primary" style="width: 105px;" type="button">تحويل</button>--}}
                                </div>

                            </div>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
{{--                                    <button class="btn btn btn-primary" style="width: 105px;" type="button">اختيار</button>--}}
                                </div>
                                <select class="custom-select" id="profile_form_Operations_questionnaire" aria-label="Example select with button addon">
                                    <option selected>اختيار استبيان...</option>
                                    <option value="1">التقييم الأولي</option>
                                    <option value="2">التوحد عند الأطفال</option>
                                    <option value="3">إضافة الاستبيانات المتبقية</option>
                                </select>
                            </div>

                            <div class="form-group right">
                                <button class="btn btn btn-primary shadow"id="profile_form_getSurvey_btn" style="width: 150px;" type="button">فتح الاستبياني</button>
                            </div>

                            </div>




                            <div id="Operations_expand" class="">


                            </div>

                        </div>
                        </div>
{{--------------------------------------نهاية العمليات-------------------------------}}


{{--                        -------------------------------------التحويلات المالية --------------------------------------}}


                        <div class="tab-pane fade"  id="mony_Transfers" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="col-md"style="background:white;padding: 2rem;direction: rtl">


{{--                                new--}}
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" id="profile_form_mony_Transfers_paid" placeholder="المبلغ المطلوب" aria-label="First name">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="profile_form_mony_discount_average" placeholder="نسبة الحسم %" aria-label="Last name">
                                    </div>
                                </div>

{{--            endNew                    --}}
{{--                            <ul class="list-group"style="float: right;text-align: right">--}}
{{--                                <li class="list-group-item">--}}
{{--                                    <div class="row">--}}
{{--                                            <p class="label_basic right_center" > المبلغ المطلوب </p>--}}
{{--                                        </div>--}}
{{--                                        <div class="col">--}}
{{--                                            <input type="number"  style="border: none"id="profile_form_mony_Transfers_paid" class="form-control" />--}}



{{--                                </li>--}}
{{--                                <li class="list-group-item">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col">--}}
{{--                                            <p class="label_basic right_center" > نسبة الحسم % </p>--}}

{{--                                        <div class="col">--}}
{{--                                            <input type="number" style="border: none" id="profile_form_mony_discount_average" class="form-control" />--}}

{{--                                        </div>--}}


{{--                                </li>--}}

{{--                                <br>--}}

{{--                                <div class="form-group right">--}}
{{--                                    <button class="btn btn-primary  shadow" style="width: 105px;" type="button" id="profile_form_mony_Transfers_btn">تحويل لاستلام مبلغ</button>--}}




{{--                            </ul>--}}
                            <br>
                                <div class="form-group right">
                          <button class="btn btn-primary  shadow" style="width: 200px;" type="button" id="profile_form_mony_Transfers_btn">تحويل لاستلام مبلغ</button>


                                </div>



                        </div>
                        </div>
{{--                        ---------------------------------------نهاية التحويلات المالية--------------------------------------}}


{{--                        -----------------مستحقات مالية -----------------------------------------}}

                        <div class="tab-pane fade"  id="finance_amounts" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="col-md"style="background:white;padding: 2rem">

                            <table class="table table-hover table_pro " id="finance_Records_table" >
                                <thead class="thead_pro">
                                <tr>
                                    <th scope="col">محول من</th>
                                    <th scope="col">المبلغ الأساسي</th>
                                    <th scope="col">نسبة الحسم %</th>
                                    <th scope="col">المبلغ المتبقي</th>
                                    <th scope="col">تاريخ الاستحقاق</th>
                                    <th scope="col">تفاصيل</th>
                                </tr>
                                </thead>

                                <tbody id="financeLogBody">

                                </tbody>
                            </table>



                        </div>


 {{--                        -----------------نهاية  مستحقات مالية -----------------------------------------}}

                    </div>
                </div>
           </div>

        </div>
        </form>
    </div>
{{--<div class="modal" id="loading" >--}}
{{--    <p><img src="{{url('/images/loading2.gif')}}" alt="Image"/> Please Wait</p>--}}
{{--</div>--}}


<div class="modal" id="loading" style="z-index: 1">
    <p><img src="{{url('/images/loading2.gif')}}" alt="Image"/> </p>

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

        $(window).on('load', function () {

            $('#loading').show();
            fillProfileData();
            $('#loading').hide();

        });

        $(document).on('click','#records_tab',function (e) {
            e.preventDefault();
            // $('#alert_msg').hide();
            getProfileLog();
        });

        $(document).on('click','#finance_log',function (e) {
            e.preventDefault();
            // $('#alert_msg').hide();
            getFinanceLog();
        });

        $(document).on('click','#profile_form_getSurvey_btn',function (e) {
            e.preventDefault();

            var $current_id=document.getElementById("penifit_id").value;
            var $selected_survey=document.getElementById("profile_form_Operations_questionnaire").value;

            var dataid = {};
            // alert($current_id);
            dataid['current_id'] = $current_id;
            dataid['selected_survey'] = $selected_survey;
            $.ajax({
                    type:'post',
                    enctype:'multipart/form-data',

                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    url:"{{route('getSurvey')}}",
                    data:dataid,

                    cache:false,
                    success: function (data) {
                        var thisdata=data.penifit[0];
                        // var returnedData = JSON.parse(data);
                        // $("html").html(response);
                        if(data.redirect){
                            // $('.nav-tabs a[href="#finance"]').tab('show');
                            $('#Operations_expand').html(data.html).html();
                            /////////////////////////////////////////////////////////////////////// append data
                            $('[name="c_user_id"]').val(thisdata.id);
                            $('[name="c_user_id2"]').val(thisdata.id);

                            if ($selected_survey=='1')
                            {
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
                                getDoctorsList_initial_evaluation();
                            }

                        }

                    },
                    error: function (reject) {
                        alert('Error');
                    }
                }
            );


        });

        $(document).on('click','#profile_form_mony_Transfers_btn',function (e) {
            e.preventDefault();

            var $current_id=document.getElementById("penifit_id").value;
            var $amount_to_be_paid=document.getElementById("profile_form_mony_Transfers_paid").value;
            var $discount_average=document.getElementById("profile_form_mony_discount_average").value;

            var dataToPass = {};
            // alert($current_id);
            dataToPass['customer_id'] = $current_id;
            dataToPass['amount_to_be_paid'] = $amount_to_be_paid;
            dataToPass['discount_average'] = $discount_average;
            $.ajax({
                    type:'post',
                    enctype:'multipart/form-data',

                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    url:"{{route('saveFinanceTransfer')}}",
                    data:dataToPass,

                    cache:false,
                    success: function (data) {
                        alert('saved');


                    },
                    error: function (reject) {
                        alert('Error');
                    }
                }
            );


        });

        //////////////////////////////////////////////////////////////////////recieve penifit
        $(document).on('click','.open_process_btn',function (e) {
            e.preventDefault();



            ///////////////////////////////////////////////////////////////////////////
             alert('we are upgrading this command');





        });

        $(document).on('click','.open_finance_page_btn',function (e) {
            e.preventDefault();



            ///////////////////////////////////////////////////////////////////////////
            alert('we are upgrading this command');





        });
        $(document).on('click','.open_finance_card_btn',function (e) {
            e.preventDefault();

            var finance_card_id=$(this).attr('finance_card_id');

            alert(finance_card_id);

            var url = "{{route('financecard', '')}}"+"/"+finance_card_id;

            window.location=url;
            ///////////////////////////////////////////////////////////////////////////

        });

        function fillProfileData() {
            $(function(){
                // var card_id = document.getElementById("profile_form_about_id").value;
                var selectedId = $('#profile_form_info_id').val();
                $.ajax({
                    url: "{{route('getProfileData')}}",
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data:
                        { 'card_id' : selectedId },
                    success: function(data)
                    {
                        var thisdata=data.penifit[0];
                        var social_status="";
                        var fullname=thisdata.first_name+' '+thisdata.father_name+' '+thisdata.last_name;

                        $('#profile_form_info_firstName').val(thisdata.first_name);
                        $('#profile_form_info_father').val(thisdata.father_name);
                        $('#profile_form_info_lastName').val(thisdata.last_name);
                        $('#penifit_id').val(thisdata.id);
                        $('#profile_form_info_city_name').val(thisdata.city_name);
                        $('#profile_form_info_birth_date').val(thisdata.birth_date);
                        $('#profile_form_full_name').val(fullname);


                        if(thisdata.social_status=='single'){
                            social_status="أعزب";
                        }
                        else if(thisdata.social_status=='married'){
                            social_status="متزوج";
                        }
                        else if(thisdata.social_status=='divorced'){
                            social_status="مطلق/ة";
                        }
                        else{
                            social_status="غير معروف";

                        }
                        $('#profile_form_info_social_status').val(social_status);


                    },error: function (reject) {
                        alert('Error');
                    }
                });

            });

        }

        function getDoctorsList_initial_evaluation() {
            $(function(){
                $.ajax({
                    url: "{{route('getdoctorslist')}}",
                    type: 'GET',
                    data: { },
                    success: function(response)
                    {

                        $("#trans_select_initial_eval").empty();
                        var options = '';
                        for (var i = 0; i < response.itemlist.length; i++) {
                            options += '<option value="' + response.itemlist[i].id + '">' + response.itemlist[i].name + '</option>';
                        }
                        $("#trans_select_initial_eval").append(options);


                    },error: function (reject) {
                        alert('Error');
                    }
                });
            });

        }

        function getProfileLog() {
            $(function(){
                $('#LogBody').empty();
                var current_id=document.getElementById("penifit_id").value;

                $.ajax({
                    url: "{{route('getProfileLog')}}",
                    type: 'GET',
                    data: {'current_id' : current_id },
                    success: function(response)
                    {
                        $.map(response.data, function(val, i) {
                            // var gender='غير ذلك';
                            // if (val.penifit_booked.gender=='m'){
                            //     gender='ذكر';
                            // }
                            // else if(val.penifit_booked.gender=='f'){
                            //     gender='أنثى';
                            // }
                            // else {
                            //     gender='غير ذلك';
                            // }


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
                            var formattedDate  = date+ "/" + (month+1)  + "/" + year+ "  -- :  " + hour+ ":" + minutes;



                            var htm = '<tr>' +
                                '<td>' + val.id + '</td>' +
                                '<td>' + val.user.name + '</td>' +
                                '<td>' + val.process_type + '</td>' +
                                '<td>' + val.process_name + '</td>' +
                                '<td>' + formattedDate + '</td>' +
                                '<td>' + '<button class="btn open_process_btn" ' +
                                'c_customer_id='+val.customer_id+'+>'+' Open process </button>' + '</td>' +
                                '</tr>';
                            $('#LogBody').append(htm);
                        })
                        // $('#waitingTbody').html(response);
                    },error: function (reject) {
                        alert('Error');
                    }
                });
            });
        }

        function getFinanceLog() {
            $(function(){
                $('#financeLogBody').empty();
                var current_id=document.getElementById("penifit_id").value;

                $.ajax({
                    url: "{{route('getFinanceLog')}}",
                    type: 'GET',
                    data: {'current_id' : current_id },
                    success: function(response)
                    {
                        $.map(response.data, function(val, i) {
                            // var gender='غير ذلك';
                            // if (val.penifit_booked.gender=='m'){
                            //     gender='ذكر';
                            // }
                            // else if(val.penifit_booked.gender=='f'){
                            //     gender='أنثى';
                            // }
                            // else {
                            //     gender='غير ذلك';
                            // }

///////////////////////////////
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
                            var formattedDate  = date+ "/" + (month+1)  + "/" + year+ "  -- :  " + hour+ ":" + minutes;
////////////////////////////////


                            // var amountPayable=0;
                            // amountPayable=val.remaining_amount-(val.remaining_amount*(val.discount_average/100));


                            var htm = '<tr>' +
                                '<td>' + val.user.name + '</td>' +
                                '<td>' + val.amount_to_be_paid + '</td>' +
                                '<td>' + val.discount_average + '</td>' +
                                '<td>' + val.remaining_amount + '</td>' +
                                '<td>' + formattedDate + '</td>' +
                                '<td>' + '<button class="btn open_finance_card_btn" ' +
                                'finance_card_id='+val.id+'>'+' Open card </button>' + '</td>' +
                                '</tr>';
                            $('#financeLogBody').append(htm);
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
