<?php
require_once 'includes/header.php';
require_once 'includes/database.php';
?>

<div>
<div class="row text-center justify-content-center">
    <div class="col text-center justify-content-center">
<?php

if (isset($_SESSION['sessionId'])) {
    echo "You are logged in!";
} else {
    echo "<h1>HOME</h1>";
}

$query = "SELECT * FROM shipments";
   $data = mysqli_query($conn, $query);
//    echo "<pre>";
//    while ($result = mysqli_fetch_assoc($data)) {
//        var_dump($result);
//    };   
//    echo "</pre>";
?>
</div>
</div>

<div class="row no-gutters">
    <div class="col no-gutters">
<?php if (count($data) > 0): ?>
    <?php $pieces = array_keys(mysqli_fetch_assoc($data));?>
<table>
  <thead>
    <tr>
      <th><?= implode('</th><th>', $pieces); ?></th>  
    </tr>
  </thead>
  <tbody>
<?php foreach ($data as $row):?>
    <tr>
      <td><?= implode('</td><td>', array_map('htmlentities', $row)); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; //count $data. ?>

</div>
</div>
</div>
<?php
require_once 'includes/footer.php';
?>



