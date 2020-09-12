@extends('layouts.app')


@section('content')




    <div class="container emp-profile">
        <form method="get" id="profile_form">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{url('/images/profile.png')}}" id="profile_form_image" />
                        <div class="file btn btn-lg btn-primary">
                             تغيير الصورة
                            <input type="file" name="profile_form_image_change"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5 id="profile_form_name">اسم المستفيد </h5>

                        <ul class="nav nav-tabs" id="profile_form_tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="profile_form_tabs_about" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">عن المستفيد</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile_form_tabs_other" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">أخرى</a>
                            </li>

                        </ul>
                    </div>
                </div>
{{--                <div class="col-md-2">--}}
{{--                    <input type="submit" class="profile_form_btn" name="btnAddMore" value=" تعديل"/>--}}
{{--                </div>--}}
            </div>
            <div class="container emp-profile">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work" id="profile_form_info">
                        <p>معلومات التسجيل</p><br/>

                        <a >تاريخ التسجيل</a><br/><br/>
                        <a >حالة الاحالة</a><br/>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="label_basic"> معرف المستفيد</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="profile_form_about_id">Default</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="label_basic">الاسم</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="profile_form_about_name">Default</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="label_basic">رقم الهاتف</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="profile_form_about_phone">Default</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="label_basic">غير ذلك</label>
                                </div>
                                <div class="col-md-6">
                                    <label id="profile_form_about_phone">Default</label>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
يتم تعبئتها حسب الطلب
                    </div>
                </div>
            </div>
        </form>
    </div>




























@endsection

@section('scripts')







@endsection
