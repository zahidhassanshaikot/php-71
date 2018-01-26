<?php
route::get('/',[
    'uses'=>'NewShopController@index',
    'as'=>'/'
]);

route::get('/female-product',[
    'uses'=>'NewShopController@femaleProduct',
    'as'=>'/female-product'
]);
route::get('/male-product',[
    'uses'=>'NewShopController@maleProduct',
    'as'=>'/male-product'
]);

route::get('/code',[
    'uses'=>'NewShopController@code',
    'as'=>'code'
]);


route::get('/mail-us',[
    'uses'=>'NewShopController@mailUs',
    'as'=>'mail-us'
]);

route::get('/single-product',[
    'uses'=>'NewShopController@singleProduct',
    'as'=>'single-product'
]);

route::get('/checkout',[
    'uses'=>'NewShopController@checkout',
    'as'=>'checkout'
]);

route::get('user/login',[
    'uses'=>'NewShopController@login',
    'as'=>'user/login'
]);

route::get('/registration',[
    'uses'=>'NewShopController@registration',
    'as'=>'registration'
]);

Route::get('/category/add',[
    'uses' => 'CategoryController@index',
    'as'=>'add-category'
]);
Route::post('/category/save',[
    'uses' => 'CategoryController@saveCategoryInfo',
    'as'=>'new-category'
]);

Route::get('/category/manage',[
    'uses' => 'CategoryController@manageCategoryInfo',
    'as'=>'manage-category'
]);

Route::get('/category/unpublished/{id}',[
    'uses' => 'CategoryController@unpublishedCategoryInfo',
    'as'=>'unpublished-category'
]);


Route::get('/category/published/{id}',[
    'uses' => 'CategoryController@publishedCategoryInfo',
    'as'=>'published-category'
]);

Route::get('/category/edit/{id}',[
    'uses' => 'CategoryController@editCategoryInfo',
    'as'=>'edit-category'
]);
Route::get('/category/delete/{id}',[
    'uses' => 'CategoryController@deleteCategoryInfo',
    'as'=>'delete-category'
]);
Route::post('/category/update',[
    'uses' => 'CategoryController@updateCategoryInfo',
    'as'=>'update-category'
]);

Route::get('/band/add',[
   'uses'=>'BandController@index',
   'as'=>'add-band'
]);

Route::post('/band/save',[
   'uses'=>'BandController@saveBandInfo',
   'as'=>'new-band'
]);

Route::get('/band/manage',[
   'uses'=>'BandController@manageBandInfo',
   'as'=>'manage-band'
]);


Route::get('/band/unpublished/{id}',[
    'uses' => 'BandController@unpublishedBandInfo',
    'as'=>'unpublished-band'
]);


Route::get('/band/published/{id}',[
    'uses' => 'BandController@publishedBandInfo',
    'as'=>'published-band'
]);

Route::get('/band/edit/{id}',[
    'uses' => 'BandController@editBandInfo',
    'as'=>'edit-band'
]);

Route::post('/band/update',[
    'uses' => 'BandController@updateBandInfo',
    'as'=>'update-band'
]);

Route::get('/band/delete/{id}',[
    'uses' => 'BandController@deleteBandInfo',
    'as'=>'delete-band'
]);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
