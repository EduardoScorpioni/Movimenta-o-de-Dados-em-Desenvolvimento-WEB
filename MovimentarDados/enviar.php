<?php 

$dir = __DIR__ . "/arquivos";

if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

//nome temporário do arquivo. 
$nome_temporario=$_FILES["Arquivo"] ["tmp_name"]; 
//nome real do arquivo. 
$arquivo =$_FILES['Arquivo'] ['name']; 
//move o arquivo com o nome temporário para a subpasta arquivos com o nome real do mesmo. 
//arquivo 1 
if (move_uploaded_file($nome_temporario, "$dir/$arquivo")) 
{
    echo "O arquivo $arquivo foi enviado com sucesso! <BR>"; 
} 

else 
{
    echo "Erro ao enviar o arquivo! Tente novamente. <BR>";
}


//nome temporário do arquivo. 
$nome_temporario2=$_FILES["Arquivo2"]["tmp_name"]; //aqui é um array 
//nome real do arquivo. 
$arquivo2 = $_FILES['Arquivo2'] ['name']; 
//move o arquivo com o nome temporário para a subpasta arquivos com o nome real do mesmo. 
//var_dump ($_FILES); 
if (move_uploaded_file($nome_temporario2, "$dir/$arquivo2")) 
{ 
     echo "O arquivo $arquivo2 foi enviado com sucesso! <BR>"; 
}
else 
{
    echo "Erro ao enviar o arquivo 2! Tente novamente. <BR>";
} 

//nome temporário do arquivo. 
$nome_temporario3 = $_FILES["Arquivo3"] ["tmp_name"]; 
//nome real do arquivo. 
$arquivo3 = $_FILES['Arquivo3'] ['name']; 
//move o arquivo com o nome temporário para a subpasta $dir com o nome real do mesmo. 

if (move_uploaded_file($nome_temporario3, "$dir/$arquivo3")) 
{ 
    echo "o arquivo $arquivo3 foi enviado com sucesso! <BR>"; 
} 

else 
{ 
echo "Erro ao enviar o arquivo 3! Tente novamente. <BR>"; 
//se não ocorreu nenhum erro informa o usuário, caso contrário da uma mensagem de erro.
}
//nome temporário do arquivo. 
$nome_temporario4 = $_FILES["Arquivo4"] ["tmp_name"]; 
//nome real do arquivo. 
$arquivo4 = $_FILES['Arquivo4'] ['name']; 
//move o arquivo com o nome temporário para a subpasta $dir com o nome real do mesmo. 

if (move_uploaded_file($nome_temporario4, "$dir/$arquivo4")) 
{ 
    echo "o arquivo $arquivo4 foi enviado com sucesso! <BR>"; 
} 

else 
{ 
echo "Erro ao enviar o arquivo 4! Tente novamente. <BR>"; 
//se não ocorreu nenhum erro informa o usuário, caso contrário da uma mensagem de erro.
}
//nome temporário do arquivo. 
$nome_temporario5 = $_FILES["Arquivo5"] ["tmp_name"]; 
//nome real do arquivo. 
$arquivo5 = $_FILES['Arquivo5'] ['name']; 
//move o arquivo com o nome temporário para a subpasta $dir com o nome real do mesmo. 

if (move_uploaded_file($nome_temporario5, "$dir/$arquivo5")) 
{ 
    echo "o arquivo $arquivo5 foi enviado com sucesso! <BR>"; 
} 

else 
{ 
echo "Erro ao enviar o arquivo 5! Tente novamente. <BR>"; 
//se não ocorreu nenhum erro informa o usuário, caso contrário da uma mensagem de erro.
}
//nome temporário do arquivo. 
$nome_temporario6 = $_FILES["Arquivo6"] ["tmp_name"]; 
//nome real do arquivo. 
$arquivo6 = $_FILES['Arquivo6'] ['name']; 
//move o arquivo com o nome temporário para a subpasta $dir com o nome real do mesmo. 

if (move_uploaded_file($nome_temporario6, "$dir/$arquivo6")) 
{ 
    echo "o arquivo $arquivo6 foi enviado com sucesso! <BR>"; 
} 

else 
{ 
echo "Erro ao enviar o arquivo 6! Tente novamente. <BR>"; 
//se não ocorreu nenhum erro informa o usuário, caso contrário da uma mensagem de erro.
}

?> 
