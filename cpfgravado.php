<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CE MTLS&ALista CPF e Nome</title>
    <link rel="stylesheet" href="formata.css">
    <style>
        nav{
            text-align: center;
            
        }

        a{
            color: black;
            text-decoration:none;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Lista CPF e Nome</h1>
        <nav>
            <a href="curriculo.php">Cadastro</a>
            <a href="lecurriculo.php">Leitura</a>


        </nav>
    </header>
    

 <?php
 
 //Variavel arquivo armazena o nome e extensão do arquivo.
 $arquivod = "ListaCPF.txt";

 //Variavel $fp armazena a conexão com o arquivo e o tipo de ação.
 $dc = fopen($arquivod, "r");

 //Recebe o conteudo do arquivo aberto.
 $contents = fread($dc, filesize($arquivod));

 //Exibe o conteudo do arquivo.
 echo"$contents";

 //Fecha o arquivo.
 fclose($dc);
 
  

 
 
 
 
 ?>
 <footer><h3>Desenvolvido por Carlos Henrique Dario</h3></footer>
</body>
</html>