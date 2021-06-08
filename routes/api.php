<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Crm Status
    Route::apiResource('crm-statuses', 'CrmStatusApiController');

    // Crm Customer
    Route::apiResource('crm-customers', 'CrmCustomerApiController');

    // Crm Note
    Route::apiResource('crm-notes', 'CrmNoteApiController');

    // Crm Document
    Route::post('crm-documents/media', 'CrmDocumentApiController@storeMedia')->name('crm-documents.storeMedia');
    Route::apiResource('crm-documents', 'CrmDocumentApiController');

    // Content Category
    Route::apiResource('content-categories', 'ContentCategoryApiController');

    // Content Tag
    Route::apiResource('content-tags', 'ContentTagApiController');

    // Content Page
    Route::post('content-pages/media', 'ContentPageApiController@storeMedia')->name('content-pages.storeMedia');
    Route::apiResource('content-pages', 'ContentPageApiController');

    // Contact Company
    Route::apiResource('contact-companies', 'ContactCompanyApiController');

    // Contact Contacts
    Route::apiResource('contact-contacts', 'ContactContactsApiController');

    // Expense Category
    Route::apiResource('expense-categories', 'ExpenseCategoryApiController');

    // Income Category
    Route::apiResource('income-categories', 'IncomeCategoryApiController');

    // Expense
    Route::apiResource('expenses', 'ExpenseApiController');

    // Income
    Route::apiResource('incomes', 'IncomeApiController');

    // Sliders
    Route::post('sliders/media', 'SlidersApiController@storeMedia')->name('sliders.storeMedia');
    Route::apiResource('sliders', 'SlidersApiController');

    // Barbers
    Route::post('barbers/media', 'BarbersApiController@storeMedia')->name('barbers.storeMedia');
    Route::apiResource('barbers', 'BarbersApiController');

    // Reviews
    Route::apiResource('reviews', 'ReviewsApiController');

    // Blog
    Route::post('blogs/media', 'BlogApiController@storeMedia')->name('blogs.storeMedia');
    Route::apiResource('blogs', 'BlogApiController');

    // Discounts
    Route::apiResource('discounts', 'DiscountsApiController', ['except' => ['store', 'update']]);

    // Services
    Route::apiResource('services', 'ServicesApiController');

    // Bookings
    Route::apiResource('bookings', 'BookingsApiController');

    // About Us
    Route::post('aboutuses/media', 'AboutUsApiController@storeMedia')->name('aboutuses.storeMedia');
    Route::apiResource('aboutuses', 'AboutUsApiController');

    // Contact Us
    Route::apiResource('contactuses', 'ContactUsApiController', ['except' => ['store', 'update']]);

    // Subscribers
    Route::apiResource('subscribers', 'SubscribersApiController', ['except' => ['store', 'update', 'destroy']]);

    // Gallery
    Route::post('galleries/media', 'GalleryApiController@storeMedia')->name('galleries.storeMedia');
    Route::apiResource('galleries', 'GalleryApiController');
});
