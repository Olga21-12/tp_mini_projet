<?php  
    session_start();
    $title = "Debug";
    $nav = "./debug.php";

    require "./header.php";

    
?>

  

<h1>Session Actuelle - Mode DEBUG</h1>
        <h3>Liste des variables de session :</h3>
        <p>
  <?php var_dump($_SESSION);?>
</p>


</body>

<?php
require "./footer.php";
?>