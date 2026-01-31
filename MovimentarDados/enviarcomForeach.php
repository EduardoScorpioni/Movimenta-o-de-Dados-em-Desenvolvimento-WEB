<?php 
if (!count($_FILES)) {
    exit("Nenhum arquivo enviado."); 
}

$sucess = true;

// Diretório de destino
$dir = getcwd() . "/arquivos";

// Tamanho máximo (10 MB)
$max_size = 1024 * 1024 * 10;

// Verifica se o diretório existe, senão cria
if (!is_dir($dir)) {
    mkdir($dir, 0777, true); // permissões e recursivo
}

// Percorre os arquivos enviados
foreach ($_FILES as $indice_no_array => $file) 
{
    if ($file['size'] <= $max_size) 
    {
        $tmp = $file['tmp_name']; 
        $arquivo = $file['name'];
        if (!is_dir($dir)) {
            mkdir($dir); // permissões e recursivo
        }
        // Move o arquivo para a pasta
        if (move_uploaded_file($tmp, $dir . DIRECTORY_SEPARATOR . $arquivo)) 
        {
            echo "O arquivo $arquivo foi enviado com sucesso!<br>"; 
        } else {
            $sucess = false;
            echo "Erro ao enviar o arquivo $arquivo! Tente novamente.<br>"; 
        }
    } 
    else 
    {
        exit("Arquivo $indice_no_array ultrapassou o limite do tamanho!<br>");
    }
}
?>
