


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleContacto.css">

    <title>Contacto</title>
</head>
<body >
    <div id="volver">
        <a href="enviar.php"><img src="img/volver.png" alt=""> <br> Volver</a>
    </div>
    <div class="container col-11  col-sm-8 col-md-8 col-lg-6 col-xl-4 rounded pb-3">
  
      

   <div class="row" >
    
    <h1 >Contactanos!</h1>

  </div>
     
  
          <form method="POST" action="enviar.php">
          
            <div class="form-group ">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingresá tu nombre" name="nombre">
          </div>
          
          <div class="form-group">
              <label for="exampleFormControlInput2">Dirección de email</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="mail@example.com" name="email">
            </div>
         
         
          <div class="form-group ">
            <label for="exampleFormControlTextarea1">Escribe tu mensaje</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="mensaje" placeholder="Escribí tu mensaje acá..."></textarea>
          </div>

          <div class="row justify-content-center">
            <button class="btn btn-primary mx-auto" id="botonlogin" type="submit " >Enviar</button>
          </div>

      
        </form>
          
      
 
 


    </div>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>