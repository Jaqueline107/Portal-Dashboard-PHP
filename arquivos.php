<?php

$pasta = "arquivo/";
$diretorio = dir($pasta);

while ($arquivo = $diretorio->read()) {

      if ($arquivo != '.' && $arquivo != '..') {

            echo "<a href='" . $pasta . $arquivo . "'> <img src='" . $pasta . $arquivo . "'width='150'> " . $arquivo . "</a>";;
      }
}
