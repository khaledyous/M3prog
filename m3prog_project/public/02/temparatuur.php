<?php
// Fahrenheit naar Celsius
$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";

// Celsius naar Fahrenheit
$celsius = 20;
$fahrenheit = ($celsius + 32) * 1.8;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";

// Celsius naar Kelvin
$celsius = 20;
$kelvin = ($celsius + 273);
echo "{$celsius} graden Celsius = {$kelvin} graden Kelvin. <br/>";

// Fahrenheit naar Kelvin
$fahrenheit = 74;
$kelvin = ($fahrenheit + 459.67) * 5/9;
echo "{$fahrenheit} graden fahrenheit = {$kelvin} graden Kelvin. <br/>";
?>