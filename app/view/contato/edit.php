<div class="base-home">
  <h1>
    <span>Editar</span> contato
  </h1>
  <div>
    <form class="form-cadastro" action="<?= URL_BASE."contato/save"?>" method="POST">
      <label>ID</label>
      <input type="number" disabled value="<?= $contato["id"]; ?>">
      <br><br>
      <label for="nome">Nome</label>
      <input type="hidden" name="id" value="<?= $contato["id"]; ?>">
      <input type="text" name="nome" placeholder="Nome do Contato" value="<?= $contato["nome"]; ?>">
      <br><br>
      <label for="nome">Telefone</label>
      <input type="text" name="tel" placeholder="(xx) xxxxx-xxxx" value="<?= $contato["telefone"]; ?>">
      <button class="button" type="submit">Inserir</button>
      <button class="button">Limpar</button>
    </form>
  </div>
</div>