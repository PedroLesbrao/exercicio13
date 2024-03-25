<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
    <h1>CT Desenvolvimento de Sistemas Back-End</h1>
    <div id="container">
        <?php
         echo "Junção de operadores aritiméticos e  de atribuição<br><br>";

         $iNum1 = 5;
         $iNum2 = 3;

         echo($iNum1+= $iNum2)."<br>";
         echo($iNum1-= $iNum2)."<br>";
         echo($iNum1*= $iNum2)."<br>";
         echo($iNum1/= $iNum2)."<br>";
         echo($iNum1%= $iNum2)."<br>";
         ?>
        </div>
    </body>
</html>