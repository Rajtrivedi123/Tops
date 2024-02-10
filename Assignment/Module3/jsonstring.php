<?php

$json_string = '{"name": "John", "age": 30}';
$decoded_array = json_decode($json_string, true);

print_r($decoded_array);

?>
