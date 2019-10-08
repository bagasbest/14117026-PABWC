<?php
	include "function.php";
?>


<!DOCTYPE html>

<html>
    <head></head>

    <body>
        <form action= "mtk.php" method = "POST">
        bilangan 1:
        <input type="text" name="operator1"><br>
        bilangan 2:
        <input type="text" name="operator2"><br>


        <!--operasi-->
        <select name="aritmatika">
        	<option value="penambahan">penambahan</option>
        	<option value="pengurangan">pengurangan</option>
        	<option value="pembagian">pembagian</option>

        </select>

        <button type="submit" name="coba" value="submit">submit</button>
    </body>
 </html>