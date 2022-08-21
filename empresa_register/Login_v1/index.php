<!DOCTYPE html>
<html lang="en">

<head>
	<title>Jobbox</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--FOOTER-->
	<!--===============================================FOOTER================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="./css/style_footer.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!--=================================================FORMS==============================================-->
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--======================================================NAVBAR=========================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<!--=======================================================DARKMODE========================================-->
	<link rel="stylesheet" type="text/css" href="darkmode.css">
	<!--=======================================================BOTAO REGISTRAR NAVBAR========================================-->
	<link rel="stylesheet" type="text/css" href="css/botao_registrar_navbar.css">

	<!--=======================================================API CEP========================================-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Adicionando JQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<!-- Adicionando Javascript -->
	
</head>

<body>
	<nav class="navbar" style="object-position: left;">


		<img src="Imagens/logoSJ.png" width="30" height="30" alt="">

		<div class="div">

			<ul>
				<li>
					<a class="navlink" href="frm_cadastrar_empresa.html">Nova Empresa</a>
				</li>


				<li>
					<a class="navlink" href="?page=listar-empresa"> Listar Empresas </a>
				</li>

				<li>
					<a class="navlink" href="#"> Sobre Nós </a>
				</li>


			</ul>
		</div>
		</div class="div">
		<li class="botao-entrar"><a href="telalogin.html"> <button class="button"> Login</button> </a></li>
	</nav>


	
			<div id="container">
				<label class="switch">
					<input type="checkbox" onclick="changeMode()">
					<span class="slider"></span>
				</label>
			</div>
			<script>
				function changeMode() {
					var element = document.body;
					element.classList.toggle("dark-mode");
				}
			</script>
		</div>
	</div>
	</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col mt-5">
				<?php
                include("conexao.php");
					switch(@$_REQUEST["page"]){
						case "nova-empresa";
							include("frm_cadastrar_empresa.html");
						break;
						case "listar-empresa";
							include("listar_empresas.php");
						break;
                        case 'salvar-empresa':
                            include("salvar_empresa.php");
                            break;
						default;
							print "<h1>Bem vindos!</h1>";
		}
	?>
			</div>
		</div>
	</div>


	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="js/entrar.js"></script>



</body>

</html>