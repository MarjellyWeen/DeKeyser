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
<div class="col no-gutters">
<form action="include/manage-shipments" method="post">
    <input type="text" name="customer_ref" placeholder="Customer ref">
    <input type="text" name="order_company_id" placeholder="order_company_id">
    <input type="text" name="transport_company_id" placeholder="transport_company_id">
    <input type="text" name="driver_id" placeholder="driver_id">
    <input type="text" name="customer_company_id" placeholder="customer_company_id">
    <input type="text" name="load_adress_id" placeholder="load_adress_id">
    <input type="datetime" name="loading_at" placeholder="loading_at">
    <input type="text" name="loading_comment" placeholder="loading_comment">
    <input type="text" name="unload_adress_id" placeholder="unload_adress_id">
    <input type="datetime" name="unloading_at" placeholder="unloading_at">
    <input type="text" name="unloading_comment" placeholder="unloading_comment">
    <input type="text" name="product_id" placeholder="product_id">
    <input type="text" name="quantity" placeholder="quantity">
    <input type="text" name="quantity_unit" placeholder="quantity_unit">
    
    <button class="btn btn-info" type="submit" name="submit">Add shipment</button>
</form>
</div>
</div>
</div>

</div>
<?php
require_once 'includes/footer.php';
?>



