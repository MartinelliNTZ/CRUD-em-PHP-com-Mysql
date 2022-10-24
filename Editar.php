<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CE MTLS&A Editar</title>
    <link rel= "stylesheet" href = "style/estiloPadrao.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

</head>
<body>
    <ul><!--Lista de botoes de cabeçalho-->        
        <li><a href="inserir.php">Inserir</a></li>        
        <li><a href="Consulta.php">Consulta</a></li>
        <li><a href="Editar.php">Editar</a></li>
        <li><a href="excluir.php">Excluir</a></li>
        <li><a href="sobre.php">Sobre</a></li>
    </ul>
    <header>
        <h1 > Editar Cadastro</h1>
    </header>
    <main>
        <div id="containerPainel">

        <form  method ="POST" action="Editar.php">
            <p>Nome: <input type="text"  name="nome"> 
                CPF: <input type="text"  name="cpf" > </p>         
                <input type="reset" value="Limpar">
                <input type="submit" value="Buscar Cadastro">
       
                <a><BR><BR><BR>PARA ALTERAR SEU NOME OU SEU CPF VOCE PRECISA ENTRAR EMN CONTATO COM NOSSO SUPORTE<BR><BR><BR></a>
        
            
            Data de Nascimento: <input type="date"   name="data" > 
            Formação: <input type="text"  name="forma" > 
            Endereço: <input type="text"  name="ender" ></p>
           
            <p>E-mail: <input type="email" name="email">
            Telefone: <input type="text"  name="tele" >
            Experiencia: <input type="text" name="expe" > </p>
            <input type="reset" value="Limpar">
            <input type="submit" value="Alterar Cadastro">
            
             
        </form>
        
        
        <?php 
        
        $key2 = false;
        if(isset($_POST["nome"])){          $nome = $_POST["nome"];     }       else{       $nome = null;     }
        if(isset($_POST["dnas"])){          $dnas = $_POST["dnas"];    }        else{       $dnas = null;    }    
        if(isset($_POST["forma"])){         $forma = $_POST["forma"];   }       else{       $forma = null;   }   
        if(isset($_POST["ende"])){          $ender = $_POST["ende"];   }        else{       $ender = null;   }
        if(isset($_POST["cpf"])){           $cpf = $_POST["cpf"];   }           else{       $cpf = null;   }
        if(isset($_POST["email"])){         $email = $_POST["email"];   }       else{       $email = null;   }
        if(isset($_POST["tele"])){          $tele = $_POST["tele"];   }         else{       $tele = null;   }
        if(isset($_POST["expe"])){          $expe = $_POST["expe"];   }         else{       $expe = null;   }
        
        
        if($nome !=null & $cpf !=null){            
                include("conecta.php");
            
                $sql   ="SELECT nome, tele, mail, ende, cpf, dnas, forma, expe FROM cadastro WHERE nome LIKE'%$nome%' AND cpf ='$cpf'";
               
                
                
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

        if($nome !=null & $cpf !=null){
            if($dnas!=null){
                include("conecta.php");
                $sql   =" UPDATE  cadastro SET dnas=$dnas WHERE cpf =$cpf ";
               
                $conn->query($sql);

               
            }



        }else{
            echo "<a>DIGITE SEU NOME E CPF</a>";
        }

       
       
   
    
    

        ?>       
       </div>
    </main>

    <footer>
       
    </footer>
</body>
</html>