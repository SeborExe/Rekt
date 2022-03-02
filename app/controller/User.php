<?php
declare(strict_types=1);

namespace App\Controller\User;

require_once APP_DIR . '/app/views/layout.php';
require_once APP_DIR . '/app/model/Base_Model.php';

use App\Views\Layout;
use App\Model\Base;

function login() {
    $view_data = Base\get_view_file_path(__FUNCTION__);
    $view_data['css_js'] = 'user';

    return Layout\render($view_data);
}