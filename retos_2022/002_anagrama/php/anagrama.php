#!/bin/php -q
<?php

$palabra1 = $argv[1] ?? '';
$palabra2 = $argv[2] ?? '';

$anagrama = esAnagrama($palabra1, $palabra2);
$no = ($anagrama) ? 'es' : 'no es';
echo sprintf("{%s} y {%s} %s un anagrama!!", $palabra1, $palabra2, $no);

function esAnagrama(string $palabra1, string $palabra2): bool
{
  if ($palabra1 === $palabra2)
  {
    return false;
  }

  $palabra1 = array_count_values(str_split(strtolower(str_replace(' ', '', $palabra1))));
  $palabra2 = array_count_values(str_split(strtolower(str_replace(' ', '', $palabra2))));
  ksort($palabra1);
  ksort($palabra2);

  return $palabra1 === $palabra2;
}

?>
