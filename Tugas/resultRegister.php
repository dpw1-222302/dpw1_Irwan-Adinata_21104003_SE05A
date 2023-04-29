<?php

   if (isset($_POST['register'])) {
    $name = $_POST['username'];
    echo "<div id='result'>Terima kasih $name Telah Mendaftar, Silahkan Anda Untuk Login</div>";
   }

?>