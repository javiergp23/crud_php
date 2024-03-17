<h1>Editar Usuario</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="accion" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php print $row->nombre;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?php print $row->email;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Clave</label>
        <input type="current-password" name="clave" value="<?php print $row->clave;?>" class="form-control" require>
    </div>
    <div class="mb-3">
        <label>Fecha de Nacimiento</label>
        <input type="date" name="fecha_nac" value="<?php print $row->fecha_nac;?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Enviar
        </button>
    </div>
</form>