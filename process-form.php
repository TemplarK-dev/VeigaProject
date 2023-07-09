<?php

$name = $_POST["name"];
$id = $_POST["id"];
$message = $_POST["message"];
$severity = filter_input(INPUT_POST, "severity", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);

var_dump($name, $id, $message, $severity, $type);

