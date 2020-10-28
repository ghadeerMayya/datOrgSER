<?php

use App\Penifit;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
// Route::get()


###### test route ######
Route::get('/testyt', function () {
    return view('admin\profile2');
});
/*
Route::get('/test','CaseStudy\CaseStudyController@testt')->name('test');


Route::get('/testttt/{id}', function ($id) {
    return 'welcome '. $id;
});

Route::get('/ghtest', function () {
    return response() -> json([
        'doctor'=>
            ['id'=> '1',
                'name'=>'basheer']
        ,
        'penifit'=> ['id'=> '1',
            'name'=>'ahmad']
        ,
        'user'=> ['id'=> '1',
            'name'=>'reception']

    ]);

});
*/
###### test route ######



Route::get('/post/{id}','Posts@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/viewPenifits','PenifitController@viewpenifit');

Route::get('/addPenifits','PenifitController@addPenifits');

############ profile routes #####################
Route::prefix('/profile')->group(function () {
    Route::get('/getprofile/{id}', 'CaseStudy\CaseStudyController@penifit_profile')->name('profile');
    Route::post('/getprofiledata','CaseStudy\CaseStudyController@getProfileData')->name('getProfileData');
    ########### get profile log
    Route::get('/getlog','CaseStudy\CaseStudyController@getLogOfCustomer')->name('getProfileLog');
});
########### #End profile routes ##################
############ Admin routes  ######################
Route::prefix('/admin')->group(function () {
    Route::get('/adminpanel','Admin\AdminController@index')->name('adminpanel');
});

############ End Admin routes  ######################

############ Reception ############################

Route::prefix('/reception')->group(function () {
    Route::get('/receptionpanel','Reception\ReceptionController@index')->name('receptionpanel');
    Route::post('/addtowait','Reception\ReceptionController@addnewpenifitandtowait')->name('addtowaitinglist');
    Route::get('/getwaitingusers','Reception\ReceptionController@getwaitingusers')->name('getwaitingusers');
    Route::get('/getpenifitlog','Reception\ReceptionController@getPenifitLog')->name('getpenifitlog');
    Route::post('/searchid','Reception\ReceptionController@searchCardID')->name('searchid');
    Route::post('/savepenifit','Reception\ReceptionController@savePenifit')->name('savepenifit');
    Route::post('/booking','Reception\ReceptionController@booking_user')->name('booking');
    Route::get('/booking','Reception\ReceptionController@getDoctorsList')->name('getdoctorslist');


});



Route::resource('/events', 'EventController');
############ End Reception ############################

############ Case Study ############################

Route::prefix('/casestudy')->group(function () {
    Route::get('/casestudypanel','CaseStudy\CaseStudyController@index')->name('casestudypanel');
    ##############################Survies
    Route::post('/csrecieveform','CaseStudy\CaseStudyController@getSurvey')->name('getSurvey');
    Route::post('/saveInitialSurvey','CaseStudy\CaseStudyController@saveInitialSurvey')->name('saveInitialSurvey');
    Route::post('/saveSpecialAutSurvey','CaseStudy\CaseStudyController@saveSpecialAutSurvey')->name('saveSpecialAutSurvey');
    ##############################end Survies
    Route::get('/csform','CaseStudy\CaseStudyController@csform')->name('csform');
    Route::get('/getspecificwaitinguser','CaseStudy\CaseStudyController@getSpecificWaitingUsers')->name('getspecificwaitinguser');

});

############ End Case Study ############################

############# Finance routes #######################

Route::prefix('/finance')->group(function () {
    Route::post('/saveFinanceTransfer','CaseStudy\CaseStudyController@saveFinanceTransfer')->name('saveFinanceTransfer');
    Route::get('/getFinanceLog','CaseStudy\CaseStudyController@getFinanceLog')->name('getFinanceLog');
    Route::get('/getAllNewFinanceLog','Reception\ReceptionController@getAllNewFinanceLog')->name('getAllNewFinanceLog');
    Route::get('/financecard/{id}','Reception\ReceptionController@financecard')->name('financecard');
//    Route::get('/getprofile/{id}', 'CaseStudy\CaseStudyController@penifit_profile')->name('profile');
    Route::get('/getFinanceData','Reception\ReceptionController@getFinanceData')->name('getFinanceData');
    Route::get('/paymoney','Reception\ReceptionController@paymoney')->name('paymoney');
    Route::get('/getfinancelog','Reception\ReceptionController@get_finance_card_log')->name('getfinancelog');


});
############ End Finance routes ###################

############## Booking ###############################
Route::get('/booking','Booking\Booking@index')->name('booking1');


################End Booking #########################

Route::post('/deletePenifit','PenifitController@deletePenifit');
//Route::post('/addPenifits','PenifitController@addPenifits');

################## // clear route cache
Route::get('/clear-route-cache', function() {
    Artisan::call('config:clear');
    return "Route cache file removed";
})->name('routecasheclear');
