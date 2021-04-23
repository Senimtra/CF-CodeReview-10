<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Media</title>
    <?php require_once 'components/bootstrap.php' ?>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>

<body>
    <?php include_once "header.php" ?>
    <?php include_once "navbar.php" ?>
    <div class="container-fluid mx-auto px-5">
        <div class="wrapIndex mx-5 bg-secondary">
            <fieldset>
                <legend class='h2'>Add Product</legend>
                <form action="actions/a_create.php" method="post">
                    <table class='table'>
                        <tr>
                            <th>Name</th>
                            <td><input class='form-control' type="text" name="name" placeholder="Product Name" /></td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td><input class='form-control' type="number" name="price" placeholder="Price" step="any" /></td>
                        </tr>
                        <tr>
                            <th>Picture</th>
                            <td><input class='form-control' type="file" name="picture" /></td>
                        </tr>
                        <tr>
                            <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                            <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
    </div>
    <?php include_once "footer.php" ?>
</body>



</html>