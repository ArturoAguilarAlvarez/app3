<!-- Vista index-->

<div class="row">
	<div class="col s12 m12 l12">
<table class="highlight responsive-table">
	<h2>Listado de usuarios</h2>
	<thead>
	  <tr>
	    	<th>ID</th>
		    <th>usuario</th>
				<th>ROL</th>
				<th>accion</th>
	  </tr>
	</thead>
	<tbody>
<?php foreach ($users as $user ): ?>
    <tr>
		    <td><?php echo $user['id']; ?></td>
		    <td><?php echo $user['username']; ?></td>
		    <td><?php echo $user['rol']; ?></td>
		    <td>
		        <a href="<?php echo APP_URL; ?>users/edit/<?php echo $user["id"]; ?>">modificar</a>
		        <a href="<?php echo APP_URL; ?>users/delete/?id=<?php echo $user["id"]; ?>">eliminar</a>
        </td>
	  </tr>
<?php endforeach; ?>
</tbody>
</table>
       <button class="btn waves-effect waves-light grey darken-4 z-depth-3" type="submit" name="action">
        <li><a href="<?php echo APP_URL; ?>users/add">Añadir</a></li>
      </button>

</div>
</div>

