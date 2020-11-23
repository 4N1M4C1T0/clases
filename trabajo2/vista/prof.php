<h1>Profesor</h1>

<a >Agregar</a>
<br><br><br>

<table>
    <thead>
        <tr>
            <th >ID</th>
            <th >Profesor</th>
            <th >Idiomas</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($this->model->Listar() as $r) : ?>
            <tr>
                <td><?php echo $r->idProfesor; ?></td>
                <td><?php echo $r->nombre; ?></td>
                <td><?php echo $r->idioma; ?></td>
                <td>
                    <a class="btn btn-warning" href="?c=profesor&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
                </td>
                <td>
                    <a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=profesor&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>