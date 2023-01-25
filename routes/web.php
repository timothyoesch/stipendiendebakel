<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Validator;
use App\Models\Supporter;
use Illuminate\Support\Str;

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
    $supporters = Supporter::all();
    return view('index', [
        'supporters' => $supporters
    ]);
});

Route::post('sign', function () {
    $validator = Validator::make(request()->all(), [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required|email|unique:supporters,email',
        'school' => 'nullable',
    ], [
        'fname.required' => 'Bitte gib deinen Vornamen ein.',
        'lname.required' => 'Bitte gib deinen Nachnamen ein.',
        'email.required' => 'Bitte gib deine E-Mail Adresse ein.',
        'email.email' => 'Bitte gib eine gültige E-Mail Adresse ein.',
        'email.unique' => 'Diese E-Mail Adresse wurde bereits verwendet.',
    ]);
    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            "errors" => $validator->errors()
        ]);
    }
    $newSupporter = new Supporter();
    $newSupporter->fill($validator->validated());
    $newSupporter->email_verified = false;
    $newSupporter->email_verification_token = Str::uuid()->toString();
    $newSupporter->save();
    return response()->json([
        'success' => true
    ]);
});

Route::get('test', function () {
    $newSupporter = new Supporter();
    $newSupporter->fname = 'John';
    $newSupporter->lname = 'Doe';
    $newSupporter->email = 'test@test.ch';
    $newSupporter->school = 'Test School';
    $newSupporter->email_verified = false;
    $newSupporter->email_verification_token = Str::uuid()->toString();
    $newSupporter->save();
    $supporters = Supporter::all();
    dd($supporters);
});
