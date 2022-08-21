<?php
  /*1- realizando a conexao com o banco de dados(local,usuario,
   senha,nomeBanco)*/
   //$con=mysqli_connect("localhost","root","","bd_projeto");
   include "conexao.php";
  
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
            $id=$_POST["id_empresa"];
            $nome=$_POST["nome_empresa"];
            $cnpj=$_POST["cnpj_empresa"];
            $telefone=$_POST["telefone_empresa"];
            $email=$_POST["email_empresa"];
            $senha=$_POST["senha_empresa"];
            $cep=$_POST["cep_empresa"];
            $rua=$_POST["rua_empresa"];
            $bairro=$_POST["bairro_empresa"];
            $num=$_POST["num_empresa"];
            $complemento=$_POST["complemento_empresa"];
 

  /*3- criando o comando sql para alteracao do registro */
  $comandoSql="update  tb_empresa set
  nome_empresa='$nome',cnpj_empresa='$cnpj',telefone_empresa='$telefone',email_empresa='$email',senha_empresa='$senha',cep_empresa='$cep',rua_empresa='$rua',bairro_empresa='$bairro',num_empresa='$num',complemento_empresa='$complemento'
  where id_empresa='$id'"; 

  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
  	echo "Alterado com sucesso";
  }else{
    echo "Erro na alteração";
  }

