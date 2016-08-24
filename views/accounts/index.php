<!-- Vista index-->


<div class="row">
  <div class="col s12 m12 l12">
<table class="highlight responsive-table">
  <h2>Listado de cuentas</h2>
  <thead>
    <tr>
				<th>ID</th>
				<th>#usuario</th>
				<th>cuenta</th>
				<th>Nombre</th>
				<th>accion</th>
		</tr>
  </thead>
  <tbody>
<?php foreach ($accounts as $account ): ?>
    <tr>
		    <td><?php echo $account['id']; ?></td>
				<td><?php echo $account['user_id']; ?></td>
				<td><?php echo $account['name']; ?></td>
				<td>
		    		<a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account["id"]; ?>">modificar</a>
        		<a href="<?php echo APP_URL; ?>accounts/delete/?id=<?php echo $account['id']; ?>">eliminar</a>
		    </td>
		</tr>
<?php endforeach; ?>
  </tbody>
</table>
       <button class="btn waves-effect waves-light grey darken-4 z-depth-3" type="submit" name="action">
        <li><a href="<?php echo APP_URL; ?>accounts/add">Añadir</a></li>
      </button>

</div>
</div>
