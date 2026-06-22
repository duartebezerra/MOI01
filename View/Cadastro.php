<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro</title>

<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<div class="card-login">

<div class="titulo">
<h2>Cadastro</h2>
</div>

<form action="salvar.php" method="POST">

<input type="text"
name="nome"
placeholder="Nome Completo"
required>

<input type="number"
name="idade"
placeholder="Idade"
min="0"
required>

<input type="email"
name="email"
placeholder="Email"
required>

<input type="text"
name="cpf"
placeholder="CPF"
required>

<input type="password"
name="senha"
placeholder="Senha"
required>

<div class="botoes">

<button type="reset" class="cancelar">
Cancelar
</button>

<button type="submit" class="entrar">
Cadastrar
</button>

</div>

</form>

</div>

</div>

</body>
</html>