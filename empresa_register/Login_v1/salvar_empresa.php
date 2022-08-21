<?php
include "conexao.php";

            $n=$_POST["nome_empresa"];
            $r=$_POST["cnpj_empresa"];
            $c=$_POST["telefone_empresa"];
            $e=$_POST["email_empresa"];
            $u=$_POST["senha_empresa"];
            $j=$_POST["cep_empresa"];
            $t=$_POST["rua_empresa"];
            $q=$_POST["bairro_empresa"];
            $p=$_POST["num_empresa"];
            $k=$_POST["complemento_empresa"];

  $comandoSql="INSERT INTO tb_empresa
  (nome_empresa,cnpj_empresa,telefone_empresa,email_empresa, senha_empresa, cep_empresa, rua_empresa, bairro_empresa, num_empresa, complemento_empresa) 
  VALUES 
  ('$n','$r','$c','$e','$u', '$j', '$t', '$q', '$p', '$k')";

$resultado=mysqli_query($con,$comandoSql);

  if($resultado==true){
    echo "Cadastrado com sucesso";
  
}else{
  echo "Erro no cadastro";

}
echo "<br> <a href='listar_empresas.php'>Listar Empresas</a>";
?>