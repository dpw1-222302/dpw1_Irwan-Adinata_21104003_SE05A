<?php

   if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    echo "<div id='result'>Selamat Datang $name</div>";
   }

?>