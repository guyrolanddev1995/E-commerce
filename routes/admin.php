<?php

Route::group(['prefix' => 'admin'], function () {
    Route::get("/login", 'Admin\AuthController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\AuthController@login')->name('admin.login.post');
    Route::get('/logout', 'Admin\AuthController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function(){
        Route::get('/home', function(){
            return view('admin.dashbord.index');
        })->name('admin.home');

        Route::get('/', function(){
            return view('admin.dashbord.index');
        })->name('admin.home');

        Route::get("/settings", 'Admin\SettingController@index')->name('admin.settings');
        // Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');

        Route::get('/categories/{category}/delete', 'Admin\CategoryController@destroy')->name('admin.categories.delete');
        Route::resource('categories', 'Admin\CategoryController')->names([
            'create' => 'admin.categories.create',
            'index'  => 'admin.categories.index',
            'store' => 'admin.categories.store',
                'edit' => 'admin.categories.edit',
            'update' => 'admin.categories.update',
        ]);

        // Route::get('/attributes/{attribute}/delete', 'Admin\AttributeController@destroy')->name('admin.attributes.delete');
        // Route::resource('attributes', 'Admin\AttributeController')->names([
        //     'create' => 'admin.attributes.create',
        //     'index'  => 'admin.attributes.index',
        //     'store' => 'admin.attributes.store',
        //     'edit' => 'admin.attributes.edit',
        //     'update' => 'admin.attributes.update',
        // ]);
        

        // Route::get('customers/{id}/activate/', 'Admin\CustomerController@activeCustomerCompte')->name('customer.compte.activate');
        // Route::resource('customers', 'Admin\CustomerController')->names([
        //     'create' => 'admin.customers.create',
        //     'index'  => 'admin.customers.index',
        //     'show' => 'admin.customers.show',
        //     'store' => 'admin.customers.store',
        //     'edit' => 'admin.customers.edit',
        //     'update' => 'admin.customers.update',
        // ]);


        // Route::group(['prefix' => 'attributes'], function () {
        //     Route::post('/get-values', 'Admin\AttributeValueController@getValues');
        //     Route::post('/add-values', 'Admin\AttributeValueController@addValues');
        //     Route::post('/update-values', 'Admin\AttributeValueController@updateValues');
        //     Route::post('/delete-values', 'Admin\AttributeValueController@deleteValues');
        // });

        Route::group(['prefix'  =>   'brands'], function() {
            Route::get('/', 'Admin\BrandController@create')->name('admin.brands.index');
            Route::post('/store', 'Admin\BrandController@store')->name('admin.brands.store');
            Route::get('/{id}/edit', 'Admin\BrandController@edit')->name('admin.brands.edit');
            Route::post('/update', 'Admin\BrandController@update')->name('admin.brands.update');
            Route::get('/{id}/delete', 'Admin\BrandController@delete')->name('admin.brands.delete');
        
        });

        Route::group(['prefix' => 'products'], function () {
            Route::get('/', 'Admin\ProductController@index')->name('admin.products.index');
            Route::get('/create', 'Admin\ProductController@create')->name('admin.products.create');
            Route::post('/store', 'Admin\ProductController@store')->name('admin.products.store');
            Route::get('/edit/{id}', 'Admin\ProductController@edit')->name('admin.products.edit');
            Route::post('/update', 'Admin\ProductController@update')->name('admin.products.update');
            Route::get('/delete/{id}', 'Admin\ProductController@delete')->name('admin.products.delete');

            Route::post('/images/upload', 'Admin\ProductImageController@upload')->name('admin.products.images.upload');
            Route::get('/images/{id}/delete', 'Admin\ProductImageController@delete')->name('admin.products.images.delete');

            Route::post('/upload-file', 'BaseController@uploadFile')->name("upload-files");
            Route::post('/upload-dropzoneFiles', 'Admin\ProductImageController@uploadInTmp')->name("upload-dropzoneFiles");

            // Route::get('/attributes/load', 'Admin\ProductAttributeController@loadAttributes');
            // // Load product attributes on the page load
            // Route::post('/attributes', 'Admin\ProductAttributeController@loadProductAttributes');
            // // Load option values for a attribute
            // Route::post('/attributes/values', 'Admin\ProductAttributeController@loadValues');
            // // Add product attribute to the current product
            // Route::post('/attributes/add', 'Admin\ProductAttributeController@addProductAttribute');
            // // Delete product attribute from the current product
            // Route::post('/attributes/delete', 'Admin\ProductAttributeController@deleteProductAttribute');
         
         });

         Route::group(['prefix' => 'orders'], function(){
             Route::get('/', 'Admin\OrderController@index')->name('admin.orders.index');
             Route::get('/show/{code}', "Admin\OrderController@show")->name('admin.orders.show');
             Route::get('/update/{id}', "Admin\OrderController@update")->name('admin.orders.update');
             Route::get('/{id}/confirm-delivery', "Admin\OrderController@confirmDelivery")->name('admin.orders.delivery');

             Route::get('/print-pdf/{code}', "Admin\OrderController@printPDF")->name('admin.orders.printPDF');
             Route::get('/invoice/{code}', 'Admin\OrderController@invoice')->name('admin.orders.invoice');
         });

        //  Route::get('/contact', 'Admin\ContactController@index')->name('admin.contact');
        //  Route::get('/contact/{contact}/show', 'Admin\ContactController@show')->name('admin.contact.show');
        //  Route::get('/contact/{contact}/delete', 'Admin\ContactController@delete')->name('admin.contact.delete');


        //  Route::group(['prefix' => 'media'], function() {
        //         Route::group(['prefix' => 'galeries'], function () {
        //             Route::get('create', 'Admin\GalerieController@create')->name('admin.galerie.create');
        //             Route::get('index', 'Admin\GalerieController@index')->name('admin.galerie.index');
        //         });
        //  });

         Route::group(['prefix' => 'slides'], function () {
            Route::get('create', 'Admin\SlideController@create')->name('admin.slide.create');
            Route::post('store', 'Admin\SlideController@store')->name('admin.slide.store');
            Route::get('/{slide}/delete', 'Admin\SlideController@delete')->name('admin.slide.delete');
        });

        // Route::group(['prefix' => 'users-account'], function(){
        //     Route::get('/', 'Admin\AccountController@index')->name('admin.account.index');
        //     Route::get('/create', 'Admin\AccountController@create')->name('admin.account.create');
        //     Route::post('/store', 'Admin\AccountController@store')->name('admin.account.store');
        //     Route::get('/{account}/show', 'Admin\AccountController@show')->name('admin.account.show');
        //     Route::get('/{account}/edit', 'Admin\AccountController@edit')->name('admin.account.edit');
        //     Route::put('/{account}/update', 'Admin\AccountController@update')->name('admin.account.update');
        //     Route::get('/{account}/delete', 'Admin\AccountController@delete')->name('admin.account.delete');

        //     Route::get('/{account}/toggle_status', 'Admin\AccountController@toggleStatus')->name('admin.account.toggle_status');
        // });

        // Route::group(['prefix' => 'roles'], function(){
            // Route::get('/', 'Admin\RoleController@index')->name('admin.role.index');
            // Route::get('/create', 'Admin\RoleController@create')->name('admin.role.create');
            // Route::post('/store', 'Admin\RoleController@store')->name('admin.role.store');
            // Route::get('/{role}/show', 'Admin\RoleController@show')->name('admin.role.show');
            // Route::get('/{role}/edit', 'Admin\RoleController@edit')->name('admin.role.edit');
            // Route::put('/{role}/update', 'Admin\RoleController@update')->name('admin.role.update');
            // Route::get('/{role}/delete', 'Admin\RoleController@delete')->name('admin.role.delete');
    //     });

            Route::prefix('notification')->group(function () {
                Route::get('/orders', 'Admin\HomeController@getOrderStatistiques');
                Route::get('/widgets/statistique', 'Admin\HomeController@widgetNotifications');
                Route::get('/lastest/orders', 'Admin\HomeController@getLatestOrders');
            });
    });
});