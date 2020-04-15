<?php
require_once 'includes/header.php';
?>
<div class="container text-center justify-content-center">
    <div class="row text-center justify-content-center">
    <div class="col">
<h1>LOG IN</h1>
</div>
</div>
<div class="row text-center justify-content-center">
<div class="col">
<p>No account? <a href="register.php">Register here</a></p>
</div>
</div>
<div class="row text-center justify-content-center">
    <div class="col">
<form class="input" action="includes/login-inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button class="btn btn-info" type="submit" name="submit">Log in</button>
</form>
</div>
</div>
</div>

<?php
require_once 'includes/footer.php';
?>