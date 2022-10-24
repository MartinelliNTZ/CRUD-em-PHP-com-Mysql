<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo do site</title>
    <link rel= "stylesheet" href = "style/estiloPadrao.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

</head>
<body>
    <ul><!--Lista de botoes de cabeçalho-->        
        <li><a href="inserir.php">Inserir</a></li>        
        <li><a href="Consulta.php">Consulta</a></li>
        <li><a href="Editar.php">Editar</a></li>
        <li><a href="excluir.php">Excluir</a></li>
    </ul>
    <header>
        <h1 > Editar ou Excluir Cadastro</h1>
    </header>
    <main>
        <div id="containerPainel">

        <form  method ="POST" action="excluir.php">
            <p>Nome: <input type="text"  name="nome"> 
                CPF: <input type="text"  name="cpf" > </p>         
                <input type="reset" value="Limpar">
                <input type="submit" value="Excluir">     
                            
                         
        </form>        
        
        <?php 
        
        
        if(isset($_POST["nome"])){          $nome = $_POST["nome"];     }       else{       $nome = null;     }   
        if(isset($_POST["cpf"])){           $cpf = $_POST["cpf"];   }           else{       $cpf = null;   }
      
        
        
        if($nome !=null & $cpf !=null){            
                include("conecta.php");
            
                //$sql   ="SELECT nome, tele, mail, ende, cpf, dnas, forma, expe FROM cadastro WHERE nome LIKE'%$nome%' AND cpf ='$cpf'";
                $sql   ="DELETE FROM cadastro WHERE cpf ='$cpf'";
               
                
                
                 $result = $conn->query($sql);
            
                if($result->num_rows > 0  ){
                    echo "<br><br><STRONG>Encontrado!!<br><br></STRONG>";
                   
                    while($row = $result->fetch_assoc()){
                        echo       "Nome: ". $row["nome"]. 
                        "<br> Data de Nascimento: ". $row["dnas"].
                        "<br> Formação: ". $row["forma"].
                        "<br> Endereço: ". $row["ende"].
                        "<br> CPF: ". $row["cpf"].
                        "<br> E-mail: ". $row["mail"].
                        "<br> Telefone:: ". $row["tele"].
                        "<br> Experiencia:". $row["expe"].
                        "<br>-------------------------------------------------------------------------------------------------------------------------<br><br>";
                        $key = true;
            
                    }
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