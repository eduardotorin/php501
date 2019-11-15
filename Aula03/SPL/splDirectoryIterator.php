<?php

echo "<pre>";
foreach (new DirectoryIterator('/var') as $diretorio){
    echo "Diretorio: $diretorio<br>";
    foreach ($diretorio as $subdiretorio){
        echo "  - Sub Diretorio: $subdiretorio<br>";
    }
}

echo "<br>";
echo gettype(new DirectoryIterator('/'));

