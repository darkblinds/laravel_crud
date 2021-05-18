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


Route::get('/', function () {
    return view('welcome');
});

Route:: get('/get_employers','Controller@get_employers');
Route:: post('/insert_employer','Controller@insert_employer');
Route:: put('/edit_employer','Controller@edit_employer');
Route:: delete('/delete_employer','Controller@delete_employer');

Route:: get('/get_companys','Controller@get_companys');
Route:: post('/insert_company','Controller@insert_company');
Route:: put('/edit_company','Controller@edit_company');
Route:: delete('/delete_company','Controller@delete_company');

Route:: get('/get_jobs','Controller@get_jobs');
Route:: get('/get_jobs_company/{company_id}','Controller@get_jobs_by_company_id');
Route:: get('/get_jobs_employer/{employer_id}','Controller@get_jobs_by_employer_id');
Route:: post('/insert_job','Controller@insert_job');
Route:: post('/insert_jobs_company/{company_id}','Controller@insert_jobs_company');
Route:: post('/insert_jobs_employer/{employer_id}','Controller@insert_jobs_employer');

// Just to make CRUD complete
Route:: put('/edit_job','Controller@edit_job');
Route:: delete('/delete_job','Controller@delete_job');


