@extends('layouts.app')


@section('content')



        <div class="container ">
            <form  method = "get" id="admin" name="Initial_evaluationForm">
            <div class="row">
                <div class="col">
                    <div class="card border-primary mb-3 align font shadow " style="max-width: 100%;">
                        <div class="card-header ">إجمالي المستفيدين </div>
                        <div class="card-body text-primary">
                            <h5  id="admin_Ben" class="card-title font_size">......يكتب هنا عدد املستفيدين</h5>
                            <p class="card-text"></p>
                            <button type="button"  id="admin_Ben_button" class="btn btn-primary font_header button_border">تفاصيل</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-primary mb-3 align font shadow " style="max-width: 100%;">
                        <div  id="admin_users" class="card-header ">مستخدمي النظام </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title font_size">.......يكتب هنا عدد مستخدمي النظام</h5>
                            <p class="card-text"></p>
                            <button type="button"  id="admin_users_botton" class="btn btn-primary font_header button_border">تفاصيل</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-primary mb-3 align font shadow " style="max-width: 100%;">
                        <div id="admin_money" class="card-header ">القسم المالي</div>
                        <div class="card-body text-primary">
                            <h5 id="admin_money_amount" class="card-title font_size">.......المبالغ المدفوعة وغير المدفوعة</h5>
                            <p class="card-text"></p>
                            <button type="button"  id="admin_money_botton" class="btn btn-primary font_header button_border">تفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>

<hr>



        <div class="container ">

            <div class="row">
                <div class="col">
                    <div class="card border-primary mb-3 align font shadow " style="max-width: 100%;">
                        <div id="admin_reports" class="card-header ">التقارير  </div>
                        <div class="card-body text-primary">
                            <h5 id="admin_reports_row" class="card-title font_size">.....</h5>
                            <p class="card-text"></p>
                            <button type="button"  id="admin_reports_botton" class="btn btn-primary font_header button_border">تفاصيل</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-primary mb-3 align font shadow " style="max-width: 100%;">
                        <div id="admin_Assignments" class="card-header ">تتبع الاحالات  </div>
                        <div class="card-body text-primary">
                            <h5 id="admin_Assignments_row" class="card-title font_size">.......</h5>
                            <p class="card-text"></p>
                            <button type="button"  id="admin_Assignments_botton" class="btn btn-primary font_header button_border">تفاصيل</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-primary mb-3 align font shadow " style="max-width: 100%;">
                        <div id="admin_Assignments_close" class="card-header ">الحالات المغلقة </div>
                        <div class="card-body text-primary">
                            <h5 id="admin_Assignments_close_row" class="card-title font_size">.......</h5>
                            <p class="card-text"></p>
                            <button type="button"  id="admin_Assignments_close_botton" class="btn btn-primary font_header button_border">تفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>




</form>




@endsection

@section('scripts')







@endsection
