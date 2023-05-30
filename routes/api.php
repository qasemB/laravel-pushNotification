<?php

use App\Models\PushSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post("push-subscribe", function(Request $request){
    $uCode = random_int(1001, 1005564);
    PushSubscription::create([
        'data' => $request->getContent(),
        'user_ip' => $request->ip(),
        "user_code" => $uCode
    ]);
    return response()->json([
        'user_code' => $uCode
    ] , 200);
});
