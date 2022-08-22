<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $q = $_POST['q'];
}

if (isset($q)) { 
    echo "<p>Hello, $q</p>";}
?>