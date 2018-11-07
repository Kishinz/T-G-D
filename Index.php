<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>InstaCPII</title>
</head>
<body>

	<h1>InstaCPII</h1>

	<h2>Usuário existente:</h2>

    <!-- PENDENTE: Criar formulário de login -->

	<h2>Novo usuário:</h2>
	<form action="Controladores/Usuário/cadastrar.php" method="POST">
		<input name="nomePróprio" type="text" placeholder="Nome próprio" min="3" max="35" required/>
		<input name="sobrenome" type="text" placeholder="Sobrenome" min="3" max="35" required/><br/>

		<input name="email" type="email" placeholder="E-Mail" required/><br/>

		<input name="senha" type="password" placeholder="Senha" min="6" max="12" required /><br/>

		<input name="confirmaSenha" type="password" placeholder="Confirmar senha" min="6" max="12" required /><br/>

		<label>Data de nascimento: <input name="dataNasc" type="date" min="00/00/1900" max="00/00/2002"required/></label><br/>

		<label>
			Quem pode ver as suas publicações?
			<select name="visibilidadePublicações" required>
				<option value="" selected disabled>Selecione</option>
				<option value="1">Amigos</option>
				<option value="2">Amigos de amigos</option>
				<option value="3">Todos</option>
			</select>
		</label><br/>

		<label><input name="alertasEmail" type="checkbox"/>Receber alertas por e-mail.</label><br/>

		<label><input name="aceitaTermos" type="checkbox" required/>Li e concordo com os termos de uso e com a política de privacidade.</label><br/>

		<input type="submit" value="Cadastrar"/>
	</form>

</body>
</html>