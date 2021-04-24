<?php
require_once 'db_connect.php';
$pub_name = $_GET['pub_name'];
$sql = "SELECT * FROM library_all_media WHERE pub_name = '$pub_name'";
$result = mysqli_query($connect, $sql);
$tbody = '';
if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $tbody .= "<tr>
        <td>$row[id]</td>
        <td><img src='$row[media_image]'></td>
        <td>$row[media_title]<br>$row[media_type]<br>$row[media_date]</td>
        <td>$row[media_descr]<br>$row[pub_name]</td>
        <td><a href='../delete.php?id=" . $row['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a><a href='../update.php?id=" . $row['id'] . "'><button class='btn btn-warning btn-sm' type='button'>Update</button></a><a href='../details.php?id=" . $row['id'] . "'><button class='btn btn-success btn-sm' type='button'>Details</button></a></td>
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
    <title>Publisher Media</title>
    <?php require_once '../components/bootstrap.php' ?>
    <link rel="stylesheet" type="text/css" href="../../styles/styles.css">
</head>

<body>
    <?php include_once "../header.php" ?>
    <?php include_once "../navbar_a.php" ?>
    <div class="container-fluid mx-auto px-5">
        <div class="wrapSideOut mx-lg-5">
            <div class="wrapSideIn mx-lg-5">
                <div class="wrapIndex mx-5">
                    <div id="groundInd">
                        <div id="borderInd">
                            <table class="table table-striped mb-0">
                                <tbody>
                                    <?= $tbody; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "../footer.php" ?>
</body>


</html>