<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CE MTLS&A Inserir</title>
    <link rel= "stylesheet" href = "style/estiloPadrao.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <style>


     /*   body{
            background-color:#F5588F;
        }
        
        h1,h2,h3{
            text-align: center;
            color:#58F565;
            font-size: 2rem;
        }
        p{
            color: #A81B4D;
        }
        main{
            border: 5px solid #2CA836;
            background-color: #75FF81;
            width: 50%;
            margin-left: 400px;
            text-align: center;
            border-radius: 50px;
           

        }*/
    </style>
      
</head>
<body>
    <header>
        <h1>Curriculo</h1>
    <ul><!--Lista de botoes de cabeçalho-->        
        <li><a href="index.php">Página Inicial</a></li>
        <li><a href="inserir.php">Inserir</a></li>        
        <li><a href="Consulta.php">Consulta</a></li>
        <li><a href="Editar.php">Editar</a></li>
        <li><a href="excluir.php">Excluir</a></li>
        <li><a href="sobre.php">Sobre</a></li>
    </ul>
    </header>
    <main>
   
        <div id="containerPainel">
        <form  method ="POST" action="inserir.php">
            <p>Nome: <input type="text"  name="nome"> </p>
            <p>Data de Nascimento: <input type="date"   name="data" > </p>
            <p>Formação: <input type="text" required="required" name="forma" > </p>
            <p>Endereço: <input type="text" required="required" name="ender" ></p>
            <p>CPF: <input type="text"  required ="required" name="cpf"  ></p>
            <p>E-mail: <input type="email" required="required" class="input-text" name="email"></p>
            <p>Telefone: <input type="text" required="required" name="tele" > </p>
            <p>Experiencia: <input type="text" required="required" name="expe" > </p>
            
             <input type="reset" value="Limpar">
             <input type="submit" value="Enviar">
        </form>
        


        
        <?php
        
     if(isset($_POST["nome"])){ //toda váriavel em php começa com cifrão, pra entennder que é váriavel, se nome foi preenchido a variavel de méotdo post vai receber o nome
         $nome = $_POST["nome"]; // o isset confere se uma váriavel foi definida

     }
     else{
         $nome = null; // se não foi preenchido o dado será nulo
     }

     if(isset($_POST["data"])){
         $data = $_POST["data"];
     }
     else{
         $data = null;
     }
     
     if(isset($_POST["forma"])){
        $forma = $_POST["forma"];
    }
    else{
        $forma = null;
    }
    
    if(isset($_POST["ender"])){
        $ender = $_POST["ender"];
    }
    else{
        $ender = null;
    }
    if(isset($_POST["cpf"])){
        $cpf = $_POST["cpf"];
    }
    else{
        $cpf = null;
    }
    if(isset($_POST["email"])){
        $email = $_POST["email"];
    }
    else{
        $email = null;
    }
    if(isset($_POST["tele"])){
        $tele = $_POST["tele"];
    }
    else{
        $tele = null;
    }
    if(isset($_POST["expe"])){
        $expe = $_POST["expe"];
    }
    else{
        $expe = null;
    }
    
    
    


    if($nome != null && $data !=null  && $forma !=null && $ender != null && $cpf != null && $email !=null && $tele != null && $expe !=null){ //php pode ser and ou &&
       

        
        include("conecta.php");

        
        $sql = "INSERT INTO cadastro (nome, tele, mail, ende, cpf, dnas, forma, expe)
        VALUES ('$nome', '$tele','$email', '$ender', '$cpf','$data', '$forma', '$expe')";

        
        
        if($conn->query($sql) === TRUE) {
            echo "Cadastrado";
        } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }
         } 
    
    else{
        echo "Preencha todos os campos";
    }


        
        ?>
        </div>
    </main>
    
</body>
</html>