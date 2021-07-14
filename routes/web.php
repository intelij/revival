<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use \Illuminate\Support\Facades\Mail;


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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::post('requestdemo', function (\Illuminate\Http\Request $request) {

    $name = $request->get('name');
    $email = $request->get('email');
    $phone = $request->get('phone');
    $company = $request->get('company');
    $messagebody = "New Demo Requests";

    $data = array('name' => $name, 'email' => $email, 'messagebody' => $messagebody, 'phone' => $phone, 'company' => $company);

    $email_to = "info@fnkdesigns.co.uk";

    $email_subject = "GyapomCare: Website Demo Request";

    Mail::send('emails.request', $data, function ($message) {
        $message->to('judyolonga@yahoo.co.uk', 'Mpilo Revival')->subject('Mpilo Revival Interest: Website Demo Request');
    });

    Mail::send('emails.request', $data, function ($message) {
        $message->to('ks.mkhonza@gmail.com', 'Mpilo Revival')->subject('Mpilo Revival Interest: Website Demo Request');
    });

    $input = $request->all();

    $data = [
        'name' => $input['name'],
        'email' => $input['email'],
        'phone' => $input['phone'],
        'company' => $request->get('company'),
    ];

    $file = fopen('mpilo.csv','a');  // 'a' for append to file - created if doesn't exit

    fputcsv($file,$data);

    fclose($file);

//    Mail::send('emails.confirm', $data, function ($message, $request)  {
//        $message->to($request->get('email'), 'FNK Designs')->subject('Message Confirmation');
//    });
//
//    dd($request->all());

    return redirect()->back()->with(['success' => 'Thank you! Your request has been received.']);
//    return redirect('confirm')->with($data);
});

Route::get('/', [GuestController::class, 'index']);

Route::post('/retrieve', [GuestController::class, 'retrieve'])->name('retrieve');
Route::post('/process', [GuestController::class, 'process'])->name('process');

Route::get('/{number}', [GuestController::class, 'edit']);

Route::post('/', [GuestController::class, 'confirm']);
