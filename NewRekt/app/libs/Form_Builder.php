<?php

namespace App\Libs\FormBuilder;

function echo_ombox_result(string $path) {
    if (isset($_SESSION[$path])) {
        echo '<div class="urbox" id="urbox-result"><p>'.$_SESSION[$path].'</p></div>';

        unset($_SESSION[$path]);
    }
}

function echo_part_title(string $label) {
    echo '<div class="horizontal">
            <div class="horizontal-left"></div>
            <div class="horizontal-center">
              <p>'.$label.'</p>
            </div>
            <div class="horizontal-right"></div>
          </div>';
}

function echo_input(string $label, string $name, $value = '', string $type = 'text', string $extraInput = '', string $extraLabel = '') {
    echo '<div class="filters-row">
            <label id="' . $name . '-label" for="' . $name . '" ' . $extraLabel . '>' . $label . '</label>
            <div id="validation-' . $name . '" class="validation-box"></div>
            <div class="inputs">
                <input type="' . $type . '" id="' . $name . '" name="' . $name . '" value="' . $value . '" ' . $extraInput . '>
            </div>
          </div>';
}
