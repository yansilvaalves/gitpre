<!DOCTYPE html>
<html>

	<head>

		<title>FORMULÁRIO DE CANDIDATURA A VAGA | GERIR GESTÃO</title>

		<meta charset="utf-8">

		<style type="text/css">

			*{
				margin: 0;
				padding: 0;
			}

			body{
				font-size: 100%;
				width: 100%;
				height: 100%;
				box-sizing: border-box;
			}

			h1{
				font-size: 2em;
				text-align: center;
				font-family: Tahoma, Arial, sans-serif;
			}

			h2{
				font-family: Tahoma, Arial, sans-serif;
				color: #fff;
				margin-top: 1.5%;
				margin-bottom: 1.5%;
			}

			.campos{
				background: linear-gradient(to bottom, #836FFF, #FFA500);
				margin: 2%;
				padding: 2%;
				width: 50%;
				height: auto;
				border-radius: 35px;
				color: #fff;
				font-family: Tahoma, Arial, sans-serif;
			}

			.centro{
				margin-left: auto;
				margin-right: auto;
			}

			input[type="email"], 
			input[type="text"],
			input[type="file"],
			input[type="submit"],
			select{
				border: none;
				margin: 0.5%;
				padding: 1.2%;
				width: 45%;
				box-shadow: 3px 3px 3px #000000;
			}

			input[type="submit"]{
				border-radius: 20px;
				font-size: 1em;
				background-color: #fff;
				cursor: pointer;
				margin-top: 2.5%;
				margin-bottom: 2%;
				transition: background-color 0.2s, color 0.2s, linear 0.5s;
			}

			input[type="submit"]:hover{
				background-color: green;
				color: #fff;
			}

			input[type="radio"]{
				margin: 0.5%;
				padding: 0.5%;
				width: 5%;
			}
		</style>

	</head>

	<body>

		<h1>Formulário de candidatura à vaga</h1>

		<form>
			
			<div class="campos centro">

				<h2>Dados</h2>

				<input type="email" name="email" placeholder="Email">
				<input type="text" name="nome" placeholder="Nome">
				<input type="text" name="sobrenome" placeholder="Sobrenome">
				<input type="text" name="telefone" placeholder="Telefone/Celular">
				<input type="text" name="data" placeholder="Data de Nascimento">
				<input type="text" name="nomepai" placeholder="Nome do pai">
				<input type="text" name="nomemae" placeholder="Nome da mãe">
				<input type="text" name="rg" placeholder="RG">
				<input type="text" name="cpf" placeholder="CPF">

				<select name="vaga">
					<option>SELECIONE A VAGA</option>
				</select>

				<select name="formacao">
					<option>SELECIONE A FORMAÇÃO</option>
					<option value="Ensino Fundamental Completo">Ensino fundamental completo</option>
					<option value="Ensino Fundamental Incompleto">Ensino fundamental incompleto</option>
					<option value="Ensino Médio Completo">Ensino médio completo</option>
					<option value="Ensino Médio Incompleto">Ensino médio incompleto</option>
					<option value="Ensino Superior Completo">Ensino superior completo</option>
					<option value="Ensino Superior Incompleto">Ensino superior incompleto</option>
					<option value="Pós-graduação">Pós-graduação</option>
					<option value="Mestrado">Mestrado</option>
					<option value="Doutorado">Doutorado</option>
					<option value="Pós-doutorado">Pós-doutorado</option>
				</select>

				<select name="estado-civil">
					<option>SELECIONE O ESTADO CIVIL</option>
					<option value="Casado(a)">Casado(a)</option>
					<option value="Solteiro(a)">Solteiro(a)</option>
					<option value="Divorciado(a)">Divorciado(a)</option>
					<option value="Viúvo(a)">Viúvo(a)</option>
					<option value="Mora Junto">Mora Junto</option>
					<option value="Separado(a)">Separado(a)</option>
				</select>

				<br>

				<input type="radio" name="sexo" value="Masculino">Masculino
				<input type="radio" name="sexo" value="Feminino">Feminino

				<br>

				<input type="file" name="foto">

				<br>

				<center>
					<input type="submit" name="enviar" value="Enviar">
				</center>

			</div>

		</form>

	</body>

</html>