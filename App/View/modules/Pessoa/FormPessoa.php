<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Pessoas</title>
  <style>
    label,
    input {
      display: block;
    }
  </style>
</head>

<body>
  <fieldset>
    <legend>Cadastro de Pessoa</legend>

    <form method="post" action="/pessoa/form/save">

      <input type="hidden" value="<?= $model->id ?>" name="id" />

      <label for="nome">Nome:</label>
      <input id="nome" name="nome" type="text" value="<?= $model->nome ?>" />

      <label for="cpf">CPF:</label>
      <input id="cpf" name="cpf" type="number" value="<?= $model->cpf ?>" />

      <label for="data_nascimento">Data Nascimento:</label>
      <input id="data_nascimento" name="data_nascimento" type="date" value="<?= $model->data_nascimento ?>" />

      <button type="submit">Salvar</button>

    </form>

  </fieldset>
</body>

</html>