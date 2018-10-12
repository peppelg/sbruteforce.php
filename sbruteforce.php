<?php 
function sbruteforce($testuale, $sleep = 6500, $dicionariovocabolarioforzabrutale = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890@!è+òàù ')
{
  $string = '';
  $seso = str_split($testuale);
  $cazo = str_repeat(' ', strlen($testuale) + 2) . "\r";
  while (true) {
    usleep($sleep);
    $you = substr($dicionariovocabolarioforzabrutale, rand(0, strlen($dicionariovocabolarioforzabrutale) - 1) , 1);
    $cierchiamo = reset($seso);
    if ($you === $cierchiamo) {
      $string.= $you;
      unset($seso[array_search($you, $seso) ]);
      $you = '';
    }
    echo $string . $you . $cazo;
    if (empty($seso)) {
      echo "\n";
      return true;
    }
  }
}


sbruteforce('superteks by pepelg');
