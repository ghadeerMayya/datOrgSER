@extends('layouts.app')


@section('content')

<style>


    body {
        background: #F1F3FA;
    }

</style>

    <div class="container-fluid" style="padding-top: 5rem" >

        <form method="get" id="profile_form">

        <div class="row" style="direction:rtl;">
          <div class="col-lg-3 col-md-12" >{{--  25%--}}


              <div class="col shadow"style="background:white;">


                    <div class="profile-userpic" style="text-align: center;padding-top: 1rem;">

                        <p class="label_basic right_center">بطاقة مالية للسيد/ة  </p>
                        <p   class="label_basic right_center" disabled="" value="بطاقة مالية للسيد/ة" />

                        <input type="text"  style="border:none;text-align: center;background-color:#117a8b;color: white" disabled id="profile_form_full_name" class="form-control" value="يكتب هنا المعرف الكامل" />
                        <br>
                        <br>

                        <p class="label_basic right_center">رقم البيان المالي </p>


                        <input type="text"   style="border:none;text-align: center;background-color:#117a8b;color: white" disabled id="finance_card_id" class="form-control" value="{{$finance_card_id ?? ''}}" />

                        <input type="hidden"  id="hidden_customer_id"  />

                    </div>

                  <br>
                  <br>
<hr>
                  <div class="container-fluid" style="padding-bottom: 1rem;margin-top: 3rem;width: 100%">
                      <div class="row" style="direction:rtl;">
                    <div class="col-md">

                        <div class="list-group right " id="v-pills-tab" role="tablist" aria-orientation="vertical"style="padding-top:2rem;padding-bottom: 2rem">
                            <a class="list-group-item list-group-item-action active" data-toggle="pill" href="#info" role="tab" aria-controls="v-pills-home" aria-selected="true">معلومات أساسية</a>
                            <a class="list-group-item list-group-item-action" id="records_tab" data-toggle="pill" href="#Records" role="tab" aria-controls="v-pills-profile" aria-selected="false">دفعات الفاتورة</a>
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

                        <div class="tab-pane fade show active"  id="info" role="tabpanel" aria-labelledby="v-pills-home-tab">

                          <form>

                              <div class="input-group mb-3" style="padding-top: 1rem;background-color: white">


                                  <div class="col-md"style="background:white;">
                                      <ul class="list-group" style="float: right;padding: 2rem">
                                          <li class="list-group-item right">
                                              <div class="row">
                                                  <div class="col">
                                                      <p class="form-control"  style="border: none" > محول من</p>
                                                  </div>
                                                  <div class="col">
                                                      <input id="finance_card_trns_from"  disabled style="border: none" class="form-control" value=""/>
                                                  </div>

                                              </div>
                                          </li>

                                          <li class="list-group-item right">
                                              <div class="row">
                                                  <div class="col">
                                                      <p class="form-control"  style="border: none" >المبلغ الأساسي</p>
                                                  </div>
                                                  <div class="col">
                                                      <input id="finance_card_basic_amount" disabled style="border: none" class="form-control" value=""/>
                                                  </div>

                                              </div>
                                          </li>

                                          <li class="list-group-item right">
                                              <div class="row">
                                                  <div class="col">
                                                      <p class="form-control"  style="border: none" >نسبة الحسم % </p>
                                                  </div>
                                                  <div class="col">
                                                      <input id="finance_card_average_value" disabled  style="border: none" class="form-control" value=""/>
                                                  </div>

                                              </div>
                                          </li>

                                          <li class="list-group-item right">
                                              <div class="row">
                                                  <div class="col">
                                                      <p class="form-control"  style="border: none" >المبلغ المتبقي </p>
                                                  </div>
                                                  <div class="col">
                                                      <input id="finance_card_remaining_amount" disabled style="border: none" class="form-control" value=""/>
                                                  </div>

                                              </div>
                                          </li>




                                          <li class="list-group-item right">
                                              <div class="row">
                                                  <div class="col">
                                                      <p class="form-control"  style="border: none" >تاريخ الاستحقاق </p>
                                                  </div>
                                                  <div class="col">
                                                      <input id="finance_card_date" disabled style="border: none" class="form-control" value=""/>
                                                  </div>

                                              </div>
                                          </li>




