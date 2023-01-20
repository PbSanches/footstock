<?php

     $now = date_create('now')->format('Y-m-d H:i:s');
     $sql = "SELECT * FROM Produto WHERE Data_Cadastro = $now";
     $res = $conn-> query($sql);

     while($row = $res-> fetch_object()) {
        print "<option = '".$row-> ID."'>";
        print $row-> Nome."</option";
     }
?>