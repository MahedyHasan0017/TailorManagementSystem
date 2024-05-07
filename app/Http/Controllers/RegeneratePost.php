<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegeneratePost extends Controller
{
    public function index(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        $jsonData = $response->json();

        return $jsonData  ;
    }

    public function chat(Request $request){

        // $message = 'Hello!';

        // $client = new Client([
        //     'verify' => false,
        // ]);
        // $url = 'https://api.openai.com/v1/chat/completions';
        // $headers = [
        //     'Content-Type' => 'application/json',
        //     'Authorization' => 'Bearer ' .'sk-proj-510CQJpMnCkW7l7o51DQT3BlbkFJPBF2PW49bsmkpvX3DxaU',
        // ];
        // $body = [
        //     'model' => 'gpt-3.5-turbo',
        //     'messages' => [['role' => 'user', 'content' => $message]],
        // ];
        // $response = $client->post($url, [
        //     'headers' => $headers, 
        //     'json' => $body,
        // ]);
        // $result = json_decode($response->getBody()->getContents(), true);
        // return response()->json($result['choices'][0]['message']['content']);

        // $response = Http::get('https://jsonplaceholder.typicode.com/posts');
    
        // $jsonData = $response->json();

        // return response()->json([
        //     'data' => $jsonData 
        // ]);


    }

}
