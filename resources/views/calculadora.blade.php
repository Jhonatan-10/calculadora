
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Calculadora</title>
    
  </head>
  <body>
  <div class="container">


    <h1 class="text-center text-danger"> Calculadora </h1>

      <form method="post" action="{{ route('calculadora.recepcion') }}">
      @csrf

          <select class="bg-info" name="opciones"> 
               
               <option value="+"><b>sumar</b></option>
               <option value="-"><b>restar</b></option>
               <option value="*"><b>multiplicar</b></option>
               <option value="/"><b>dividir</b></option>
               <option value="^"><b>potencia</b></option>
          </select><br></br>
    
        <div class="form-group">
       
          <label for="n1" class="col-sm-2 control-label text-primary"><b>Introdusca el primer numero</b></label>
          <div class="col-sm-10">
             <input type="number" class="form-control" name="n1" id="n1"     placeholder="introdusca un numero aqui">
          </div>
        </div><br>

        <div class="form-group">
          <label for="n2" class="col-sm-2 control-label text-primary"><b>Introdusca el segundo numero</b></label>
          <div class="col-sm-10">
             <input type="number" class="form-control" name="n2" id="n2"     placeholder="introdusca un numero aqui">
          </div>
        </div><br>

        </div>
           <button type="submit" class="btn btn-success btn-lg btn-block">calcular</button>

        

          
     
      </form>
  </div>

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>