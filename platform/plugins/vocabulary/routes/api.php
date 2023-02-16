<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Vocabulary\Models\Vocabulary;

Route::group([
    'middleware' => 'api',
    'prefix' => 'api/v1',
    'namespace' => 'Botble\Vocabulary\Http\Controllers\API',
], function () {
    Route::prefix("vocabulary")->group(function () {
        Route::get("list", function(Request $request, BaseHttpResponse $response){
                $records = Vocabulary::where('status', 'published')->get();
                return $response->setData($records);
        });
    });
});
