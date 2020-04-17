<?php
require_once 'includes/header.php';
require_once 'includes/database.php';
?>

<div>
    <div class="row text-center justify-content-center">
        <div class="col text-center justify-content-center">
            <?php

$query = "SELECT * FROM contacts";
$data = mysqli_query($conn, $query);
$company_query = "SELECT * FROM companies";
$company_data = mysqli_query($conn, $company_query);

$options = "";

while ($row1 = mysqli_fetch_array($company_data)){
    $options = $options . "<option value='$row1[0]'>$row1[2] - $row1[0]</option>";
}

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
                <form action="includes/manage_contacts.php" method="post">

                <select id="company_id" name="company_id" form="company_id">
                            <?php echo $options;?>
                    </select>

                        <!-- <input type="text" name="company_id" placeholder="company id"> -->
                        <input type="text" name="name" placeholder="name">
                        <input type="text" name="role" placeholder="role">
                        <input type="text" name="code" placeholder="code">

                        <button class="btn btn-info" type="submit" name="submit">Add contact</button>
                </form>
            </div>

            <?php

?>
        </div>
    </div>

</div>
<?php
require_once 'includes/footer.php';
?>