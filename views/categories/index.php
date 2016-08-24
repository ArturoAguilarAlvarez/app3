<!-- Vista Index-->



<div class="row">
<div class="col s12 m12 l12">
<table class="highlight responsive-table">
  <h2>Categorias</h2>
  <thead>
    <tr>
		    <th>Id</th>
				<th>Nombre</th>
				<th>accion</th>
	  </tr>
  </thead>
  <tbody>
<?php foreach ($categories as $category ): ?>
    <tr>
		    <td><?php echo $category['id']; ?></td>
		    <td><?php echo $category['name']; ?></td>
		    <td>
		        <a href="<?php echo APP_URL; ?>categories/edit/<?php echo $category["id"]; ?>">modificar</a>
		    		<a href="<?php echo APP_URL; ?>categories/delete/?id=<?php echo $category['id']; ?>">eliminar</a>
		    </td>
	  </tr>
<?php endforeach; ?>
  </tbody>
</table>
       <button class="btn waves-effect waves-light grey darken-4 z-depth-3" type="submit" name="action">
        <li><a href="<?php echo APP_URL; ?>categories/add">Añadir</a></li>
      </button>
</div>
</div>
