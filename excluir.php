<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CE MTLS&A Excluir</title>
    <link rel="stylesheet" href="style/estiloPadrao.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

</head>

<body>
    <ul>
        <!--Lista de botoes de cabeçalho-->
        <li><a href="index.php">Página Inicial</a></li>
        <li><a href="inserir.php">Inserir</a></li>
        <li><a href="Consulta.php">Consulta</a></li>
        <li><a href="Editar.php">Editar</a></li>
        <li><a href="excluir.php">Excluir</a></li>
        <li><a href="sobre.php">Sobre</a></li>
    </ul>
    <header>
        <h1> EXCLUIR CADASTRO</h1>
    </header>
    <main>
        <div id="containerPainel">

            <form method="POST" action="excluir.php">
                <p>Nome: <input type="text" name="nome">
                    CPF: <input type="text" name="cpf5"> </p>
                <input type="reset" value="Limpar">
                <input type="submit" value="Excluir">


            </form>

            <?php 
        
        
        if(isset($_POST["nome"])){          $nome = $_POST["nome"];     }       else{       $nome = null;     }   
        if(isset($_POST["cpf5"])){           $cpf5 = $_POST["cpf5"];   }           else{       $cpf5 = null;   }
      
        
        
        if($nome !=null & $cpf5 !=null){  

                include("conecta.php");  
               $sql   ="DELETE from cadastro WHERE cpf ='$cpf5';";
               echo "<br> $cpf5";               
         
            
                if( $conn->query($sql)=== TRUE ){

                    echo "<br><br><STRONG>APAGADO!!<br><br></STRONG>";
                   
                 
                }else{
                    echo "<br> Nada encontrado";
                } //buca com nome e exp
            
        }else{
            echo "<a>DIGITE SEU NOME E CPF</a>";
        }//busca o cadastro



       
       
   
    
    

        ?>
        </div>
    </main>

    <footer>

    </footer>
</body>

</html>