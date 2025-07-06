<h3>Listado de notas</h3>

<?php while($nota = $notas->fetch_object()): ?>
    <?=$nota->titulo?> - <?=$nota->fecha?> <br/> <br/>
<?php endwhile?>