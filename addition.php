<?php
session_start();
$title = "Addition";
$nav = "./addition.php";
  
require "header.php";
require "./calc.php";
if(!is_connected()){ // если нет подключения (нет логина и пароля) отправляет на страницу "логин"
    header("Location: login.php");
  }

?>

    <div class="wrapper_math">

    <div class="container_buttons">
        <div class="buttons">
            <a href="./addition.php" class="button active">Addition</a>
            <a href="./soustraction.php" class="button">Soustraction</a>
            <a href="./multiplication.php" class="button">Multiplication</a>
            <a href="./division.php" class="button">Division</a>
        </div>
    </div>


        <div class="container_math">

<h1>Addition</h1>

<form action="addition.php" method="POST">
        <label class="enter" for="num1">Votre premier numéro :</label><br>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label class="enter" for="num2">Votre deuxième numéro :</label><br>
        <input type="number" name="num2" id="num2" required>
        <br>
        <button type="submit">Somme</button>
    </form>

    <div class="container_history">
        
    <?php
    // Обработка формы
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Проверка ввода
        if (is_numeric($num1) && is_numeric($num2)) {
            // Используем функцию из calc.php
                $result = addition((float)$num1, (float)$num2);

         // Проверка, существует ли массив истории, если нет, создаём его
        // if (!isset($_SESSION['addition_results'])) {
        //    $_SESSION['addition_results'] = [];
       // }

                // Добавляем новый результат в массив
          //      $_SESSION['addition_results'][] = [
          //          'num1' => $num1,
          //          'num2' => $num2,
          //          'result' => $result
          //      ];
        

            echo "<h2>Result: $result</h2>";
        } else {
            echo "<p style='color: red;'>Please enter valid numbers.</p>";
        }
    }
   //  Для отображения всех сохранённых результатов

 //  if (isset($_SESSION['addition_results']) && count($_SESSION['addition_results']) > 0) {
  //  echo "<h3>History of Results:</h3><ul>";
  //  foreach ($_SESSION['addition_results'] as $calculation) {
  //      echo "<li>{$calculation['num1']} + {$calculation['num2']} = {$calculation['result']}</li>";
 //   }
 //   echo "</ul>";
//}
?>


        </div>

    </div>

</body>

<?php
  require "footer.php";
?>