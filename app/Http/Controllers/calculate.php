<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculate extends Controller
{
    const ADDITION = '+';
    const SUBTRACTION = '-';
    const MUTIPICATION = 'X';
    const DIVISION ='/';

    public function calculate(Request $request)
    {
        $number_1 = $request->number_1;
        $number_2 = $request->number_2;
        $operator = $request->operator;


        switch ($operator) {
            case self::ADDITION:
                $result = $number_1 + $number_2;
                break;
            case self::SUBTRACTION:
                $result = $number_1 - $number_2;
                break;
            case self::MULTIPICATION:
                $result = $number_1 * $number_2;
                break;
            case self::DIVISION:
                if ($number_2 != 0){
                    $result = $number_1 / $number_2;
                    break;}
                else {
                    $result = "Số bị chia phải khác 0";
                }
                return view('ketqua', compact('result'));
    }
}}
