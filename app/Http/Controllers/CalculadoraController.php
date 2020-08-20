<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora(){
        return view('calculadora');
    }
    public function recepcioncalculadora() {
         $n1 = (float)$_POST['n1'];
         $n2 = (float)$_POST['n2'];
         $opciones = (string)$_POST['opciones'];

         $r = 0;
         

       
        if( $opciones == '+' ){
            $r = $n1+$n2;
        }
        elseif($opciones == '-'){
            $r = $n1-$n2;
        }
        elseif($opciones == '*'){
            $r = $n1*$n2;
        }
        elseif($opciones == '/') {
            $r = $n1/$n2;
        }
        else{
            $r = pow($n1,$n2);
        }
    
        
       

        return view('recepcioncalculadora',[

            'n1' => $n1,
            'n2' => $n2,
            'r' => $r,
           
        ]);
    }
}
