<?php
//responsavel pelas classes que vão ser definidas

//////////////////////////////////////////////////////////////////////////////////////////////
$controllers_files = scandir('./Controllers');

foreach($controllers_files as $file){
    if($file == '.' || $file == '..'){
        continue;
    }

    require_once './Controllers/' . $file;
}

//////////////////////////////////////////////////////////////////////////////////////////////
$models_files = scandir('./Models');

foreach($models_files as $file){
    if($file == '.' || $file == '..'){
        continue;
    }

    require_once './Models/' . $file;
}

/////////////////////////////////////////////////////////////////////////////////////////////
$views_files = scandir('./Views');

foreach($views_files as $file){
    if($file == '.' || $file == '..'){
        continue;
    }

    require_once './Views/' . $file;
}


