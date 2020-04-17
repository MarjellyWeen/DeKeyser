<?php
require_once 'includes/header.php';
require_once 'includes/database.php';
?>

<div>
    <div class="row text-center justify-content-center">
        <div class="col text-center justify-content-center">
            <?php

$query = "SELECT * FROM adresses";
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
                        <th><?=implode('</th><th>', $pieces);?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row): ?>
                    <tr>
                        <td><?=implode('</td><td>', array_map('htmlentities', $row));?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <?php endif; //count $data. ?>
            <div class="col no-gutters">
                <h2>Add a new contact:</h2>
                <form action="includes/manage_adresses.php" method="post">
                    <!-- <label for="company_id">Company=</label>
                    <select id="company_id" name="company_id" form="company_id">
                        <option value="3">Vervoer de keyser</option>
                        <option value="4">Paniflower</option> -->

                        <input type="text" name="company_id" placeholder="company id">
                        <input type="text" name="adress" placeholder="adress">
                        <input type="text" name="type" placeholder="type">

                        <button class="btn btn-info" type="submit" name="submit">Add adress</button>
                </form>
            </div>

            <?php
// $field_definitions_query = "SELECT * FROM shipments";

// $field_definitions_data = mysqli_query($dbc, $field_definitions_query);

// $field_definitions = array();

// while ($row = mysqli_fetch_array($field_definitions_data)) {
//   array_push($field_definitions, $row);
// }
// echo '<form enctype="multipart/form-data" method="post" action="' . $_SERVER['PHP_SELF'] . '">';

// foreach ($field_definitions as $row) {
//  echo '<label for="' . $row[field_name] . '">' . $row[field_desc] . ':</label>';
//  echo '<input type="' . $row[field_type] . '" id="' . $row[field_name] . '" name="' . $row[field_name]. '" value="temp" /><br />';
// }

// echo '<input type="submit" value="Save" name="submit" /></form>';

?>
        </div>
    </div>

</div>
<?php
require_once 'includes/footer.php';
?>