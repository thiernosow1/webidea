<?php
namespace WebideaTheme\Controllers;

class BaseController {
    protected function render($view, $data = []) {
        extract($data);
        include locate_template("views/templates/$view.php");
    }
}
