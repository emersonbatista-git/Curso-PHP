<?php
echo "Com opção 0<br/>";
$frase = "Eu vou estudar PHP";
$cont = str_word_count($frase, 0);
echo $cont;


echo"<br/>";
echo"<br/>";
echo"<br/>";

echo "Com opção 1<br/>";
$frase1 = "Eu vou estudar PHP";
$cont = str_word_count($frase1, 1);
print_r($cont);

echo"<br/>";
echo"<br/>";
echo"<br/>";

echo "Com opção 2<br/>";
$frase2 = "Eu vou estudar PHP";
$cont = str_word_count($frase2, 2);
print_r($cont);



?>