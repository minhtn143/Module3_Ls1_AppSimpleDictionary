<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dictionary extends Controller
{
    //
    const LIBRARY = ['eat'=>'ăn','drink'=>'uống', 'sleep'=>'ngủ'];
    public function translate(Request $request)
    {
        $keyword = $request->keyword;
        foreach (self::LIBRARY as $key => $item) {
            if ($keyword == $key){
                $result = $item;
                return view('dictionary',compact(['result','keyword']));
            }
        }
        $result = 'Not Found';
        return view('dictionary',compact(['result','keyword']));
    }
}
