<?php
namespace App\Controller\Select;

require_once APP_DIR . '/app/views/layout.php';
require_once APP_DIR . '/app/model/Base_Model.php';

use App\Views\Layout;
use App\Model\Base;

function enter() {
    $view_data = Base\get_view_file_path(__FUNCTION__);
    $view_data['css_js'] = 'enter';

    return Layout\render($view_data);
}

