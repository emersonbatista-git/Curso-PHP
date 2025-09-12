<?php
$t = "Aqui temos um texto gigante criado pelo PHP e vai ostrar o funcionamento da função wordwrap";
$r = wordwrap($t, 20, "<br/>\n");
echo $r;






?>