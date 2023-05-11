<?php
    include 'koneksi database.php';

    $query2 = "SELECT * FROM products;";
    $sql2 = mysqli_query($conn, $query2);

    $no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Products</title>
</head>
<body>
    <!-- Products -->
    <h1>Data Products</h1>
    <a href="inputproducts.php" type="button" class="tambah">
        <i class="fa-solid fa-plus"></i>
        Tambah Data
    </a>
    <table border="2">
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Line</th>
                <th>Product Scale</th>
                <th>Product Vendor</th>
                <th>Product Description</th>
                <th>Quantity In Stock</th>
                <th>Buy Price</th>
                <th>MSRP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($result2 = mysqli_fetch_assoc($sql2)){
        ?>
            <tr>
                <td>
                    <?php echo $result2["productCode"]; ?>
                </td>
                <td>
                    <?php echo $result2["productName"]; ?>
                </td>
                <td>
                    <?php echo $result2["productLine"]; ?>
                </td>
                <td>
                    <?php echo $result2["productScale"]; ?>
                </td>
                <td>
                    <?php echo $result2["productVendor"]; ?>
                </td>
                <td>
                    <?php echo $result2["productDescription"]; ?>
                </td>
                <td>
                    <?php echo $result2["quantityInStock"]; ?>
                </td>
                <td>
                    <?php echo $result2["buyPrice"]; ?>
                </td>
                <td>
                    <?php echo $result2["MSRP"]; ?>
                </td>
                <td>
                    <div class=logo>
                        <a href="inputproducts.php?ubah=<?php echo $no++?>" type="button" class="button">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <a href="inputproducts.php" type="button "class="button">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</body>
</html>