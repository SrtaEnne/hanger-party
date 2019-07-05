<?php
// session_start();
     
     include_once "verificacao.php";

  // if(!($_SESSION['logged_pass'])){
  //   header("Location: login.php");
  //   $_SESSION['msg'] = "";
  // }  

  
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
        <h1>CRONOGRAMA</h1>
        <a href="logout.php">Logout</a>




        <form action="#">
    <p>
      <label>
        <input type="checkbox" />
        <span>Red</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" checked="checked" />
        <span>Yellow</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Filled in</span>
      </label>
    </p>
    <p>
      <label>
        <input id="indeterminate-checkbox" type="checkbox" />
        <span>Indeterminate Style</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" checked="checked" disabled="disabled" />
        <span>Green</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" disabled="disabled" />
        <span>Brown</span>
      </label>
    </p>
  </form>
        

        
    </body>
</html>