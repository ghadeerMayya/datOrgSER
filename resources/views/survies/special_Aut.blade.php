@extends('layouts.insideother')


@section('content')
    <form  method = "post" id="special_Aut" name="special_Aut">

        <div class="container "style="direction: rtl;" >
            <div class="card shadow" >
                <div class="card-header font_header"  id="s_m_info_card" style="text-align: center">
                    قائمة استبيان التوحدعند الأطفال M-CHAT
                </div>




                <div class="card-body">

                        <div class="col-md-12 text-center">

                            <table class="table table-hover">
                                <thead style="background: white;border: none;color: black">
                                <tr>

                                    <th  class="head">الحالة</th>
                                    <th  class="head">تعم</th>


                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>هل يستمتع طفلك بالأرجحة على ركبتيك أو عندما تحضنه؟</td>
                                    <td>
                                        <input type="checkbox" class="btn"  name="sp_aut_swing" value="swing" />
                                        <input type="hidden" id="current_user_id" name="c_user_id2"  />

                                </tr>

                                <tr>
                                    <td>هل لطفلك اهتمام بالأطفال الآخرين؟</td>
                                    <td>
                                        <input type="checkbox" class="btn"  name="sp_aut_care" value="care" />
                                    </td>

                                </tr>

                                <tr>
                                    <td>هل يحب طفلك التسلق على الاشياء مثل صعود الأشياء مثلا؟</td>
                                    <td>
                                        <input type="checkbox" class="btn"  name="sp_aut_climb" value="climb" />
                                    </td>

                                </tr>

                                <tr>
                                    <td>هل يستمتع طقلك بلعبة الاختباء والاختفاء ( الغميضة)؟  </td>
                                    <td>
                                        <input type="checkbox" class="btn"  name="sp_aut_hide" value="hide" />
                                    </td>
                                </tr>


                                <tr>
                                    <td>هل يتظاهر طفلك بالحديث بالهاتف أو اللعب بالدمى أو التظاهر بأشياء أخرى؟  </td>
                                    <td>
                                        <input type="checkbox" class="btn"  name="sp_aut_Pretending" value="Pretending" />
                                    </td>


                                </tr>
                                <tr>
                                    <td>هل يستخدم طفلك اصبعه (سبابته) للاشارة أو السؤال عن شيئ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_finger_q" value="finger_q"/>

                                    </td>

                                </tr>

                                <tr>
                                    <td>هل يستخدم طفلك اصبعه (سبابته) للتعبير عن اهتمامه بشيئ معين؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_finger_c" value="finger_c"/>
                                    </td>

                                </tr>

                                <tr>
                                    <td>هل يلعب طفلك كما يجب باللعب الصغيرة كالسيارات و المكعبات ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_car" value="car"/>

                                    </td>

                                </tr>

                                <tr>
                                    <td>هل يحاول طفلك جلب الشياء لكي يريكي شيئ ما؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_show" value="show"/>
                                    </td>

                                </tr>

                                <tr>
                                    <td>هل يمكن لطفلك أن يحدق في عينيكي اكثر من ثانية ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_eye" value="eye"/>

                                    </td>

                                </tr>

                                <tr>
                                    <td>هل يبدو طفلك حساساً للضوضاء أو الاصوات (مثال: يغلق أو يسد أذنيه) ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_ear" value="ear"/>
                                    </td>

                                </tr>

                                <tr>
                                    <td>هل هل يتجاوب طفلك لابتسامتك أو نظرتك بابتسامة ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_smile" value="smile" />

                                    </td>
                                </tr>

                                <tr>
                                    <td>هل يقلدك طفلك ( مثل يقوم بتقليد وجهك معبرا عن الفرح أو الحزن) ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_Mimics" value="Mimics" />

                                    </td>
                                </tr>

                                <tr>
                                    <td>هل يستجيب (يلتفت أو ينتبه) الطفل عندما تناديه باسمه ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_name" value="name"/>

                                    </td>
                                </tr>

                                <tr>
                                    <td>هل عندما تشير الى لعبة أو شيئ في الغرفة , هل ينظر طفلك اليها ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_see" value="see" />

                                    </td>
                                </tr>

                                <tr>
                                    <td>هل يمشي طفلك ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_walk" value="walk" />
                                    </td>
                                </tr>

                                <tr>
                                    <td>هل ينظر طفلك الى الأشياء التي تنظر اليها ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_see_th" value="see_th" />
                                    </td>
                                </tr>

                                <tr>
                                    <td>هل يقوم طفلك بحركات غير اعتيادية بأصابعه أمام وجهه ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_face" value="face" />
                                    </td>
                                </tr>

                                <tr>
                                    <td>هل يحاول طفلك جذب (لفت) انتباهك الى مايقوم به (تفعله) ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_Attention" value="Attention" />
                                    </td>
                                </tr>

                                <tr>
                                    <td>هل هل تساءلت يوما اذا كان طفلك أصم (لايسمع) ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_hear_no" value="hear_no" />
                                    </td>
                                </tr>

                                <tr>
                                    <td>هل يفهم طفلك مايقوله الآخرون ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_other" value="other" />
                                    </td>
                                </tr>

                                <tr>
                                    <td>هل يحدق طفلك أحيانا في شيئ غير معين أ يتحول بدون هدف ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_goal" value="goal" />
                                    </td>
                                </tr>

                                <tr>
                                    <td>هل ينظر طفلك الى وجهك لمعرفة احساسك أو ردة فعلك عندما يواجه شيئا غير معتاد عليه ؟</td>
                                    <td>
                                        <input type="checkbox" class="btn" name="sp_aut_sin" name="sin" />
                                    </td>
                                </tr>

                                </tbody>




                            </table>

                            <button type="button" class="btn btn-primary" data-toggle="modal" id="sp_aut_save">
                                حفظ
                            </button>

                        </div>
                    </div>
                </div>
            </div>

    </form>


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

        $(document).on('click','#sp_aut_save',function (e) {
            e.preventDefault();
            var addPenifitFormData=new FormData($('#special_Aut')[0]);
            //  var sex_select = $('#sex_select').find(":selected").text();
            $.ajax({
                    type:'post',
                    enctype:'multipart/form-data',
                    url:"{{route('saveSpecialAutSurvey')}}",
                    data:addPenifitFormData,
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
