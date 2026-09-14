<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
        <div id="pagewidth" >
            <div id="header"><h1>Laravel - mon application</h1></div>
            <div id="maincol"><h2>Tp1. Initiation</h2>

   <?php
     echo"<ul>";       
     foreach($lesPeoduits as $unP) 
       echo "<li>".$unP->libellePdt . " " .$unP->prixPdt . " €" . "</li>";
                
     echo"</ul>";
     echo "=> Nb de produits : " . $enregCount . "<br />";
   ?>
</div>
  <div id="leftcol"> <h2>Menu</h2>
                <ul>
                    <?php include('menuV.php'); ?>
                </ul>
            </div>
        </div>
    </body>
</html>

