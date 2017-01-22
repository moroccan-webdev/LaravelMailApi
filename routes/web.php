<?php
use Illuminate\Support\Facades\Mail;
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
    $data = [
      'title'=>'Hi friends this is a moroccan web developer with you!!',
      'content'=>'The application is done to send emails via Api and mailgun!!'
    ];

    Mail::send('emails.test', $data, function($message){
      $message->to('abdnorsmi@gmail.com', 'Devs')
              ->subject('Hello Brother how are you this is just a test !!');
    });
});
