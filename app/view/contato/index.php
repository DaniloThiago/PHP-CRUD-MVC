<div class="base-home">
  <h1>
    <span>Listar</span> contato
  </h1>
  <h4><?= count($contatos); ?> Contato(s) cadastrado(s)</h4>
  <div>
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Telefone</td>
          <td>Ações</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($contatos as $contato) { ?>
          <tr>
            <td><?= $contato["id"]?></td>
            <td><?= $contato["nome"]?></td>
            <td><?= $contato["telefone"]?></td>
            <td>
              <a class="button" href="<?= URL_BASE."contato/edit/".$contato["id"]?>">Editar</a>
              <a class="button" href="<?= URL_BASE."contato/delete/".$contato["id"]?>">Excluir</a>
            </td>
          </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
</div>