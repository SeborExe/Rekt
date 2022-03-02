<?php
declare(strict_types=1);

namespace App\Controller\Home;

require_once APP_DIR . '/app/views/layout.php';
require_once APP_DIR . '/app/model/Base_Model.php';

use App\Views\Layout;
use App\Model\Base;

function home() {
    $view_data = Base\get_view_file_path(__FUNCTION__);
    $view_data['css_js'] = 'base';

    return Layout\render($view_data);
}
