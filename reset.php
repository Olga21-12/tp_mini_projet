<?php  
    session_start();
    
    $title = "Reset";
    $nav = "./reset.php";
    $_SESSION = []; // Удаление всех переменных сессии
    session_unset(); // Завершение текущей сессии
    require "./header.php";
?>

  

<h1>Page de Reset</h1>

<p>Toutes les sessions ont été réinitialisées avec succès.</p>
 

</body>

<?php
require "./footer.php";
?>