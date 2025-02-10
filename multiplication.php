<?php  
    session_start();
    $title = "Multiplication";
    $nav = "./multiplication.php";
    require "./header.php";
    require "./calc.php";
    if(!is_connected()){ // если нет подключения (нет логина и пароля) отправляет на страницу "логин"
        header("Location: login.php");
      }
?>

    <div class="wrapper_math">
        <div class="container_math">

<h1>Multiplication</h1>


<form action="multiplication.php" method="POST">
        <label class="enter" for="num1">Votre premier numéro :</label><br>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label class="enter" for="num2">Votre deuxième numéro :</label><br>
        <input type="number" name="num2" id="num2" required>
        <br>
        <button type="submit">Multiplier</button>
    </form>

    <?php
    // Обработка формы
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        // Проверка ввода
        if (is_numeric($num1) && is_numeric($num2)) {
            // Используем функцию из calc.php
                $result = multiplication((float)$num1, (float)$num2);
         // Проверка, существует ли массив истории, если нет, создаём его
         if (!isset($_SESSION['multiplication_results'])) {
            $_SESSION['multiplication_results'] = [];
        }
                // Добавляем новый результат в массив
                $_SESSION['multiplication_results'][] = [
                    'num1' => $num1,
                    'num2' => $num2,
                    'result' => $result
                ];

            echo "<h2>Result: $result</h2>";
        } else {
            echo "<p style='color: red;'>Please enter valid numbers.</p>";
        }
    }
   //  Для отображения всех сохранённых результатов

   if (isset($_SESSION['multiplication_results']) && count($_SESSION['multiplication_results']) > 0) {
    echo "<h3>History of Results:</h3><ul>";
    foreach ($_SESSION['multiplication_results'] as $calculation) {
        echo "<li>{$calculation['num1']} × {$calculation['num2']} = {$calculation['result']}</li>";
    }
    echo "</ul>";
}
?>

        </div>
    </div>
</body>

<?php
require "./footer.php";
?>