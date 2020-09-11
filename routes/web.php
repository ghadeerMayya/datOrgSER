<?php

use App\Penifit;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
// Route::get()

//Route::get('/test', function () {
//    return 'welcome';
//});

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


Route::get('/post/{id}','Posts@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/viewPenifits','PenifitController@viewpenifit');

Route::get('/addPenifits','PenifitController@addPenifits');

//Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//Route::get('/addPenifits/{id}',function ($id){
//$penifit=Penifit::find($id);
//$penifit->delete();
//return redirect("viewPenifits");
//});


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


    ###### test route ######

    ###### test route ######
});
Route::get('/test','CaseStudy\CaseStudyController@testt')->name('test');


Route::resource('/events', 'EventController');
############ End Reception ############################

############ Case Study ############################

Route::prefix('/casestudy')->group(function () {
    Route::get('/casestudypanel','CaseStudy\CaseStudyController@index')->name('casestudypanel');
    Route::post('/csrecieveform','CaseStudy\CaseStudyController@getSurvey')->name('getSurvey');
    Route::post('/savesurvey','CaseStudy\CaseStudyController@saveSurvey')->name('saveSurvey');
    Route::get('/csform','CaseStudy\CaseStudyController@csform')->name('csform');
    Route::get('/getspecificwaitinguser','CaseStudy\CaseStudyController@getSpecificWaitingUsers')->name('getspecificwaitinguser');

});

############ End Case Study ############################

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
