<div class="base-home">
  <h1>
    <span>Cadastrar</span> contato
  </h1>
  <div>
    <form class="form-cadastro" action="<?= URL_BASE."contato/save"?>" method="POST">
      <label>ID</label>
      <input type="number" disabled placeholder="Preenchimento automático">
      <br><br>
      <label for="nome">Nome</label>
      <input type="text" name="nome" placeholder="Nome do Contato">
      <br><br>
      <label for="nome">Telefone</label>
      <input type="text" name="tel" placeholder="(xx) xxxxx-xxxx">
      <button class="button" type="submit">Inserir</button>
      <button class="button">Limpar</button>
    </form>
  </div>
</div>