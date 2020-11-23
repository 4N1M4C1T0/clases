<?php

?>
<form id="frm-alumno" action="?c=profesor&a=Guardar" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>ID</label>
        <input type="text" name="idProfesor" value="<?php echo $profesor->idProfesor; ?>" class="form-control" placeholder="Ingrese su idProfesor" required>
    </div>

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $profesor->nombre; ?>" class="form-control" placeholder="Ingrese su nombre" required>
    </div>

    <div class="form-group">
        <label>Idioma</label>
        <input type="text" name="idioma" value="<?php echo $profesor->idioma; ?>" class="form-control" placeholder="Ingrese su idioma" required>
    </div>
    <hr />
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function() {
        $("#frm-alumno").submit(function() {
            return $(this).validate();
        });
    })
</script>