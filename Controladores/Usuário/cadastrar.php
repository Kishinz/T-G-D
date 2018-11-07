<?php 

$erros = [];

$request = array_map('trim', $_REQUEST);
$request = filter_var_array(
			   $request,
			   [ 'nomePróprio' => FILTER_DEFAULT,
			   	 'sobrenome' => FILTER_DEFAULT,
			     'email' => FILTER_VALIDATE_EMAIL,
				 'senha' => FILTER_DEFAULT,
				 'confirmaSenha' => FILTER_DEFAULT,
				 'turma' => FILTER_DEFAULT ]
           );

$nomePróprio = $request['nomePróprio'];
if ($nomePróprio == false)
{
	$erros[] = "Nome inválido ou não informado";
}
else if (strlen($nomePróprio) < 3 || strlen($nomePróprio) > 35)
{
	$erros[] = "O nome deve ter no mínimo 3 e no máximo 35 caracteres.";
}

$sobrenome = $request['sobrenome'];
if ($sobrenome == false)
{
	$erros[] = "Nome inválido ou não informado";
}
else if (strlen($sobrenome) < 3 || strlen($sobrenome) > 35)
{
	$erros[] = "O nome deve ter no mínimo 3 e no máximo 127 caracteres.";
}


$email = $request['email'];
if ($email == false)
{
	$erros[] = "E-mail inválido ou não informado";
}
else if (BuscaAlunoPorEmail($email) != false)
{
	$erros[] = "Já existe um aluno cadastrado com esse e-mail";
}



$senha = $request['senha'];
if ($senha == false)
{
	$erros[] = "Nome inválido ou não informado";
}
else if (strlen($senha) < 6 || strlen($senha) > 12)
{
	$erros[] = "O nome deve ter no mínimo 3 e no máximo 127 caracteres.";
}


$ConfirmaSenha = $request['ConfirmaSenha'];
if ($ConfirmaSenha == false)
{
	$erros[] = "Nome inválido ou não informado";
}
else if (strlen($confirmaSenha) < 6 || strlen($confirmaSenhan) > 12)
{
	$erros[] = "O nome deve ter no mínimo 3 e no máximo 127 caracteres.";
}


$dataNasc = $request['dataNasc'];
if ($dataNasc == false)
{
	$erros[] = "Nome inválido ou não informado";
}
else if (strlen($dataNasc) < 00/00/1900 || strlen($dataNasc) >00/00/2002 )
{
	$erros[] = "O nome deve ter no mínimo 3 e no máximo 127 caracteres.";
}

 
$alertasEmail = $request['alertasEmail'];
if ($alertasEmail == false)

$aceitaTermos = $request['aceitaTermos'];
if ($aceitaTermos == false)












 ?>