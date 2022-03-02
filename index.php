<?php
declare(strict_types=1);

session_start();

require __DIR__ . '/app/config/config.php';

define("APP_DIR", __DIR__);
define("STATS_DIR", APP_DIR . SLASH . 'data' . SLASH . 'stats' . SLASH);
define("IMG_DIR", APP_DIR . SLASH . 'data' . SLASH . 'images' . SLASH);
define("IMG_URL", BASE_URL . 'data/images/');
define("CSS_URL", BASE_URL . 'app/css/');
define("CSS_DIR", APP_DIR . SLASH . 'app' . SLASH . 'css' . SLASH);
define('JS_URL', BASE_URL . 'app/js/');

require __DIR__ . '/vendor/autoload.php';

use Siler\Functional as λ;
use Siler\Route;
use App\Controller\Home;
use App\Controller\Select;
use App\Controller\User;

Route\get('/', function () {
    return Home\home();
});

Route\get('/Select/enter', function () {
    return Select\enter();
});

Route\get('/user/login', function () {
    return User\login();
});