<?php

use App\Models\PushSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;

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

Route::post("/admin/showNotifForm", function(Request $request){
    $data = PushSubscription::Where("user_code", $request->user_code)->first();
    if($data == null) return back()->withErrors(["اشتراک یافت نشد"]);
    return view('notify', [
        'sub' => $data
    ]);
});

Route::post("/admin/sendNotif/{sub}", function(PushSubscription $sub, Request $request){
    $webPush = new WebPush([
        "VAPID" => [
            "publicKey" => "BNbqX8M5NJJfs_IcL_5Gfisx7FkOYHtYniD4QMJq1RB4DeQsOmGo3lO-zzurFEqTUwtrqQHKb62p_TzxPU552yI",
            "privateKey" => "i4I89hSrn-MGvpMr_-YzaFptRpKEyQ6IxD-CO9SthYs",
            "subject" => "https://codeyad.com/Masters/Profile/qasemb"
            ]
        ]);
    $webPush->sendOneNotification(
        Subscription::create(json_decode($sub->data, true)),
        json_encode($request->input())
    );
    return redirect("/");
});
