<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Jobs
    Route::apiResource('jobs', 'JobApiController');

    // Skills
    Route::apiResource('skills', 'SkillApiController');

    // Applicants
    Route::apiResource('applicants', 'ApplicantApiController');
});
