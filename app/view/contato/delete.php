<div class="base-home">
  <h1>
    <span>Deletar</span> contato
  </h1>
  <div id="deletar">
    <label>ID</label>
    <input type="number" disabled value="<?= $contato["id"]; ?>">
    <br><br>
    <label>Nome</label>
    <input type="text" name="nome" disabled placeholder="Nome do Contato" value="<?= $contato["nome"]; ?>">
    <br><br>
    <label>Telefone</label>
    <input type="text" name="tel" disabled placeholder="Telefone do Contato" value="<?= $contato["telefone"]; ?>">
    <a href="<?= URL_BASE."contato/delete/".$contato["id"]."/S"; ?>">Excluir</a>
  </div>
</div>