<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        // GET Homepage content
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $_SERVER['SERVER_NAME']."/tjs-glass/public/cockpit/api/singletons/get/homepage?token=71d96ea5087a6aae714f149ee4547e");

        // SSL important
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false); 

        $output = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($output);

        $data = array(
            'title' => $result->title
        );
        
        
        return \View::make('pages.index')->with("result", $result);
    }
}
