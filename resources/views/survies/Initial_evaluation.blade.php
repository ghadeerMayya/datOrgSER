@extends('layouts.insideother')


@section('content')

    <form  method = "post" id="Initial_evaluationForm" name="Initial_evaluationForm">


        <div class="container">
            <div class="card">
                <div class="card-header font_header"  id="header_id">
                    المعلومات الأساسية
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6 align">
                            <input type="hidden" id="current_user_id" name="c_user_id"  />
                            <label class="font_header ">: عدد أفراد العائلة </label>
                            <input type='text' name='num_fam'  class="form-control"id="num_fam" />
                        </div>
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: العمل السابق</label>
                            <input type='text' name='l_job' class="form-control" id="l_job"  />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: العمل الحالي  </label>
                            <input type='text' name='c_job' class="form-control" id="c_job" />
                        </div>
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: العنوان</label>
                            <input type='text' name='c_adress' class="form-control" id="c_adress" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: رقم الهاتف  </label>
                            <input type='text' name='p_phone' class="form-control" id="p_phone" />
                        </div>

                    </div>


                </div>
            </div>
        </div>












{{----------------------------------------------------------------------------}}

        <div class="container">
            <div class="card">
                <div class="card-header font_header">
                    الشكوى الرئيسية
                </div>
                <div class="card-body">
                    <textarea class="form-control font_header " name="I_e_main" placeholder="... اكتب النص " required></textarea>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <div class="card-header font_header">
                    القصة الحالية
                </div>
                <div class="card-body">
                    <textarea class="form-control font_header " name="I_e_story" placeholder="... اكتب النص " required></textarea>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="card">
                <div class="card-header font_header">
                    القصة المرضية
                </div>
                <div class="card-body">
                    <textarea class="form-control font_header " name="I_e_Illness" placeholder="... اكتب النص " required></textarea>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="card">
                <div class="card-header font_header">
                    السوابق (الطبية، الدوائية، العائلية)
                </div>
                <div class="card-body">
                    <textarea class="form-control font_header " name="I_e_pre" placeholder="... اكتب النص " required></textarea>

                    <div class="p-3 mb-2 bg-primary text-white align font_header Background_color">:  في حال وجود تقرير طبي </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: تاريخ التقرير</label>
                            <input type="date" class="form-control" name="I_e_report_date">
                        </div>
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: اسم المعالج أو الطبيب</label>
                            <input type="text" class="form-control" name="I_e_report_name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: العلاج المقترح</label>
                            <input type="text" class="form-control" name="I_e_report_Therapy">
                        </div>
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: التشخيص</label>
                            <input type="text" class="form-control" name="I_e_report_Diagnose">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: صورة عن التقرير</label>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" name="I_e_report_photo">
                                @error('I_e_report_photo')
                                <small class="form-text-danger">error file</small>
                                @enderror
                                <label class="custom-file-label"  style="text-align: left" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: الرضا عن العلاج</label>
                            <input type="text" class="form-control" name="I_e_report_Satis">
                        </div>
                    </div>

                </div>
            </div>

        </div>
        {{--------------------------------------------------------Psychological examination----------------------}}
        <div class="container">
            <div class="card">
                <div class="card-header font_header">
                    الفحص النفسي
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: الكلام </label>
                            <input type="text" class="form-control" name="I_e_Psy_talk">
                        </div>
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: المظهر</label>
                            <input type="text" class="form-control" name="I_e_Psy_display">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: المزاج والوجدان </label>
                            <input type="text" class="form-control" name="I_e_Psy_mood">
                        </div>
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: التفكير</label>
                            <input type="text" class="form-control" name="I_e_Psy_think">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: الانتباه والتركيز </label>
                            <input type="text" class="form-control" name="I_e_Psy_Focus">
                        </div>
                        <div class="form-group col-md-6 align">
                            <label class="font_header ">: الإدراك</label>
                            <input type="text" class="form-control" name="I_e_Psy_Realization">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6 align" style="float: right">
                            <label class="font_header ">: المحاكمة والبصيرة </label>
                            <input type="text" class="form-control" name="I_e_Psy_vision">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{---------------------------------------------------Initial diagnosis---------------------------------------------}}
        <div class="container">
            <div class="card">
                <div class="card-header font_header">
                    التشخيص المبدئي
                </div>
                <div class="card-body">
                    {{--                <div class="custom-control custom-switch align ">--}}
                    {{--                    <input type="checkbox" class="custom-control-input " id="customSwitch1">--}}
                    {{--                    <label class="custom-control-label" for="customSwitch1">الطيف الفصامي SchS</label>--}}
                    {{--                </div>--}}


                    <div class="container">
                        <div class="row"  style="margin-top: 50px;">
                            <div class="col-md-12 text-center">
                                <div class="outer-form">
                                    <table class="table-striped table table-bordered vertical">
                                        <thead style="color: white; background-color: #00aeef;font-family: 'Almarai', sans-serif;font-size: small;font-weight: lighter" >
                                        <tr>

                                            <th  class="head">اسم التشخيص</th>
                                            <th  class="head">الحالة</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>الطيف الفصامي SchS</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_schs" value="SchS" />
                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>اضطرابات المزاج MD</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_md" value="md">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>اضطرابات القلق AD</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_ad" value="ad">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>الوسواس القهري </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_ob" value="ob">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>اضطرابات الصدمة والشدات PTD </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_ptd" value="ptd">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>الاضطرابات الانشقاقية والنفس جسدية </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_non" value="non">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>اضطرابات التغذية والطعام FED </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox"name="I_e_I_d_fed" value="fed">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>اضطرابات التواصل (لغة- كلام) CD </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_cd" value="cd">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>اضطرابات الوظيفة الجنسية والنوع  </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_sex" value="sex">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> اضطرابات سوء استخدام المواد   </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_bad" value="bad">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>الاضطرابات العصبية المعرفية ND </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_nd" value="nd">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>اضطرابات الشخصية PD</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_pd" value="pd">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>الصرع  EP</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_ep" value="ep">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> ADHD  </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_adhd" value="adhd">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>اضطراب ضبط المصرات ED </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_ed" value="ed">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>اضطراب تعلم </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_learn" value="learn">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>طيف توحدي AutS</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_auts" value="AutS">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> تأخر فكريMR </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_mr" value="mr">

                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>مشكلة تكيفية </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="I_e_I_d_pro" value="pro">

                                                </label>
                                            </td>
                                        </tr>


                                        </tbody>




                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


