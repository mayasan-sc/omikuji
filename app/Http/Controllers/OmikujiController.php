<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OmikujiController extends Controller
{
    public function draw(Request $request){
      $draw = rand(1,5);
      if ($draw == 1){
        $result = "大吉";
        $result_img = "daikichi.png";
      } elseif ($draw == 2){
        $result = "中吉";
        $result_img = "chuukichi.png";
      } elseif ($draw == 3){
        $result = "小吉";
        $result_img = "syoukichi.png";
      } elseif ($draw == 4){
        $result = "凶";
        $result_img = "kyou.png";
      } elseif ($draw == 5){
        $result = "大凶";
        $result_img = "daikyou.png";
      }
      return view('result',['result'=>$result, 'result_img'=>$result_img]);
    }
}
