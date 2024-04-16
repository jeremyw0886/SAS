<?php
require_once('db_credentials.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // User input
    $salamanderName = $_POST['name'];
    $salamanderHabitat = $_POST['habitat'];
    $salamanderDescription = $_POST['description'];
    // Prepare the SQL statement
    $sql = "INSERT INTO salamander (name, habitat, description) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($db, $sql);
    // Bind parameters to the prepared statement
    // "sss" indicates the type of the parameters, "s" stands for string
    mysqli_stmt_bind_param($stmt, "sss", $salamanderName, $salamanderHabitat, $salamanderDescription);
    // Execute the prepared statement
    if(mysqli_stmt_execute($stmt)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: " . mysqli_error($db);
    }
    // Close statement
    mysqli_stmt_close($stmt);
} else {

$pageTitle = 'Create Salamander'; ?>
  <a href="<?php echo url_for('salamanders/index.php'); ?>">&laquo; Back to Salamanders</a>

    <h1>Create Salamander</h1>

    <form action="<?= url_for('salamanders/create.php'); ?>" method="post">
    <label for="name">
        <p>Name:<br> <input type="text" name="name" value=""></p>
    </label>
    <label for="habitat">
        <p>Habitat: <br>
            <textarea rows="4" cols="50" name="habitat" value=""></textarea>
        </p>
    </label>
    <label for="description">
        <p>Description:<br>
            <textarea rows="4" cols="50" name="description" value=""></textarea> 
        </p>
    </label>
    <lable for="submit">
        <p><input type="submit" value="Create Salamander"></p>
    </label>
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); 

}
?>
