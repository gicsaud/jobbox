<!doctype html>
<html>

<head>
   <meta charset="utf-8">
   <title>Editar Vaga</title>

</head>

<body>

   <?php
   /*1- realizando a conexao com o banco de dados(local,usuario,
     senha,nomeBanco)*/
   // $con=mysqli_connect("localhost","root","","bd_projeto");
   include "conexao.php";

   /*2- pegando o valor vindo da url */
   $id_empresa = $_GET["id"];


   /*3- criando o comando sql para selecionar o registro a ser alterado*/
   $comandoSql = "select * from tb_empresa where id_empresa='$id_empresa'";


   /*4- executando o comando sql */
   $resultado = mysqli_query($con, $comandoSql);

   /*5- pegando os dados da consulta criada e armazenando em variaveis */
   $dados = mysqli_fetch_assoc($resultado);

   $id = $dados["id_empresa"];
   $nome = $dados["nome_empresa"];
   $cnpj = $dados["cnpj_empresa"];
   $telefone = $dados["telefone_empresa"];
   $email = $dados["email_empresa"];
   $senha = $dados["senha_empresa"];
   $cep = $dados["cep_empresa"];
   $rua = $dados["rua_empresa"];
   $bairro = $dados["bairro_empresa"];
   $num = $dados["num_empresa"];
   $complemento = $dados["complemento_empresa"];


   ?>
   <!--preenchendo o formulario com dados da consulta -->

   <h3> Alteração de veículo </h3>

   <form action="altera_empresa.php" method="POST">


      <input class="input100" type="text" id="id_empresa" name="id_empresa" readonly value="<?php echo $id_empresa ?>">


      <div class="wrap-input100 validate-input" >
         <input class="input100" type="text" id="nome_empresa" name="nome_empresa" value="<?php echo $nome ?>">
         <span class="focus-input100 "></span>
         <span class="symbol-input100">

         </span>
      </div>

      <div class="wrap-input100 validate-input" data-validate="Digite o cnpj da empresa">
         <input class="input100" type="text" id="cnpj_empresa" name="cnpj_empresa" value="<?php echo $cnpj ?>">
         <span class="focus-input100"></span>
         <span class="symbol-input100">

         </span>
      </div>

      <div class="wrap-input100 validate-input" data-validate="Digite um número de contato da empresa: (XX)XXXX-XXXX">
         <input class="input100" type="text" id="telefone_empresa" name="telefone_empresa" value="<?php echo $telefone ?>">
         <span class="focus-input100"></span>
         <span class="symbol-input100">

         </span>
      </div>


      <div class="wrap-input100 validate-input" data-validate="Digite um e-mail válido: ex@abc.xyz">
         <input class="input100" type="email" id="email_empresa" name="email_empresa" value="<?php echo $email ?>">
         <span class="focus-input100"></span>
         <span class="symbol-input100">

         </span>
      </div>



      <div class="wrap-input100 validate-input" data-validate="Digite uma senha">
         <input class="input100" type="password" id="senha_empresa" name="senha_empresa" value="<?php echo $senha ?>">
         <span class="focus-input100"></span>
         <span class="symbol-input100">

         </span>
      </div>


      <span class="login100-form-title">
         Editar Perfil
      </span>
      <div class="login100-pic js-tilt" data-tilt>
         <img src="images/img-01.png" alt="IMG">
      </div>
      <div class="container-login100-form-btn">
         <input type="submit" class="login100-form-btn" value="Confirmar">



      </div>

      <div class="text-center p-t-12">
         <span class="txt1-2">
            Esqueceu sua
         </span>
         <a class="txt2-3 " href="#">
            Senha?
         </a>
      </div>

      <div class="text-center p-t-12">
         <a class="txt2-2 " href="#">
            Entrar com outra conta
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
         </a>
      </div>


      <div class="wrap-input101 validate-input" data-validate="Digite seu CEP">
         <input class="borda input103" type="text" id="cep_empresa" name="cep_empresa" value="<?php echo $cep ?>">
         <span class="focus-input103"></span>
         <span class="symbol-input100">

         </span>
      </div>



      <div class="wrap-input101 validate-input" data-validate="Insira sua rua">
         <input class="input102" type="text" id="rua_empresa" name="rua_empresa" value="<?php echo $rua ?>">
         <span class="focus-input102"></span>
         <span class="symbol-input100">

         </span>
      </div>


      <div class="wrap-input101 validate-input" data-validate="Insira seu bairro">
         <input class="input102" type="text" id="bairro_empresa" name="bairro_empresa" value="<?php echo $bairro ?>">
         <span class="focus-input102"></span>
         <span class="symbol-input100">

         </span>
      </div>



      <div class="wrap-input101 validate-input" data-validate="Insira o número de sua residência">
         <input class="input102" type="text" id="num_empresa" name="num_empresa" value="<?php echo $num ?>">
         <span class="focus-input102"></span>
         <span class="symbol-input100">

         </span>
      </div>




      <div class="wrap-input101 validate-input " data-validate="Insira o complemento: CASA, APTO X">
         <input class="input102" type="text" id="complemento_empresa" name="complemento_empresa" value="<?php echo $num ?>">
         <span class="focus-input102"></span>
         <span class="symbol-input100">

         </span>
      </div>








      <input type="submit" value="Alterar">

   </form>


   </div>
</body>

</html>