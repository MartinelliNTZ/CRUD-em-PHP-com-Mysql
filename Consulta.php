<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CE MTLS&A Cuonsulta</title>
    <link rel= "stylesheet" href = "style/estiloPadrao.css">
  
</head>
<body>

    <header>
    

   
      
<header>
<ul><!--Lista de botoes de cabeçalho-->        
        <li><a href="inserir.php">Inserir</a></li>        
        <li><a href="Consulta.php">Consulta</a></li>
        <li><a href="Editar.php">Editar</a></li>
        <li><a href="excluir.php">Excluir</a></li>
        <li><a href="sobre.php">Sobre</a></li>
    </ul>
        <h1 > Consultar Curricúlo </h1>
    </header>
    <main>
        <div id="containerPainel">

        <form  method ="POST" action="Consulta.php">
            <p>Nome: <input type="text"  name="nome"> </p>
             <p>Formação: <input type="text"  name="forma" > </p>
             <p>Experiencia: <input type="text" name="expe" ></p> 
                       
            
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


if(isset($_POST["forma"])){
   $forma = $_POST["forma"];}
else{
   $forma = null;
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

if(isset($_POST["expe"])){
   $expe = $_POST["expe"];
}
else{
   $expe = null;
}

if($nome !=null & $expe==null & $forma ==null){
        include("conecta.php");
 
        $sql   ="SELECT nome, tele, mail, ende, cpf, dnas, forma, expe FROM cadastro WHERE nome LIKE'%$nome%' ";
       
        
        
         $result = $conn->query($sql);

        if($result->num_rows > 0  ){
            echo "<br><br><STRONG>Busca por Nome!!<br><br></STRONG>";
           
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

            }
        }else{
            echo "nada encontrado";
        } 
}//Consulta sómente  por nome
 
if($nome ==null & $expe!=null & $forma ==null){
    include("conecta.php");

    $sql   ="SELECT nome, tele, mail, ende, cpf, dnas, forma, expe FROM cadastro WHERE expe LIKE'%$expe%' ";
   
    
    
     $result = $conn->query($sql);

    if($result->num_rows > 0  ){
        echo "<br><br><STRONG>Busca por Experiência!!<br><br></STRONG>";
       
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

        }
    }else{
        echo "nada encontrado";
    } 
}//Consulta sómente por Experiencia

if($nome ==null & $expe==null & $forma !=null){
    include("conecta.php");

    $sql   ="SELECT nome, tele, mail, ende, cpf, dnas, forma, expe FROM cadastro WHERE forma LIKE'%$forma%' ";
   
    
    
     $result = $conn->query($sql);

    if($result->num_rows > 0  ){
        echo "<br><br><STRONG>Busca por Formação!!<br><br></STRONG>";
       
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

        }
    }else{
        echo "<br> Nada encontrado";
    } 
}//Consulta sómente por formacao

if($nome !=null & $expe!=null & $forma !=null){
    include("conecta.php");

    $sql   ="SELECT nome, tele, mail, ende, cpf, dnas, forma, expe FROM cadastro WHERE forma LIKE'%$forma%' AND nome LIKE'%$nome%' AND expe LIKE'%$expe%'";
   
    
    
     $result = $conn->query($sql);

    if($result->num_rows > 0  ){
        echo "<br><br><STRONG>Busca Completa!!<br><br></STRONG>";
       
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

        }
    }else{
        echo "<br> Nada encontrado";
    } 
}//buca completa

if($nome !=null & $expe!=null & $forma ==null){
    include("conecta.php");

    $sql   ="SELECT nome, tele, mail, ende, cpf, dnas, forma, expe FROM cadastro WHERE nome LIKE'%$nome%' AND expe LIKE'%$expe%'";
   
    
    
     $result = $conn->query($sql);

    if($result->num_rows > 0  ){
        echo "<br><br><STRONG>Busca Nome e Experiencia!!<br><br></STRONG>";
       
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

        }
    }else{
        echo "<br> Nada encontrado";
    } 
}//buca com nome e exp

if($nome !=null & $expe==null & $forma !=null){
    include("conecta.php");

    $sql   ="SELECT nome, tele, mail, ende, cpf, dnas, forma, expe FROM cadastro WHERE forma LIKE'%$forma%' AND nome LIKE'%$nome%' ";
   
    
    
     $result = $conn->query($sql);

    if($result->num_rows > 0  ){
        echo "<br><br><STRONG>Busca com nome e Formação!!<br><br></STRONG>";
      
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

        }
    }else{
        echo "<br> Nada encontrado";
    } 
}//buca com nome e forma

if($nome ==null & $expe!=null & $forma !=null){
    include("conecta.php");

    $sql   ="SELECT nome, tele, mail, ende, cpf, dnas, forma, expe FROM cadastro WHERE forma LIKE'%$forma%' AND expe LIKE'%$expe%'";
   
    
    
     $result = $conn->query($sql);

    if($result->num_rows > 0  ){
        echo "<br><br><STRONG>Busca com Experiencia e Formação!!<br><br></STRONG>";
       
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

        }
    }else{
        echo "<br> Nada encontrado";
    } 
}//busca por form e expe


 ?>
 </div> 
</main>
 
</body>
</html>