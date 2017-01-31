

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>Dynamisk Menu</title>
    <link rel="stylesheet" href="assets/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
</head>
<body>
    <div id="wrapper">
        <header>
        <?php
            include ("menu.php");
        ?>
        </header>

        <main>
<?php

    if( $_GET )
    {
        include( $_GET['side'] . ".php" );
    } 
    else 
    {
        include ("forside.php");
    }

?>
        </main>
    </div>

</body>
</html>