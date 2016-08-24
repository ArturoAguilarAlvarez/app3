<!-- Vista para añadir-->
<form action="<?php echo APP_URL; ?>users/add" class="col s12 m12 l12" method="POST">
    <div class="row">
      <div class="input-field col s12 m12 l6">
        <label for="username">Username:</label><br>
        <input id="username" type="text" name="username" class="validate"><br>
  
      </div>

      <div class="input-field col s12 m12 l6">
                <label for="password" >Password:  </label><BR>
        <input id="password" type="password" name="password" class="validate"><br>

    </div>
</div>
<div class="row">
      <div class="input-field col s12 m12 l12">
                <label for="rol">Rol: </label><br>
        <input id="rol" type="text" name="rol" class="validate"><br>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l12">
        <button class="btn waves-effect waves-light" type="submit" name="add" value="save">Save

    </button>
  </div>
  </div>
</div>
</form>
