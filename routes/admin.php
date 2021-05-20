

<?php
Route::get('/admin', function () {
return 'welcome admin to our page';
});



Route::group(['prefix'=>'boss','middleware' => 'auth'],function(){


    Route::get('/karim',function(){
        return 'karim is good man';
    });
});

Route::get('/sara',function(){
    return 'sara is good girl';
})->middleware('auth');
