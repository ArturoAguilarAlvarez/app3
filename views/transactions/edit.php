<!-- Vista para editar-->
<!-- Vista para editar-->
<form action="<?php echo APP_URL; ?>transactions/edit" method="POST">
    <input type="hidden" name="id" value="<?php echo $transaction["0"]; ?>">
    <p>
        <label for="new_account">Cuenta</label><br>
        <select name="new_account">
<?php foreach ($accounts as $account): ?>
        <option value="<?php echo $account["0"]; ?>"> <?php echo $account["name"]; ?></option>
<?php endforeach; ?>
        </select>
    </p>
    <p>
        <label for="new_category_id">Categoria de transaccion:</label><br>
        <select name="new_category_id">
<?php foreach ($categories as $category): ?>
        <option value="<?php echo $category["id"]; ?>"> <?php echo $category["name"]; ?></option>
<?php endforeach; ?>
        </select>
    </p>
    <p>
        <label for="new_description">Descripcion: </label><br>
        <input type="text" name="new_description">
    </p>
    <p>
        <label for="new_amount">Monto: </label><br>
        <input type="number" name="new_amount">
    </p>
    <p>
        <label for="new_date">Fecha: </label><br>
        <input type="date" name="new_date" value="199/12/1">
    </p>
    <p>
        <input type="submit" name="update" value="Save">
    </p>
</form>
