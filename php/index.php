<?php
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM library_all_media";
$result = mysqli_query($connect, $sql);
$tbody = ''; //this variable will hold the body for the table
if (mysqli_num_rows($result)  > 0) {
    $i = 0;
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $i++;
        if ($i < 100) {
            $tbody .= "<tr>
        <td>$row[id]</td>
        <td><img src='$row[media_image]'></td>
        <td>$row[media_title]<br>$row[media_type]<br>$row[media_date]</td>
        <td>$row[media_descr]</td>
        <td><a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>

            </tr>";
        } else {
            break;
        }

        /* <td><img class='img-thumbnail' src='pictures/" . $row['picture'] . "'</td>
            <td><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
             */
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

$connect->close();
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
                <!-- <thead class='table-success'>
                <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>price</th>
                    <th>Action</th>
                </tr>
            </thead> -->
                <tbody>
                    <?= $tbody; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include_once "footer.php" ?>
</body>

</html>