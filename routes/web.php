<?php

use App\Penifit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
// Route::get()

//Route::get('/test', function () {
//    return 'welcome';
//});

Route::get('/test/{id}', function ($id) {
    return 'welcome '. $id;
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
Route::prefix('admin')->group(function () {
    Route::get('adminpanel','Admin\AdminController@index')->name('adminpanel');
});

############ End Admin routes  ######################

############ Reception ############################

Route::prefix('reception')->group(function () {
    Route::get('receptionpanel','Reception\ReceptionController@index')->name('receptionpanel');
    Route::post('addtowait','Reception\ReceptionController@addnewpenifitandtowait')->name('addtowaitinglist');
    Route::get('getwaitingusers','Reception\ReceptionController@getwaitingusers')->name('getwaitingusers');
    Route::get('getpenifitlog','Reception\ReceptionController@getPenifitLog')->name('getpenifitlog');
    Route::post('searchid','Reception\ReceptionController@searchCardID')->name('searchid');



    ###### test route ######

    ###### test route ######
});
Route::get('test',function (){
    return view('casestudy\test');
});
############ End Reception ############################

############ Case Study ############################

Route::prefix('casestudy')->group(function () {
    Route::get('casestudypanel','CaseStudy\CaseStudyController@index')->name('casestudypanel');
});

############ End Case Study ############################

Route::post('/deletePenifit','PenifitController@deletePenifit');
//Route::post('/addPenifits','PenifitController@addPenifits');
