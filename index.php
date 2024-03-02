<?php
function output($value) {
    echo "<pre>";
    echo var_dump($value);
    echo "</pre>";
}
require "view/index.view.php";