<h1>Gestionar Categorias</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small">Crear categoria</a>

<table border="1">

    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
    </tr>

    <?php while($cat= $categorias->fetch_object()) : ?>
    <tr>
        <td><?=$cat->id;?></td>
        <td><?=$cat->nombre;?></td>
    </tr>

    <?php endwhile; ?>
</table>