<?php
require_once 'includes/header.php';
?>
<div class="container text-center justify-content-center">
    <div class="row text-center justify-content-center">
    <div class="col">
<h1>REGISTER</h1>
</div>
</div>
<div class="row text-center justify-content-center">
<div class="col">
<p>Already have an account? <a href="login.php">Log in here</a></p>
</div>
</div>
<div class="row text-center justify-content-center">
    <div class="col">
<form class="input" action="includes/register-inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="confirmPassword" placeholder="Confirm password">
    <button class="btn btn-info" type="submit" name="submit">Register</button>
</form>
</div>
</div>
</div>

<?php
require_once 'includes/footer.php';
?>