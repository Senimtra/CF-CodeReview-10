<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library_all_media WHERE id = {$id}";
    $result = $connect->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $media_title = $data['media_title'];
        $media_type = $data['media_type'];
        $media_date = $data['media_date'];
        $media_isbn = $data['media_isbn'];
        $media_descr = $data['media_descr'];
        $media_image = $data['media_image'];
        $media_status = $data['media_status'];
        $author_fname = $data['author_fname'];
        $author_lname = $data['author_lname'];
        $pub_name = $data['pub_name'];
        $pub_address = $data['pub_address'];
        $pub_size = $data['pub_size'];
    } else {
        header("location: error.php");
    }
    $connect->close();
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Details</title>
    <?php require_once 'components/bootstrap.php' ?>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>

<body>
    <?php include_once "header.php" ?>
    <?php include_once "navbar.php" ?>
    <div class="container-fluid mx-auto px-5">
        <div class="wrapSideOut mx-lg-5">
            <div class="wrapSideIn mx-lg-5">
                <div class="wrapIndex mx-5">
                    <div id="groundInd">
                        <div id="borderInd">
                            <table class="table table-striped mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><?php echo $media_title ?></p>
                                            <p><?php echo $media_type ?></p>
                                            <p><?php echo $media_date ?></p>
                                            <p><?php echo $media_isbn ?></p>
                                            <p><?php echo $media_descr ?></p>
                                            <p><?php echo $media_image ?></p>
                                            <p><?php echo $media_status ?></p>
                                            <p><?php echo $author_fname ?></p>
                                            <p><?php echo $author_lname ?></p>
                                            <p><?php echo $pub_name ?></p>
                                            <p><?php echo $pub_address ?></p>
                                            <p><?php echo $pub_size ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "footer.php" ?>
</body>

</html>