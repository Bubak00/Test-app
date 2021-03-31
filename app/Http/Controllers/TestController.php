<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function calculate(Request $request){
        $numberOne = $request->get('numberOne');
        $numberTwo = $request->get('numberTwo');
        $action = $request->get($numberOne*$numberTwo);



        return view('calculate')
            ->with('numberOne', $numberOne)
            ->with('numberTwo', $numberTwo)
            ->with('action', $action);

        return view('calculate', $action);

    }
}
//    public function calculate(Request $request){
//        $numberOne = $request->get('numberOne');
//        $numberTwo = $request->get('numberTwo');
////        $action = $request->get($numberOne  * $numberTwo);
//
//        return view('calculate')
//            ->with('numberOne', $numberOne)
//            ->with('numberTwo', $numberTwo);
////            ->with('action', $action);
//

