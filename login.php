  
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>ABVIP - Associação Batista Vida Plena</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
            <?php
                include 'menu.php';
            ?>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Acesso Restrito</h1>
            <br/>
            <form action="logar.php" method="post">
            <p class="lead">
                
                <span class="label">E-mail:</span>
                <input type="email" name=""  class="form-control" value="" required="required"  placeholder="Insira o email aqui">
                <span class="label">Senha:</span>
                <input type="password" name=""  class="form-control" value="" required="required"  placeholder="Insira a senha de acesso">
                <br/><br/>
                <input type="submit" name="enviar" value= "Acessar">
            </p>
            </form>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Rua Nove de Julho, 4322 - Centro - Marília - SP<br/>
              CEP 00000-000 = Fone (14) 3433-1602 - Ramal 33</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
