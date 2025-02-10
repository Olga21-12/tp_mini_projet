<?php
session_start();
unset($_SESSION['connected']); //для завершения сеанса
unset($_SESSION['pseudo']);
session_unset();  // для завершения всех сеансов
header("Location: index.php"); //для автоматического перехода на страницу

?> 