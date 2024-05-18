<?php

use App\Http\Controllers\ClothOrder\ClothTypeController;
use App\Http\Controllers\RegeneratePost;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('add/cloth-type', [ClothTypeController::class, 'add_cloth_type'])->name('admin.add.cloth');
Route::post('add/cloth-type/store', [ClothTypeController::class, 'add_cloth_type_store'])->name('admin.add.cloth.store');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/api', function(){

    $client = new Client(['verify' => false]);
    $response = $client->post('https://api.openai.com/v1/engines/davinci-codex/completions', [
        'headers' => [
            'Authorization' => 'Bearer sk-proj-510CQJpMnCkW7l7o51DQT3BlbkFJPBF2PW49bsmkpvX3DxaU',
            'Content-Type' => 'application/json',
        ],
        'json' => [
            'prompt' => "hello",
            'max_tokens' => 100,
        ],
    ]);

    // Handle response
    $responseData = json_decode($response->getBody()->getContents(), true);
    $answer = $responseData['choices'][0]['text'];

    // Return the answer
    return response()->json(['answer' => $answer]);


});

// Route::get('/api', [RegeneratePost::class , 'index']);


Route::get('/chat/get', function(){


    $client = new Client([
         'verify' => false,
     ]);

    $response = $client->get('https://jsonplaceholder.typicode.com/posts', [
        GuzzleHttp\RequestOptions::JSON => ['foo' => 'bar'] 
    ]);

// $response = $client->get('https://jsonplaceholder.typicode.com/posts');

// 

// $jsonData = json_decode($response->getBody()->getContents(), true);

    return response()->json([
        'data' => $response 
    ]);
});


Route::post('/chat', function(){


        $client = new Client([
             'verify' => false,
         ]);

        $response = $client->get('https://jsonplaceholder.typicode.com/posts', [
            GuzzleHttp\RequestOptions::JSON => ['foo' => 'bar'] 
        ]);
    
    // $response = $client->get('https://jsonplaceholder.typicode.com/posts');

    // 
    
    // $jsonData = json_decode($response->getBody()->getContents(), true);

    return response()->json([
        'data' => $response 
    ]);
});