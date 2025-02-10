<?php  
    session_start();
    $title = "Mon Profil";
    $nav = "./mon_profile.php";

    require "./header.php";
    if(!is_connected()){ // если нет подключения (нет логина и пароля) отправляет на страницу "логин"
        header("Location: login.php");
      }
?>

    <div class="wrapper">
        <div class="container">

        <h1 style="color: rgb(37, 35, 35);">Bienvenue 
  <?php echo $_SESSION['pseudo']; // для отображения имени(логина) во фразе
  ?> 
 dans votre profil</h1>


<h1 style="color: rgb(37, 35, 35);">Les petits rois de nos vies</h1>

            <img class="chien" src="./img/mon_chien.jpg" alt="chien" title="chien">

    <p class="chien_p">Les petits chiens, ces boules de poils adorables, règnent sur nos cœurs avec une autorité douce mais indiscutable. Ils sont comme des rois miniatures : tout tourne autour d’eux, même quand ils renversent accidentellement une tasse de café (et font semblant que c’était notre faute). Qui pourrait résister à leurs grands yeux implorants et à leur talent pour faire semblant d’être innocents ?</p>
    <p class="chien_p">Le matin, ils nous réveillent non pas avec des aboiements, mais avec ce regard qui dit : "Tu veux bien te lever ? J’ai des choses très importantes à renifler dehors." On obéit, bien sûr. Et puis, il y a leurs petites bêtises, comme voler une chaussette ou se rouler dans quelque chose d’indescriptiblement... odorant. Mais on leur pardonne tout, parce qu’après tout, comment ne pas aimer une créature capable de transformer une journée ordinaire en un festival de rires et de câlins ?</p>
    
        </div>

    </div>

</body>

<?php
require "./footer.php";
?>