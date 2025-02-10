<?php  
    session_start();
    $title = "Calculatrice";
    $nav = "./calculatrice.php";

    require "./header.php";
    if(!is_connected()){ // если нет подключения (нет логина и пароля) отправляет на страницу "логин"
        header("Location: login.php");
      }
    
?>

<div class="wrapper_math">
    <div class="container">

        <h1>Page de la Calculatrice</h1>
        <p style="text-align: center;">Bienvenue <b>
  <?php echo $_SESSION['pseudo']; // для отображения имени(логина) во фразе
  ?></b>
  vers la page de la <u>Calculatrice</u>. Ici, vous pouvez choisir l'une des 4 fonctions mathématiques, dont vous pourrez ensuite regarder les résultats sur la page <b>Mon profil</b><br>Profitez bien ;)
 </p>

 <div class="buttons">

<div><a href="./addition.php" class="button">Addition</a></div>
<div><a href="./soustraction.php" class="button">Soustraction</a></div>
<div><a href="./multiplication.php" class="button">Multiplication</a></div>
<div><a href="./division.php" class="button">Division</a></div>

    </div>
</div>

</body>

<?php
require "./footer.php";
?>
