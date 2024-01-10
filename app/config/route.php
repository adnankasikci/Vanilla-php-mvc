<?php

require_once __DIR__ . '/../config/database.php';

$route = $_GET['page'] ?? 'home';


switch ($route) {
    case 'home':
        require_once __DIR__ . '/../controllers/RouteController.php';
        $controller = new HomeController();
        $controller->index();
        break;
    case 'about':
        require_once __DIR__ . '/../controllers/RouteController.php';
        $controller = new AboutController();
        $controller->index();
        break;
    case 'home/addUser':
        require_once __DIR__ . '/../controllers/UserController.php';
        $controller = new UserController($db);
        $controller->addUser();
        break;
    case 'home/listUser':
        require_once __DIR__ . '/../controllers/UserController.php';
        $controller = new UserController($db);
        $controller->listUser();
        break;
    case 'home/deleteUser':
        require_once __DIR__ . '/../controllers/UserController.php';
        $controller = new UserController($db);
        $controller->deleteUser();
        break;
    case 'home/updateUser':
        require_once __DIR__ . '/../controllers/UserController.php';
        $controller = new UserController($db);
        $controller->updateUser();
        break;

    default:
        echo '404 Not Found';
        break;
}
