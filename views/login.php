<div class="container">
    <h1>Ingresa tu usuario y contraseña</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?controller=public&action=login" method="post">
        <label for="username">Usuario</label>
        <input class="form-control" type="text" name="username" id="username" value="<?php echo $username; ?>">
        <?php if($username_err!=''): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $username_err; ?>
            </div>
        <?php endif; ?>

        <br>
        <label for="password">Contraseña</label>
        <input class="form-control" type="password" name="password" id="password">
        <?php if($password_err!=''): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $password_err; ?>
            </div>
        <?php endif; ?>
        <br>
        <input class="btn btn-success" type="submit" name="submit" value="login">
    </form>
</div>