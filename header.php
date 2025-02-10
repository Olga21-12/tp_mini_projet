<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>

            <?php
                    if(isset($title)){ 
                        echo $title; 
                    }else{
                        echo "Mon site";
                        }
                ?>
            </title>
            <?php 
    require_once "functions/authentification.php";                
            ?>

    </title>
</head>
<body>

    <div class="nav_bar">
        <div class="logotip">

                        <img class="logotip_img" src="./img/1676295806139337963.jpg" alt="logo" title="logo">

        </div>
    
        <nav class="menu">
            <ul class="menu-list">
                <li
                        class="
                    <?php echo ($nav === './index.php') ? 'active' : ''; ?>"
                ><a href="./index.php">HOME</a></li>
                <li
                        class="
                    <?php echo ($nav === './mon_profile.php') ? 'active' : ''; ?>"
                ><a href="./mon_profile.php">MON PROFIL</a></li>

                    <!-- структура, котороя позволяет оттображать вкладки в зависимости от подключения 
                     
                    <?php if(is_connected()): ?>
                    <li>====</li>
                    <?php endif; ?>
                -->


                <?php if(is_connected()): ?>
                <li
                        class="
                    <?php echo ($nav === './baseDeDonnees.php') ? 'active' : ''; ?>"
                ><a href="./baseDeDonnees.php">BD</a></li>
                <?php endif; ?>

                <li
                        class="
                    <?php echo ($nav === './debug.php') ? 'active' : ''; ?>"
                ><a href="./debug.php">DEBUG</a></li>
                <li
                        class="
                    <?php echo ($nav === './reset.php') ? 'active' : ''; ?>"
                ><a href="./reset.php">RESET</a></li>
                
                <?php if(is_connected()): ?>
                <li
                        class="
                    <?php echo ($nav === './calculatrice.php') ? 'active' : ''; ?>"
                ><a href="./calculatrice.php">CALCULATRICE</a></li>
                <?php endif; ?>
                
                </ul>
                

                <ul class="menu-list-login">
    <?php 
    if (!is_connected()): // Если пользователь НЕ аутентифицирован
    ?>
        <li
            class="
            <?php echo ($nav === './login.php') ? 'active' : ''; ?>"
        ><a href="./login.php">Login</a></li>
    <?php 
    else: // Если пользователь аутентифицирован
    ?>
        <li
            class="
            <?php echo ($nav === './logout.php') ? 'active' : ''; ?>"
        ><a href="./logout.php">Logout</a></li>
    <?php 
    endif; 
    ?>
</ul>

</nav>

    </div>    
</body>
</html>