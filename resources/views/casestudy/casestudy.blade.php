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
                <!DOCTYPE html>
                <html>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
                <style>
                    * {
                        box-sizing: border-box;
                    }

                    body {
                        background-color: #f1f1f1;
                    }

                    #regForm {
                        background-color: #ffffff;
                        margin: 100px auto;
                        font-family: Raleway;
                        padding: 40px;
                        width: 70%;
                        min-width: 300px;
                    }

                    h1 {
                        text-align: center;
                    }

                    input {
                        padding: 10px;
                        width: 100%;
                        font-size: 17px;
                        font-family: Raleway;
                        border: 1px solid #aaaaaa;
                    }

                    /* Mark input boxes that gets an error on validation: */
                    input.invalid {
                        background-color: #ffdddd;
                    }

                    /* Hide all steps by default: */
                    .tab {
                        display: none;
                    }

                    button {
                        background-color: #4CAF50;
                        color: #ffffff;
                        border: none;
                        padding: 10px 20px;
                        font-size: 17px;
                        font-family: Raleway;
                        cursor: pointer;
                    }

                    button:hover {
                        opacity: 0.8;
                    }

                    #prevBtn {
                        background-color: #bbbbbb;
                    }

                    /* Make circles that indicate the steps of the form: */
                    .step {
                        height: 15px;
                        width: 15px;
                        margin: 0 2px;
                        background-color: #bbbbbb;
                        border: none;
                        border-radius: 50%;
                        display: inline-block;
                        opacity: 0.5;
                    }

                    .step.active {
                        opacity: 1;
                    }

                    /* Mark the steps that are finished and valid: */
                    .step.finish {
                        background-color: #4CAF50;
                    }
                </style>
                <body>

                <form id="regForm" action="/action_page.php">
                    <h1>Details:</h1>
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">المعلومات الأساسية:
                        <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                        <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                    </div>
                    <div class="tab">Contact Info:
                        <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                        <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
                    </div>
                    <div class="tab">Birthday:
                        <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
                        <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
                        <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
                    </div>
                    <div class="tab">Login Info:
                        <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
                        <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </form>

                <script>
                    var currentTab = 0; // Current tab is set to be the first tab (0)
                    showTab(currentTab); // Display the current tab

                    function showTab(n) {
                        // This function will display the specified tab of the form...
                        var x = document.getElementsByClassName("tab");
                        x[n].style.display = "block";
                        //... and fix the Previous/Next buttons:
                        if (n == 0) {
                            document.getElementById("prevBtn").style.display = "none";
                        } else {
                            document.getElementById("prevBtn").style.display = "inline";
                        }
                        if (n == (x.length - 1)) {
                            document.getElementById("nextBtn").innerHTML = "Submit";
                        } else {
                            document.getElementById("nextBtn").innerHTML = "Next";
                        }
                        //... and run a function that will display the correct step indicator:
                        fixStepIndicator(n)
                    }

                    function nextPrev(n) {
                        // This function will figure out which tab to display
                        var x = document.getElementsByClassName("tab");
                        // Exit the function if any field in the current tab is invalid:
                        if (n == 1 && !validateForm()) return false;
                        // Hide the current tab:
                        x[currentTab].style.display = "none";
                        // Increase or decrease the current tab by 1:
                        currentTab = currentTab + n;
                        // if you have reached the end of the form...
                        if (currentTab >= x.length) {
                            // ... the form gets submitted:
                            document.getElementById("regForm").submit();
                            return false;
                        }
                        // Otherwise, display the correct tab:
                        showTab(currentTab);
                    }

                    function validateForm() {
                        // This function deals with validation of the form fields
                        var x, y, i, valid = true;
                        x = document.getElementsByClassName("tab");
                        y = x[currentTab].getElementsByTagName("input");
                        // A loop that checks every input field in the current tab:
                        for (i = 0; i < y.length; i++) {
                            // If a field is empty...
                            if (y[i].value == "") {
                                // add an "invalid" class to the field:
                                y[i].className += " invalid";
                                // and set the current valid status to false
                                valid = false;
                            }
                        }
                        // If the valid status is true, mark the step as finished and valid:
                        if (valid) {
                            document.getElementsByClassName("step")[currentTab].className += " finish";
                        }
                        return valid; // return the valid status
                    }

                    function fixStepIndicator(n) {
                        // This function removes the "active" class of all steps...
                        var i, x = document.getElementsByClassName("step");
                        for (i = 0; i < x.length; i++) {
                            x[i].className = x[i].className.replace(" active", "");
                        }
                        //... and adds the "active" class on the current step:
                        x[n].className += " active";
                    }
                </script>

                </body>
                </html>


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
                            var sex='غير ذلك';
                            if (val.sex=='m'){
                                sex='ذكر';
                            }
                            else if(val.sex=='f'){
                                sex='أنثى';
                            }
                            else {
                                sex='غير ذلك';
                            }

                            var htm = '<tr><td>' + val.id + '</td><td>' + val.first_name + '</td><td>' + val.last_name + '</td><td>' + sex + '</td><td>' + val.birth_date + '</td><td>' + formattedDate + '</td></tr>';
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
