<?php

// Declare an array with different types of values
$array = array(1, 'two', 3.5, true);

// Convert JSON string to array
$json_string = '{"name": "John", "age": 30}';
$array_from_json = json_decode($json_string, true);

print_r($array);
print_r($array_from_json);

?>