{{--///////////////////////////////////////////////////////////////////////////////////////--}}


                                          <li class="list-group-item right">
                                              <div class="row">
                                                  <div class="col">
                                                      <p class="form-control"  style="border: none" >إضافة ملاحظة </p>
                                                  </div>
                                                  <div class="col">
                                                      <input id="finance_card_note"   class="form-control" value=""/>
                                                  </div>

                                              </div>
                                          </li>

                                          <li class="list-group-item right">
                                              <div class="row">
                                                  <div class="col">
                                                      <p class="form-control"  style="border: none" >المبلغ المراد دفعه</p>
                                                  </div>
                                                  <div class="col">
                                                      <input id="finance_card_amount_just_paid"  class="form-control" value=""/>
                                                  </div>

                                              </div>
                                          </li>


                               <br>
                                             <button class="btn btn-primary  shadow" style="width: 150px;" type="button" id="finance_card_pay_btn">تسديد دفعة</button>


                                         </div>
                                     </div>


                            </ul>




                            </div>



</form>



{{-----------------------------------------------------نهايو المعلومات الأساسية-----------------------------------------------}}



                        {{----------------------------------------------------- سجل الدفعات-----------------------------------------------}}

                        <div class="tab-pane fade" id="Records" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                                <div class="col-md"style="background:white;padding: 2rem">
                                    <table class="table table-hover table_pro " id="profile_form_Records_table" >
                                        <thead class="thead_pro">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">تاريخ العملية</th>
                                    <th scope="col">القيمة المدفوعة</th>
                                    <th scope="col">ملاحظات</th>
                                    <th scope="col">المستخدم المستلم</th>

                                </tr>
                                </thead>

                                <tbody id="finance_card_logBody">

                                </tbody>
                            </table>

                        </div>

{{---------------------------------نهاية سجل الدفعات------------------------------------------------------}}



                    </div>
                </div>
           </div>

        </div>
        </form>
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

        $(window).on('load', function () {

            $('#loading').show();
            fillCardData();
            $('#loading').hide();

        });

        $(document).on('click','#records_tab',function (e) {
            e.preventDefault();
            // $('#alert_msg').hide();
            getFinanceCardLog();
        });

        $(document).on('click','#finance_card_pay_btn',function (e) {
            e.preventDefault();
            $(function(){
                // var card_id = document.getElementById("profile_form_about_id").value;
                var finance_card_id = $('#finance_card_id').val();
                var amount_just_paid = $('#finance_card_amount_just_paid').val();
                // var customer_id=$('#hidden_customer_id').val();
                var finance_card_note=$('#finance_card_note').val();
                $.ajax({
                    url: "{{route('paymoney')}}",
                    type: 'get',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data:
                        { 'finance_card_id' : finance_card_id,
                        'amount_just_paid':amount_just_paid,
                        'finance_card_note':finance_card_note},
                    success: function(data)
                    {

                       alert('paid')

                        alert(finance_card_id);

                        var url = "{{route('financecard', '')}}"+"/"+finance_card_id;

                        window.location=url;


                    },error: function (reject) {
                        alert('Error');
                    }
                });

            });

        });



        function fillCardData() {
            $(function(){
                // var card_id = document.getElementById("profile_form_about_id").value;
                var finance_card_id = $('#finance_card_id').val();
                $.ajax({
                    url: "{{route('getFinanceData')}}",
                    type: 'get',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data:
                        { 'finance_card_id' : finance_card_id },
                    success: function(data)
                    {

                        var thisdata=data.finance_card[0];

                        ////////////////////////////////////////////////////



                        ///////////////////////////////////////////////////////

                        var timstamp= new Date(thisdata.created_at);
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
                        /////////////////////////////////////////////////////


                        var fullname=thisdata.penifit.first_name+' '+thisdata.penifit.father_name+' '+thisdata.penifit.last_name;


                        $('#profile_form_full_name').val(fullname);
                        $('#finance_card_trns_from').val(thisdata.user.name);
                        $('#finance_card_basic_amount').val(thisdata.amount_to_be_paid);
                        $('#finance_card_remaining_amount').val(thisdata.remaining_amount);
                        $('#finance_card_average_value').val(thisdata.discount_average);
                        $('#finance_card_date').val(formattedDate);



                    },error: function (reject) {
                        alert('Error');
                    }
                });

            });

        }



        function getFinanceCardLog() {
            $(function(){
                $('#finance_card_logBody').empty();
                var finance_card_id = $('#finance_card_id').val();


                $.ajax({
                    url: "{{route('getfinancelog')}}",
                    type: 'GET',
                    data: {'finance_card_id' : finance_card_id },

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



                            var htm = '<tr>' +
                                '<td>' + val.id + '</td>' +
                                '<td>' + formattedDate + '</td>' +
                                '<td>' + val.finance_amount + '</td>' +
                                '<td>' + val.process_notes + '</td>' +
                                '<td>' + val.user.name + '</td>' +
                                '</tr>';
                            $('#finance_card_logBody').append(htm);
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
