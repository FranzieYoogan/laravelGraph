<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Controller
{
    
    public function sendEmotions(request $request) {

        $happiness = $request->input('happiness');
        $motivation = $request->input('motivation');
        $determination = $request->input('determination');
        $sadness = $request->input('sadness');
        $fear = $request->input('fear');

        if($happiness ||$motivation || $determination || $sadness || $fear) {

            return view('welcome', ['happiness' => $happiness, 'motivation' => $motivation, 'determination' => $determination, 'sadness' => $sadness, 'fear' => $fear,]);

        } else {

            $happiness = 0;
            $motivation = 0;
            $determination = 0;
            $sadness = 0;
            $fear = 0;
            return view('welcome', ['happiness' => $happiness, 'motivation' => $motivation, 'determination' => $determination, 'sadness' => $sadness, 'fear' => $fear,]);
        }

       
    }

}
