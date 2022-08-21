
 <?php 
   echo "<h3>  Vagas Disponíveis </h3>";
  //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
  //$con=mysqli_connect("localhost","root","","bd_projeto");
    include "conexao.php";

  /*2- criando o comando sql para consulta  do registros*/
  $comandoSql="select * from tb_empresa";
  

  /*3- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*4- pegando os dados da consulta criada e exibindo */
  while($dados=mysqli_fetch_assoc($resultado)){
            $id=$dados["id_empresa"];
            $nome=$dados["nome_empresa"];
            $cnpj=$dados["cnpj_empresa"];
            $telefone=$dados["telefone_empresa"];
            $email=$dados["email_empresa"];
            $senha=$dados["senha_empresa"];
            $cep=$dados["cep_empresa"];
            $rua=$dados["rua_empresa"];
            $bairro=$dados["bairro_empresa"];
            $num=$dados["num_empresa"];
            $complemento=$dados["complemento_empresa"];
    
	

    echo "id: $id <br>";
    echo "nome: $nome <br>";
    echo "cnpj: $cnpj <br>";
    echo "telefone: $telefone <br>";
    echo "email: $email <br>";
    echo "senha: $senha <br>";
    echo "cep: $cep <br>";
    echo "rua: $rua <br>";
    echo "bairro: $bairro <br>";
    echo "num: $num <br>";
    echo "complemento: $complemento <br>";
    
	
	
	echo "<a href=exclui_empresa.php?id=$id> Excluir </a>";
	echo "<br><a href=frm_altera_empresa.php?id=$id> Alterar </a>";

    echo "<br><br>";


  }
 
?>
 </div>