<!-- Vista para editar-->
<form action="<?php echo APP_URL; ?>users/edit" method="POST">
    <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
    <p>
        <label for="username">Username:</label><br>
        <input type="text" name="username" value="<?php echo $user["username"]; ?>">
    </p>
    <p>
        <label for="new_password">Password</label><br>
        <input type="password" name="new_password">
    </p>
    <p>
        <label for="rol">ROL:</label><br>
        <input type="text" name="rol" value="<?php echo $user["rol"]; ?>">
    </p>
    <p>
        <input type="submit" value="Save">
    </p>
</form>
