<?php
// session_start();

   include_once "verificacao.php";

    // if ($_SESSION['logged_pass']){
    //     $_SESSION['msg'] = "";
    //     header("Location: cronograma.php");
    // }
    // else{
       // echo $_SERVER['REQUEST_METHOD'];
       
    // }
   //senha = do20fes19cab
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Festa do Cabide</title>
        
        <link rel="shortcut icon" href="img/favicon.ico" />
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/materialize.css" rel="stylesheet">
        <link href="css/materialize.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>   

        <img src="img/cabide-party.png" id="img-cabide-party" class="fa fa-comments fa-blink">
        <div class="row">
            <form action="verificacao.php" method="POST">
                <div class="input-field col s5 offset-s4 l4 offset-l4" id="icon">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="icon_prefix" type="password" class="validate" name="pass">
                    <label for="icon_prefix" id="letters">Enter your code</label>
                        <input class="btn btn-info btn-sm" id="btn-submit" type="submit" name="btn_submit" value="Enviar"></input>
                    </div>
                </div>
            </form>
        </div> 
        
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/script.js"></script>
        
        <?php if( $_SESSION['msg'] ): ?>
        <script type="text/javascript">
            M.toast({html: '<?php echo $_SESSION['msg']; ?>'})
        </script>
        <?php endif; ?>

    </body>
</html>