<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
     <center> <h2><fonte color = red> OLÁ!</fonte> </h2><center>
          <h2> <?php echo "Hoje é " . date("Y/m/d")?> </h2>
   
    
    <center>
        
        <form action="uploads.php" method="post" enctype="multipart/form-data">
            Por favor, selecione a sua foto:<br><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    <input type="submit" value="Enviar" name="Enviar foto"><br>
</form></center>

        <?php
        // put your code here
        ?>
    </body>
</html>

