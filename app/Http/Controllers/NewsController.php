<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //

    public function index(){
        
        $httpClient = new \GuzzleHttp\Client();
        $request =
            $httpClient
                ->get("https://newsapi.org/v2/everything?q=bitcoin&apiKey=09d28a4c49f542ffa8ec1f31e2b994c0");

        $response = json_decode($request->getBody()->getContents());
        //dd($response);
        //return $response[count($response) - 1];
        return view("news",['news' =>$response]);
    }
}
