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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/contact', 'HomeController@contact')->name('home.contact');

Route::post('/sendmail', 'HomeController@sendMail')->name('home.sendmail');

Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::resource('admin/skills', 'AdminSkillsController', ['names'=>[
        'index'=>'admin.skills.index',
        'create'=>'admin.skills.create',
        'store'=>'admin.skills.store',
        'edit'=>'admin.skills.edit',
        'update'=>'admin.skills.update',
        'show'=>'admin.skills.show',
        'destroy'=>'admin.skills.destroy'
    ]]);

    Route::resource('admin/projects', 'AdminProjectsController', ['names'=>[
        'index'=>'admin.projects.index',
        'create'=>'admin.projects.create',
        'store'=>'admin.projects.store',
        'edit'=>'admin.projects.edit',
        'update'=>'admin.projects.update',
        'show'=>'admin.projects.show',
        'destroy'=>'admin.projects.destroy'
    ]]);

    Route::resource('admin/users', 'AdminUsersController', ['names'=>[
        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit',
        'update'=>'admin.users.update',
        'show'=>'admin.users.show',
        'destroy'=>'admin.users.destroy'
    ]]);

});
