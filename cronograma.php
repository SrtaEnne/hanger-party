<?php
     
  include_once "verificacao.php";  
  
?>

<html>
    <head>
        <title>Festa do Cabide - Cronograma</title>

        <link rel="shortcut icon" href="img/favicon.ico" />
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/materialize.css" rel="stylesheet">
        <link href="css/materialize.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
      <img src="img/itens.png" id="img-cabide-party" class="fa fa-comments fa-blink">        
      <a href="logout.php">Logout</a>

        <table class="highlight centered" id="table-cronograma">
        <thead>
          <tr>
              <th>Nome</th>
              <th>Nome do item</th>
              <th>Preço</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Nátaly</td>
            <td>Devassa</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
    </body>
</html>