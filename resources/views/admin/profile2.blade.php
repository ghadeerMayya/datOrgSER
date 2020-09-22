@extends('layouts.app')


@section('content')





    <div class="container">
        <form method="get" id="profile_form">
        <div class="row row-cols-2">
            <div class="col"style="border-bottom: 1px solid #00aeef;"></div>
            <div class="col"style="border-bottom: 1px solid #00aeef;">

                <div class="profile-img">
                    <img src="{{url('/images/profile.png')}}" id="profile_form_image" />
{{--                    <div class="file btn btn-lg btn-primary">--}}
{{--                        تغيير الصورة--}}
{{--                        <input type="file" name="profile_form_image_change"/>--}}
{{--                    </div>--}}
                </div>




            </div>
            <div class="col" style="padding-top: 1rem;" >


                <div class="tab-content" >
                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="v-pills-home-tab">


                        <ul class="list-group">
                            <li class="list-group-item disabled" aria-disabled="true"><div class="row">
                                    <div class="col">
                                        <input type="text"  style="border: none" name="profile_form_info_id" class="form-control" value="{{$card_id ?? ''}}"/>
                                    </div>
                                    <div class="col">
                                        <p class="label_basic right_center" > معرف المستفيد</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><div class="row">
                                    <div class="col">
                                        <input name="profile_form_info_name" style="border: none" class="form-control" value=""/>
                                    </div>
                                    <div class="col">
                                        <p class="label_basic right_center">الاسم الأول</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><div class="row">
                                    <div class="col">
                                        <input name="profile_form_info_father"  style="border: none" class="form-control" value=""/>
                                    </div>
                                    <div class="col">
                                        <p class="label_basic right_center">اسم الأب</p>
                                    </div>
                                </div></li>
                            <li class="list-group-item"><div class="row">
                                    <div class="col">
                                        <input name="profile_form_info_last"  style="border: none" class="form-control" value=""/>
                                    </div>
                                    <div class="col">
                                        <p class="label_basic right_center">الاسم الأخير</p>
                                    </div>
                                </div></li>
{{--                            <li class="list-group-item"></li>--}}
                        </ul>




                    </div>
                    <div class="tab-pane fade" id="Record" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                        <table class="table table-hover table_pro " id="profile_form_table" >
                            <thead class="thead_pro">
                            <tr>
                                <th scope="col">المستخدم</th>
                                <th scope="col">نوع العملية</th>
                                <th scope="col">الاستبيان المدخل</th>
                                <th scope="col">تاريخ العملية</th>
                                <th scope="col">تفاصيل</th>
                                <th scope="col">#</th>

                            </tr>
                            </thead>

                            <tbody id="waitingTbody">

                            </tbody>
                        </table>





                    </div>
                    <div class="tab-pane fade" id="Operations" role="tabpanel" aria-labelledby="v-pills-messages-tab">


                        <div class="input-group mb-3" style="padding-top: 1rem">
                            <div class="input-group-prepend">
                                <button class="btn btn btn-primary" style="width: 105px;" type="button">تحويل</button>
                            </div>
                            <select class="custom-select" name="profile_form_Oper_doc" aria-label="Example select with button addon">
                                <option selected>اختيار طبيب...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn btn-primary" style="width: 105px;" type="button">اختيار</button>
                            </div>
                            <select class="custom-select" name="profile_form_Oper_forms" aria-label="Example select with button addon">
                                <option selected>اختيار استبيان...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>

                        <div class="form-group right">
                            <button class="btn btn btn-primary"id="profile_form_Oper_btn" style="width: 105px;" type="button">متابعة</button>

                        </div>



                    </div>
                    <div class="tab-pane fade"  id="Transferss" role="tabpanel" aria-labelledby="v-pills-settings-tab">



                        <ul class="list-group">
                            <li class="list-group-item disabled" aria-disabled="true"> <div class="row">
                                    <div class="col">
                                        <input type="number"  style="border: none" name="profile_form_money_deserved" class="form-control" />
                                    </div>
                                    <div class="col">
                                        <p class="label_basic right_center" > المبلغ المستحق </p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"> <div class="row">
                                    <div class="col">
                                        <input type="number"  style="border: none"name="profile_form_money_paid" class="form-control" />
                                    </div>
                                    <div class="col">
                                        <p class="label_basic right_center" > المبلغ المدفوع </p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"> <div class="row">
                                    <div class="col">
                                        <input type="number" style="border: none" id="profile_form_money_Remainder" class="form-control" />
                                    </div>
                                    <div class="col">
                                        <p class="label_basic right_center" > المبلغ المتبقي </p>
                                    </div>

                                </div>
                            </li>
<br>
                            <div class="form-group right">
                                <button class="btn btn btn-primary" style="width: 105px;" type="button">تسديد مبلغ</button>

                            </div>

                        </ul>




                </div>



             </div>


            </div>

            <div class="col">

                <div class="list-group right" id="v-pills-tab" role="tablist" aria-orientation="vertical"style="padding-top: 1rem;">
                    <a class="list-group-item list-group-item-action active" data-toggle="pill" href="#info" role="tab" aria-controls="v-pills-home" aria-selected="true">معلومات أساسية</a>
                    <a class="list-group-item list-group-item-action" data-toggle="pill" href="#Record" role="tab" aria-controls="v-pills-profile" aria-selected="false">سجل المستفيد</a>
                    <a class="list-group-item list-group-item-action" data-toggle="pill" href="#Operations" role="tab" aria-controls="v-pills-messages" aria-selected="false">العمليات</a>
                    <a class="list-group-item list-group-item-action" data-toggle="pill" href="#Transferss" role="tab" aria-controls="v-pills-settings" aria-selected="false">التحويلات المالية</a>
                </div>



            </div>
        </div>
        </form>
    </div>







@endsection

@section('scripts')

@endsection
