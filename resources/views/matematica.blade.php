///<?php 
/*class matematica {
    public static function sumar($num1, $num2){
        $sumar=$num1+$num2;
        return $suma;
    }
    public static function restar($num1, $num2){
        $resta=$num1+$num2;
        return $resta;
    }
    public static function multiplicar($num1, $num2){
        $multi=$num1+$num2;
        return $multi;
    }
    public static function dividir($num1, $num2){
        $divi=$num1+$num2;
        return $divi;
    }

}

?>



/*<?php */

/*include ("matematica.blade.php");
if(isset($_REQUEST['Calcular'])){
    $n1=$_REQUEST['numero1'];
    $n2=$_REQUEST['numero2'];
    $op=$_REQUEST['opciones'];

    switch($op){

        case 0:echo "$n1 + $n2 = ". matematica::sumar($n1, $n2);break;
        case 1:echo "$n1 - $n2 = ". matematica::restar($n1, $n2);break;
        case 2:echo "$n1 * $n2 = ". matematica::multiplicar($n1, $n2);break;
        case 3:echo "$n1 / $n2 = ". matematica::dividir($n1, $n2);break;
    }
}
 ?>*/
 <?php 
$operacion = $_POST('opciones');

switch($operacion){

    case sumar:
    echo $_POST('numero1') +$_POST('numero2')
}
?>
