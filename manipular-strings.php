<?php
$string = 'Meu nome é Isaias';

$contains = str_contains($string, 'José');

if($contains){
    echo "Nome encontrado!!";
}else{
    echo 'Nome não encontrado';
}

echo $contains;
