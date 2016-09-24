<!DOCTYPE html>
<html lang="es">
<head>
<title>Listado de unidades</title>
</head>
<body>
<header>
<h1>Listado de unidades</h1>
</header>
<section>
<table border="1" cellpadding="0" cellspacing="0">
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Abreviado</th>
</tr>
<?php foreach ($datos as $fila) { ?>
<tr>
<td><?php echo $fila['id_unidad_medida'] ?></td>
<td><?php echo $fila['nombre'] ?></td>
<td><?php echo $fila['abreviado'] ?></td>
</tr>
<?php } ?>
</table>
</section>
<footer>
&copy;Amadeo E. Molina
</footer>
</body>
</html>

