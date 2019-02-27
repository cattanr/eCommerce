<?php

function main() {
  $var = ['test' => 12];
  test($var);
  test2($var);
}

function test(&$test) {
  $test['test'] = 22;
}

function test2(&$test) {
  var_dump($test['test']);
}

main();