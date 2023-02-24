<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Pessoas</title>
  <style>
  table,
  tr,
  th,
  td {
    border: 1px;
    border-style: solid;
    border-color: black;
    border-collapse: collapse;
    text-align: center;
  }

  button {

    background-image: linear-gradient(#0dccea, #0d70ea);
    border: 0;
    border-radius: 4px;
    box-shadow: rgba(0, 0, 0, .3) 0 5px 15px;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    font-family: Montserrat, sans-serif;
    font-size: 12px;
    margin: 5px;
    padding: 10px 15px;
    text-align: center;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
  }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>CPF</th>
      <th>Data de Nascimento</th>
      <th></th>
    </tr>

    <?php foreach ($model->rows as $item) : ?>
    <tr>
      <td><?= $item->id ?></td>
      <td>
        <a href="/pessoa/form?id=<?= $item->id ?>">
          <?= $item->nome ?>
        </a>
      </td>
      <td><?= $item->cpf ?></td>
      <td><?= $item->data_nascimento ?></td>
      <td>
        <a href="/pessoa/delete?id=<?= $item->id ?>">
          <button>Excluir</button>
        </a>
      </td>
    </tr>
    <?php endforeach ?>

    <?php if(count($model->rows) == 0): ?>
    <tr>
      <td colspan="5">Nenhum registro encontrado.</td>
    </tr>
    <?php endif ?>

  </table>
</body>

</html>