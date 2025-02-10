<?php  
    session_start();
    $title = "Base de Données";
    $nav = "./baseDeDonnees.php";
   // $pdo = new PDO('mysql:dbname=cours_mysql;host=localhost', "root","");  для подключения баззы данных

    require "./header.php";
?>

    <div class="wrapper">
        <div class="container">

<h1>Base de Données</h1>

<?php

if(!is_connected()): // если нет подключения, отправляет на страницу логина
    header("Location: login.php");
endif;
?>

<?php


/*======= подключение к базе данных и отображение всех пользователей с помощью var_dump
 
    try{
        $pdo = new PDO('mysql:dbname=cours_mysql;host=localhost', "root",""); 
        //On définit le mode d'erreur de PDO sur Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
        $resultat = $pdo->query('SELECT * FROM users');
        var_dump($resultat->fetchAll());
    }catch (PDOException $e){
        die('Erreur : '. $e->getMessage());
    }

=============================*

*/

/* ====== для отображения всех пользователей с использованием петли*/

try{
    $pdo = new PDO('mysql:dbname=cours_mysql;host=localhost', "root",""); 
    //On définit le mode d'erreur de PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// для проверки подключения
    echo 'Connexion réussie<br><br>';
   /* $resultat = $pdo->query('SELECT * FROM users');  // переменная для отображения всех пользователей
    while($toutdonnees = $resultat->fetch()){ // петля для отображения всех пользователей с именем и паролем
        echo '<br>ID : '.$toutdonnees['id_user'].'* Prénom : '.$toutdonnees['firstname'].'* Nom : '.$toutdonnees['lastname'].'* Gender : '.$toutdonnees['gender'].
        '* Date de Naissance : '.$toutdonnees['date_of_birth'].'* Ville : '.$toutdonnees['city']."<br>";
    };

 второй вариант
    $resultat = $pdo->query('SELECT * FROM users');
        $tabUsers = $resultat->fetchAll(PDO::FETCH_OBJ);
        foreach($tabUsers as $user){
            echo "Prenom : " . $user->firstname . "<br>Nom : " . $user->lastname . "<br><br>";
        }*/

    /*отобразить автора и название статьи из двух таблиц */    
        $resultat = $pdo->query('SELECT id_user, CONCAT (firstname," ", lastname) AS Auteurs, article_name FROM users INNER JOIN articles ON id_user = id_user_article LIMIT 5');
        $tabUsers = $resultat->fetchAll(PDO::FETCH_OBJ);
        foreach($tabUsers as $user){
            echo "ID d'auteurs : ".$user->id_user."<br>Nom de l'article : ". $user->article_name. "<br>Auteurs : " . $user->Auteurs . "<br><br>";
        }


}catch (PDOException $e){
    die('Erreur : '. $e->getMessage());
}
?>
        </div>
    </div>
</body>

<?php
require "./footer.php";
?>