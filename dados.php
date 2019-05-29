<?php




if(isset($_GET['dados'])) {

    $dados = $_GET['dados'];

    file_put_contents('C:\xampp\htdocs\ajaxSimples\requests\data.txt',
                            $dados . PHP_EOL,
                            FILE_APPEND);
}

echo file_get_contents('C:\xampp\htdocs\ajaxSimples\requests\data.txt');