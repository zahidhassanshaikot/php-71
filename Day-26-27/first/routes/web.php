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

route::get('/login',[
    'uses'=>'NewShopController@login',
    'as'=>'login'
]);

route::get('/registration',[
    'uses'=>'NewShopController@registration',
    'as'=>'registration'
]);




