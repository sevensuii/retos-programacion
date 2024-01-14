#!/bin/php -q
<?php

for ($i=1; $i <= 100; $i++) 
{ 
  if ( !($i % 3) && !($i % 5) )
  {
    echo 'fizzbuzz'.PHP_EOL;
  }
  elseif ( !($i % 3))
  {
    echo 'fizz'.PHP_EOL;
  }
  elseif ( !($i % 5 ))
  {
    echo 'buzz'.PHP_EOL;
  }
  else
  {
    echo $i.PHP_EOL;
  }
}

?>
