<?php
$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST['id'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id ?>">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome ?>" required>
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email ?>" required>
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control" required>
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nasc ?>" required>
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>

</form>

#teste