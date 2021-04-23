<?php
require_once 'actions/db_connect.php';
$sql = "SELECT DISTINCT id, pub_name FROM library_all_media GROUP BY pub_name";
$result = mysqli_query($connect, $sql);
$tbody = ''; //this variable will hold the body for the table
if (mysqli_num_rows($result)  > 0) {
    $i = 0;
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $tbody .= "<tr>
        <td>$row[id]</td>
        <td>$row[pub_name]</td>

        <td><a href='actions/a_publisher.php?pub_name=" . $row['pub_name'] . "'><button class='btn btn-primary btn-sm' type='button'>Media</button></a></td>

            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Library</title>
    <?php require_once 'components/bootstrap.php' ?>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>

<body>
    <?php include_once "header.php" ?>
    <?php include_once "navbar.php" ?>
    <div class="container-fluid mx-auto px-5">
        <div class="wrapIndex mx-5 bg-secondary">
            <table class='table table-striped'>
                <tbody>
                    <?= $tbody; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include_once "footer.php" ?>
</body>

</html>