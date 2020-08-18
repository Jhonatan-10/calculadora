
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
    <style>
    h1{
        color: blue;
    }
    #ada{
        color: red;
    }
    
    
    </style>
</head>
<body>
<h1> Calculadora </h1>
<h2> Introduse los numeros </h2>
    <form method="post" action="calculadora">
          
          <input type="text" name="n1">
          <select name="opciones"> 
               
               <option value="0">Sumar</option>
               <option value="1">restar</option>
               <option value="2">multiplicar</option>
               <option value="3">dividir</option>
               <option value="4">potencia</option>
          
          
          </select>
          <input type="text" name="n2">

          <input type="submit" name="calcular" value="calcular"
          
     
    </form>


</body>
</html>


