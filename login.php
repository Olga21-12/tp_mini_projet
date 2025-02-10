<?php  
    
    $title = "Login";
    $nav = "./login.php";
    $erreur = null;

    if (!empty($_POST['pseudo']) || !empty($_POST['password'])){ // для проверки пароля
        if ($_POST['pseudo'] === "Olga" && $_POST['password'] === "cfitech"){
            //echo "Bienvenue !";
            session_start();
            $_SESSION['connected'] = true;
              $_SESSION['pseudo'] = $_POST['pseudo']; // для отображения имени на другой странице во фразе
            header("Location: mon_profile.php");
        }else {
            $erreur = "Identifiants incorrects !";
        }
    }

    require "./header.php";

    if (is_connected()){
        header("Location: mon_profile.php");
    } // проверяет активна ли сессия и перенаправляет на другуб страницу

   
    if ($erreur) : ?>
        <div class="alert alert-danger">
        <?php echo $erreur; ?>
        </div>
    <?php endif;
?>

    <div class="wrapper">
        <div class="container">

      

<div align="center">
    <h2>Login</h2>

<form action="login.php" method="POST">
  <p><input type="text" name="pseudo" placeholder="Votre login" required></p>
  <p><input type="password" name="password" placeholder="Votre mot de passe" required></p>
  <p><button type="submit" class="btn btn-primary">Se connecter</button></p>
</form>

        </div>

    </div>

</body>

<?php
require "./footer.php";
?>