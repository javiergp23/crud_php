<h1>Nuevo usuario</h1>
<form action="?page=guardar" method="POST">
    <input type="hidden" name="accion" value="guardar">
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Clave</label>
        <input type="password" name="clave" class="form-control">
    </div>
    <div class="mb-3">
        <label>Fecha de Nacimiento</label>
        <input type="date" name="fecha_nac" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Enviar
        </button>
    </div>
</form>