{{----------------------------Evaluation and analysis-----------------------------}}


                    <div class="container">
                        <div class="card">
                            <div class="card-header font_header">
                                ملخص التقييم والتحليل
                            </div>
                            <div class="card-body">
                                <textarea class="form-control font_header " name="I_e_Illness_summary" placeholder="... اكتب النص " required></textarea>
                            </div>
                        </div>

                    </div>




                    <div class="container">
                        <div class="card">
                            <div class="card-header font_header">
                                الاحالات
                            </div>
                            <div class="card-body">
                                <select class="selectpicker" id="trans_select_initial_eval" name="doctor_selectedin_I_E" style="...">

                                </select>
                            </div>
                        </div>

                    </div>
{{-------------------------------------------------------------------Report form--}}


                    <div class="container">
                        <div class="card">
                            <div class="card-header font_header">
                                نموذج تقرير المشورة
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 align">
                                    <label class="font_header ">: الشكاوي والمشاكل </label>
                                    <input type="text" class="form-control" name="I_e_report_form_pro"/>
                                </div>
                                <div class="form-group col-md-6 align">
                                    <label class="font_header ">: تاريخ التقرير</label>
                                    <input type="date" class="form-control" name="I_e_report_form_date">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 align">
                                    <label class="font_header ">: الأشياء التي يقوم بها المسترشد بشكل جيد(الأداء الوظيفي الملائم): </label>
                                    <input type="text" class="form-control" name="I_e_report_form_good">
                                </div>
                                <div class="form-group col-md-6 align">
                                    <label class="font_header ">: خلفية سياق المشاكل</label>
                                    <input type="text" class="form-control" name="I_e_report_form_background">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 align">
                                    <label class="font_header ">: التقييم الأولي: </label>
                                    <input type="text" class="form-control" name="I_e_report_form_first">
                                </div>
                                <div class="form-group col-md-6 align">
                                    <label class="font_header ">: المصادر أو الموارد المتاحة للمسترشد</label>
                                    <input type="text" class="form-control" name="I_e_report_sources">
                                </div>
                            </div>
                            <div class="form-group col-md-6 align">
                                <label class="font_header ">: خطة العمل</label>
                                <input type="text" class="form-control" name="I_e_report_form_work">
                            </div>
                        </div>

                    </div>

                    <button type="button"  id="I_e_save" class="btn btn-primary font_header">حفظ</button>
                </div>
            </div>
        </div>
    </form>
    <div class="alert alert-success" id="alert_msg_survey"  style="display: none;">
@endsection


        @section('scripts')
            <script>
                ///////////////////////////////////////////////init ajax
                $.ajaxSetup(
                    {
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                $(document).ajaxStart(function(){
                    $('#loading').show();
                }).ajaxStop(function(){
                    $('#loading').hide();
                });

                ///////////////////////////////checkbox if checked
                // $(document).ready(function(){
                //     $('input[type="checkbox"]').click(function(){
                //         if($(this).prop("checked") == true){
                //             alert('checked');
                //         }
                //         else if($(this).prop("checked") == false){
                //             $(this).attr('value', '0')
                //         }
                //     });
                // });
                /////////////////////save survey
                $(document).on('click','#I_e_save',function (e) {
                    e.preventDefault();
                    var addPenifitFormData=new FormData($('#Initial_evaluationForm')[0]);
                    //  var sex_select = $('#sex_select').find(":selected").text();
                    $.ajax({
                            type:'post',
                            enctype:'multipart/form-data',
                            url:"{{route('saveInitialSurvey')}}",
                            data:addPenifitFormData,
                            // data:$('.I_e_I_d:checked').serialize(),
                            processData:false,
                            contentType:false,
                            cache:false,
                            success: function (data) {
                                if(data.msg === 'saved and added to log'){
                                    $('#alert_msg_survey').show();
                                    $('.alert-success').html(data.msg);

                                }
                                else if(data.msg ==='user already exist'){
                                    $('#alert_msg_survey').show();
                                    $('.alert-success').html(data.msg);
                                }
                                else if(data.msg ==='user already exist added to log list'){
                                    $('#alert_msg_survey').show();
                                    $('.alert-success').html(data.msg);
                                }
                                else{
                                    $('#alert_msg_survey').show();
                                    $('.alert-success').html(data.msg);
                                }
                            },error: function (reject) {
                                alert('Error');
                                $('#alert_msg_survey').show();
                                $('.alert-success').html(data.msg);
                            }
                        }
                    );
                });





            </script>
@endsection
