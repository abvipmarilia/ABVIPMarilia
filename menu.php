<?php

  $pagina = $_GET['link'];
  if ($pagina == 1){
    $caminho = "class='nav-link active' href='index.php'";
  }
  else{
    $caminho = "class='nav-link' href='index.php'";
      }

?>
              <h3 class="masthead-brand">ABVIP</h3>
              <nav class="nav nav-masthead">
                <a <?=$caminho?>>Principal</a>
                <a class="nav-link" href="link=2">Atendimentos</a>
                <a class="nav-link" href="link=3">Quem somos</a>
                <a class="nav-link" href="link=4">Fale conosco</a>
                <a class="nav-link" href="link=5">Restrito</a>
              </nav>

