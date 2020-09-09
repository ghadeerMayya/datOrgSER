@extends('layouts.insideother')


@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{--Initial evaluation Form--}}
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">التقييم الأولي </div>



                            <form  method = "post" id="Initial_evaluationForm" enctype="multipart/form-data">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <table>


                                    <tr>
                                        <td>الاسم الأول</td>
                                        <td><input type='text' name='csfirst_name' id="f_name" /></td>
                                    <tr>
                                        <td>اسم الأب</td>
                                        <td><input type="text" name='csfather_name'/></td>
                                    </tr>
                                    <tr>
                                        <td>الاسم الأخير</td>
                                        <td><input type="text" name='cslast_name'/></td>
                                    </tr>
                                    <tr>
                                        <td>مكان الولادة</td>
                                        <td><input type="text" name='csdate_name'/></td>
                                    </tr>
                                    <tr>
                                        <td>تاريخ الميلاد</td>
                                        <td><input type="date" name='csbirth_date'/></td>
                                    </tr>
                                    <tr>
                                        <td>الجنس</td>
                                        <td><select class="selectpicker"  name="sex_select" >    // multiple data-live-search="true">
                                                <option value="csm">ذكر</option>
                                                <option value="csf">أنثى</option>
                                                <option value="cso">غير ذلك</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>الحالة الاجتماعية</td>
                                        <td><select class="selectpicker"  name="Social_status" style="border-color: #00aeef; width: 15rem">
                                                <option value="csa">أعزب</option>
                                                <option value="csb">متزوج</option>
                                                <option value="csc">مطلق</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>-------------------------</td>

                                    </tr>
                                    <tr>
                                        <td>عدد أفراد العائلة</td>
                                        <td><input type='text' name='family' id="family" /></td>
                                    </tr>
                                    <tr>
                                        <td> العمل السابق </td>
                                        <td><input type='text' name='l_job' id="l_job" /></td>

                                    <tr>
                                        <td> العمل الحالي </td>
                                        <td><input type='text' name='c_job' id="c_job" /></td>
                                    </tr>
                                    <tr>
                                    <td> العنوان</td>
                                    <td><input type='text' name='c_adress' id="c_adress" /></td>
                                    </tr>
                                    <tr>
                                        <td> رقم الهاتف</td>
                                        <td><input type='text' name='p_phone' id="p_phone" /></td>
                                    </tr>
                                    <tr>
                                        <td> الشكوى الرئيسية</td>
                                        <td><textarea type='text' name='main_com' id="main_com"></textarea>
                                    <tr>
                                    <tr>
                                        <td> القصة الحالية</td>
                                        <td><textarea type='text' name='c_story' id="c_story" ></textarea></td>
                                    </tr>
                                    <tr>
                                        <td> القصة المرضية</td>
                                        <td><textarea type='text' name='p_story' id="p_story" ></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>السوابق</td>
                                        <td><textarea type='text' name='_an' id="_an" ></textarea></td>
                                    </tr>



                                    {{--                                <tr>--}}
                                    {{--                                    <td>تحويل الى</td>--}}
                                    {{--                                    <td><select class="selectpicker"  name="Convert_to" style="border-color: #00aeef; width: 15rem">--}}
                                    {{--                                            <option value="m">doctor1</option>--}}
                                    {{--                                            <option value="f">doctor2</option>--}}
                                    {{--                                            <option value="o">doctor3</option>--}}
                                    {{--                                        </select></td>--}}
                                    {{--                                </tr>--}}
                                    {{--                                    <tr>--}}
                                    {{--                                    <td colspan = '1'>--}}
                                    {{--                                        <input type="submit" id="addtowait" class="btn btn-primary" value="إضافة إلى قائمة الانتظار"/>--}}
                                    {{--                                    </td>--}}

                                    {{--                                    <td colspan = '3'>--}}
                                    {{--                                        <input type="submit" id="removeprev" class="btn btn-primary" value="إضافة مستفيد جديد"/>--}}
                                    {{--                                    </td>--}}
                                    {{--                                </tr>--}}
                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    {{------------------------------------------------------------------------------------------------------}}
    {{-- ps_ex Form--}}

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">الفحص النفسي  </div>


                            <form  method = "post" id="ps_ex" enctype="multipart/form-data">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <table>

                                    <tr>
                                        <td>المظهر </td>
                                        <td><input type='text' name='_display' id="_display" /></td>
                                    </tr>
                                    <tr>
                                        <td>الكلام </td>
                                        <td><input type='text' name='_talk' id="_talk" /></td>
                                    </tr>

                                    <tr>
                                        <td>الكلام </td>
                                        <td><input type='text' name='_talk' id="_talk" /></td>
                                    </tr>
                                    <tr>
                                        <td>التفكير </td>
                                        <td><input type='text' name='_think' id="_think" /></td>
                                    </tr>
                                    <tr>
                                        <td>المزاج والوجدان </td>
                                        <td><input type='text' name='_mood' id="_mood" /></td>
                                    </tr>

                                    <tr>
                                        <td>الادراك </td>
                                        <td><input type='text' name='_real' id="_real" /></td>
                                    </tr>

                                    <tr>
                                        <td>الاانتباه والتركيز </td>
                                        <td><input type='text' name='_foc' id="_foc" /></td>
                                    </tr>

                                    <tr>
                                        <td>المحامة والبصيرة </td>
                                        <td><input type='text' name='_trail' id="_trail" /></td>
                                    </tr>


                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>


    {{--                            -----------------------------------------------------}}
    {{-- Initiald_iagnosis Form--}}




    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">الفحص النفسي  </div>

                            <form  method = "post" id="Initiald_iagnosis" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <table>
                                    <tr>
                                        <td>type </td>
                                        <td>select</td>
                                    </tr>
                                    <tr>
                                        <td>الطيف الفصامي SchS </td>
                                        <td><input type='checkbox' name='_SchS' id="_SchS" /></td>
                                    </tr>
                                    <tr>
                                        <td>اضطرابات المزاج MD  </td>
                                        <td><input type='checkbox' name='_md' id="_md" /></td>
                                    </tr>

                                    <tr>
                                        <td>اضطرابات القلق AD  </td>
                                        <td><input type='checkbox' name='_ad' id="_ad" /></td>
                                    </tr>

                                    <tr>
                                        <td>الوسواس القهري  </td>
                                        <td><input type='checkbox' name='_Ob' id="_Ob" /></td>
                                    </tr>

                                    <tr>
                                        <td> اضطرابات الصدمة والشدات PTD </td>
                                        <td><input type='checkbox' name='_PTD' id="_PTD" /></td>
                                    </tr>

                                    <tr>
                                        <td> الاضطرابات الانشقاقية والنفس جسدية   </td>
                                        <td><input type='checkbox' name='_inc' id="_inc" /></td>
                                    </tr>

                                    <tr>
                                        <td>اضطرابات التغذية والطعام FED  </td>
                                        <td><input type='checkbox' name='_FED' id="_FED" /></td>
                                    </tr>

                                    <tr>
                                        <td>اضطرابات التواصل (لغة- كلام) CD  </td>
                                        <td><input type='checkbox' name='_CD' id="_CD" /></td>

                                    </tr>

                                    <tr>
                                        <td>اضطرابات الوظيفة الجنسية والنوع  </td>
                                        <td><input type='checkbox' name='_sex' id="_sex" /></td>
                                    </tr>

                                    <tr>
                                        <td>اضطرابات سوء استخدام المواد   </td>
                                        <td><input type='checkbox' name='_bad' id="_bad" /></td>
                                    </tr>

                                    <tr>
                                        <td>الاضطرابات العصبية المعرفية ND </td>
                                        <td><input type='checkbox' name='_ND' id="_ND" /></td>
                                    </tr>
                                    <tr>
                                        <td>اضطرابات الشخصية PD  </td>
                                        <td><input type='checkbox' name='_PD' id="_PD" /></td>
                                    </tr>
                                    <tr>
                                        <td>الصرع  EP </td>
                                        <td><input type='checkbox' name='_EP' id="_EP" /></td>
                                    </tr>
                                    <tr>
                                        <td>ADHD </td>
                                        <td><input type='checkbox' name='_ADHD' id="_ADHD" /></td>
                                    </tr>
                                    <tr>
                                        <td>اضطراب ضبط المصرات ED   </td>
                                        <td><input type='checkbox' name='_real' id="_real" /></td>
                                    </tr>
                                    <tr>
                                        <td>اطيف توحدي AutS  </td>
                                        <td><input type='checkbox' name='_ED' id="_ED" /></td>
                                    </tr>
                                    <tr>
                                        <td>تأخر فكريMR  </td>
                                        <td><input type='checkbox' name='_MR' id="_MR" /></td>
                                    </tr>
                                    <tr>
                                        <td>مشكلة تكيفية  </td>
                                        <td><input type='checkbox' name='_adap' id="_adap" /></td>
                                    </tr>
                                    <tr>
                                        <td>التمارض Mal  </td>
                                        <td><input type='checkbox' name='_Mal' id="_Mal" /></td>
                                    </tr>

                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>


    {{--                            -----------------------------------------------------}}

    {{-- Summary_of_evaluation_and_analysis Form--}}

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">ملخص التقييم والتحليل  </div>

                            <form  method = "post" id="Summary_of_evaluation_and_analysis" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <table>

                                    <tr>
                                        <td>الحالة الاجتماعية</td>
                                        <td><select class="selectpicker"  name="Social_status" style="border-color: #00aeef; width: 15rem">
                                                <option value="a">طبيب عصبية</option>
                                                <option value="b">طبيب أذنية</option>
                                                <option value="c">طبيب نفسية</option>
                                                <option value="d">تربية خاصة</option>
                                                <option value="e">قسم النطق</option>
                                                <option value="f">تأهيل نفسي حركي</option>
                                                <option value="g">مرشد نفسي</option>
                                                <option value="h">معالج نفسي</option>

                                        <td> <input type="submit" id="_to" class="btn btn-primary" value="تحويل"/>


                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>



    {{----------------------------------------------------}}


    {{-- Advice_report_form Form--}}

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">نموذج تقرير المشورة</div>

                            <form  method = "post" id="Advice_report_form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <table>
                                    <tr>
                                        <td>التاريخ </td>
                                        <td><input type="date" name='r_date'/></td>

                                    <tr>
                                        <td> الشكاوى والمشاكل</td>
                                        <td><textarea type='text' name='pro_' id="pro_"/></textarea></td>
                                    </tr>
                                    <tr>
                                        <td> خلفية (سياق) المشاكل</td>
                                        <td><textarea type='text' name='pro_2' id="pro_2"/></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>الأشياء التي يقوم بها المسترشد بشكل جيد(الأداء الوظيفي الملائم):</td>
                                        <td><textarea type='text' name='pro_3' id="pro_3"/></textarea></td>
                                    </tr>
                                    <tr>
                                        <td> المصادر أو الموارد المتاحة للمسترشد:</td>
                                        <td><textarea type='text' name='pro_4' id="pro_4"/></textarea></td>
                                    </tr>

                                    <tr>
                                        <td>التقييم الأولي</td>
                                        <td><textarea type='text' name='pro_5' id="pro_5"/></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>خطة العمل الأولى (الخطوات التي يمكن أن يتخذها المسترشد و/ أو مقدم المشورة):</td>
                                        <td><textarea type='text' name='pro_6' id="pro_6"/></textarea></td>
                                    </tr>




                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>


    {{--                            -----------------------------------------------------}}

    {{--    send_1--}}


    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header"></div>

                            <form  method = "post" id="send_1" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">


                                <input type="submit" id="send_1_bu" class="btn btn-primary" value="ارسال" style="width: 100%"/>




                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>



    {{--                            -----------------------------------------------------}}


    {{-- Under_treatment form       --}}
    <div class="tab-pane fade" id="Under_treatment" role="tabpanel" aria-labelledby="Under_treatment-tab">



@endsection

@section('scripts')



    <script>

        $.ajaxSetup({
            headers: {
                // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }
        });

        $(document).ready(function (data) {

        });



    </script>

@endsection
