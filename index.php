<?php
    //визначаємо, з яким контроллером будемо працювати
$controllerName = isset ($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

echo 'Подключаемый php файл (Контроллер) = ' . $controllerName . '<br>';
         
    //визначаємо, з якою функцією будемо працювати
$actionName = isset ($_GET['action']) ? $_GET['action'] : 'index';
echo 'Функция,формирующая страницу (Экшн) = ' . $actionName . '<br>';

//Подключаем контроллер
include_once '../controllers/' . $controllerName . 'Controller.php';

//формуємо назву функції
$function = $actionName . 'Action';
echo 'Повна назва функції = ' . $function . '<br>';
$function();

?>