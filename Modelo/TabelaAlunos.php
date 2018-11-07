<?php

require_once('ConexãoBd.php');


function BuscaAlunoPorId(int $id)
{
	$bd = CriaConexãoBd();

	$sql = $bd->prepare('SELECT Alunos.*, Turmas.turma
	                     FROM Alunos
						 INNER JOIN Turmas ON Alunos.idTurma = Turmas.id
						 WHERE Alunos.id = :valId');

	$sql->bindValue(':valId', $id);

	$sql->execute();

	return $sql->fetch();
}


function BuscaAlunoPorEmail(string $email)
{
	$bd = CriaConexãoBd();

	$sql = $bd->prepare('SELECT * FROM Alunos WHERE email = :valEmail');

	$sql->bindValue(':valEmail', $email);

	$sql->execute();

	return $sql->fetch();
}


function InsereAluno(array $dadosAluno) : int
{
	$bd = CriaConexãoBd();

	$sql = $bd->prepare('INSERT INTO Alunos (nome, email, senha, idTurma)
	                     VALUES (:valNome, :valEmail, :valSenha, :valIdTurma)');

	$sql->bindValue(':valNome', $dadosAluno['nome']);
	$sql->bindValue(':valEmail', $dadosAluno['email']);
	$sql->bindValue(':valSenha', $dadosAluno['senha']);
	$sql->bindValue(':valIdTurma', $dadosAluno['turma']);

	$sql->execute();

	return $bd->lastInsertId();
}

?>