<?php

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

Route::get('/', function()
{
   return View::make('pages.home');
}); 
Route::get('/contact', function()
{
   return View::make('pages.contact');
});

Route::get('/shan', function()
{
   echo "<h1> Shan's Web Page </h1>";
});

Route::get('/welcome', function()
{
   return View::make('welcome');
});


Route::get('/login', 'TableController@login');

Route::get('/forgot', 'TableController@forgotpwd');

Route::get('/reset', 'TableController@reset');

Route::get('/rec_myprofile', 'TableController@rec_myprofile');


Route::get('/uploadresume1', 'TableController@uploadresume1');


Route::get('/masters', 'TableController@masters');

Route::get('/recruitmentdata', 'TableController@recruitmentdata');

Route::get('/candidatedetails', 'TableController@candidatedetails');


Route::get('/candidateprofile', 'TableController@candidateprofile');


Route::get('/users_and_roles', 'TableController@users_and_roles');
Route::get('/users_and_roles/addedituser', 'TableController@users_and_roles_addedituser');
Route::get('/users_and_roles/addeditrole', 'TableController@users_and_roles_addeditrole');
Route::get('/users_and_roles/viewuser', 'TableController@users_and_roles_viewuser');
Route::get('/users_and_roles/viewrole', 'TableController@users_and_roles_viewrole');

Route::get('/candidateprofilefieldmanagement', 'TableController@candidateprofilefieldmanagement');


Route::get('/masters/jobtitlemaster/index', 'TableController@masters_jobtitlemaster_index');
Route::get('/masters/jobtitlemaster/addedit', 'TableController@masters_jobtitlemaster_addedit');
Route::get('/masters/jobtitlemaster/viewjobtitle', 'TableController@masters_jobtitlemaster_viewjobtitle');


Route::get('/masters/unitmaster/viewunit', 'TableController@masters_unitmaster_viewunit');
Route::get('/masters/unitmaster/addedit', 'TableController@masters_unitmaster_addedit');
Route::get('/masters/unitmaster/index', 'TableController@masters_unitmaster_index');

Route::get('/masters/normalizedjobtitle/viewNJT', 'TableController@masters_normalizedjobtitle_viewNJT');
Route::get('/masters/normalizedjobtitle/addedit', 'TableController@masters_normalizedjobtitle_addedit');
Route::get('/masters/normalizedjobtitle/index', 'TableController@masters_normalizedjobtitle_index');




Route::get('/masters/skillmaster/viewskill', 'TableController@masters_skillmaster_viewskill');
Route::get('/masters/skillmaster/addedit', 'TableController@masters_skillmaster_addedit');
Route::get('/masters/skillmaster/index', 'TableController@masters_skillmaster_index');

Route::get('/masters/softskillmaster/viewsoftskill', 'TableController@masters_softskillmaster_viewsoftskill');
Route::get('/masters/softskillmaster/addedit', 'TableController@masters_softskillmaster_addedit');
Route::get('/masters/softskillmaster/index', 'TableController@masters_softskillmaster_index');

Route::get('/masters/companymaster/viewcompany', 'TableController@masters_companymaster_viewcompany');
Route::get('/masters/companymaster/addedit', 'TableController@masters_companymaster_addedit');
Route::get('/masters/companymaster/index', 'TableController@masters_companymaster_index');

Route::get('/masters/externalconsultancy/view', 'TableController@masters_externalconsultancy_view');
Route::get('/masters/externalconsultancy/addedit', 'TableController@masters_externalconsultancy_addedit');
Route::get('/masters/externalconsultancy/index', 'TableController@masters_externalconsultancy_index');


Route::get('/masters/highestdegree/view', 'TableController@masters_highestdegree_view');
Route::get('/masters/highestdegree/addedit', 'TableController@masters_highestdegree_addedit');
Route::get('/masters/highestdegree/index', 'TableController@masters_highestdegree_index');

Route::get('/masters/majors/view', 'TableController@masters_majors_view');
Route::get('/masters/majors/addedit', 'TableController@masters_majors_addedit');
Route::get('/masters/majors/index', 'TableController@masters_majors_index');

Route::get('/masters/university_collegemaster/view', 'TableController@masters_universitycollege_view');
Route::get('/masters/university_collegemaster/addedit', 'TableController@masters_universitycollege_addedit');
Route::get('/masters/university_collegemaster/index', 'TableController@masters_universitycollege_index');

Route::get('/masters/candidatestatus/view', 'TableController@masters_candidatestatus_view');
Route::get('/masters/candidatestatus/addedit', 'TableController@masters_candidatestatus_addedit');
Route::get('/masters/candidatestatus/index', 'TableController@masters_candidatestatus_index');

Route::get('/masters/currentcontracttype/view', 'TableController@masters_currentcontracttype_view');
Route::get('/masters/currentcontracttype/addedit', 'TableController@masters_currentcontracttype_addedit');
Route::get('/masters/currentcontracttype/index', 'TableController@masters_currentcontracttype_index');

Route::get('/masters/resumesource/view', 'TableController@masters_resumesource_view');
Route::get('/masters/resumesource/addedit', 'TableController@masters_resumesource_addedit');
Route::get('/masters/resumesource/index', 'TableController@masters_resumesource_index');

Route::get('/masters/currentemployment/view', 'TableController@masters_currentemployment_view');
Route::get('/masters/currentemployment/addedit', 'TableController@masters_currentemployment_addedit');
Route::get('/masters/currentemployment/index', 'TableController@masters_currentemployment_index');

Route::get('/adm_myprofile', 'TableController@adm_myprofile');

Route::get('/settings', 'TableController@settings');

Route::get('/test', 'TableController@test');
Route::get('/test2', 'TableController@test2');
Route::get('/test3', 'TableController@test3');
Route::get('/test4', 'TableController@test4');

