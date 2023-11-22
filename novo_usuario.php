<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="salvar">
<div class="mb-3">
    <label for="">Nome</label>
    <input type="text" name="nome" class="form-control" required>
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" required>
    <label for="">Senha</label>
    <input type="password" name="senha" class="form-control" required>
    <label for="">Data de Nascimento</label>
    <input type="date" name="data_nasc" class="form-control" required>
    <button type="submit" class="btn btn-success">Enviar</button>
</div>

</form>