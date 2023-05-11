<?php 
    include ('koneksi database.php'); 

    $status = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //Products
    $productCode = $_POST['productCode'];
    $productName = $_POST['productName'];
    $productLine = $_POST['productLine'];
    $productScale = $_POST['productScale'];
    $productVendor = $_POST['productVendor'];
    $productDescription = $_POST['productDescription'];
    $quantityInStock = $_POST['quantityInStock'];
    $buyPrice = $_POST['buyPrice'];
    $MSRP = $_POST['MSRP'];
    
    $query = $conn->prepare("INSERT INTO products VALUES ('$productCode', '$productName', '$productLine', '$productScale', '$productVendor', '$productDescription', '$quantityInStock', '$buyPrice', '$buyPrice')");

    $query->bindParam(':productCode',$productCode);
    $query->bindParam(':productName',$productName);
    $query->bindParam(':productLine',$productLine);
    $query->bindParam(':productScale',$productScale);
    $query->bindParam(':productVendor',$productVendor);
    $query->bindParam(':productDescription',$productDescription);
    $query->bindParam(':quantityInStock',$quantityInStock);
    $query->bindParam(':buyPrice',$buyPrice);
    $query->bindParam(':MSRP',$MSRP);

    //eksekusi query
    if ($query->execute()) {
        $status = 'ok';
    } else{
        $status = 'err';
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inputproducts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Input Data Products</title>
</head>
<body>
    <h1>Silakan Masukkan Data</h1>
    <table>
        <form method="post" action="insertproducts.php">
            <tr>
                <td><label for="productsCode">Products Number</label></td>
                <td><input type="text" name="productsCode" id="productsCode" placeholder="Ex:123"><br></td>
            </tr>
        
            <tr>
                <td><label for="productsName">Products Name</label></td>
                <td><input type="text" name="productsName" id="productsName"><br></td>
            </tr>
        
            <tr>
                <td><label for="productsLine">Products Line</label></td>
                <td><input type="text" name="productsLine" id="productsLine"><br></td>
            </tr>
        
            <tr>
                <td><label for="productsScale">Products Scale</label></td>
                <td><input type="text" name="productsScale" id="productsScale"><br></td>
            </tr>

            <tr>
                <td><label for="productsVendor">Products Vendor</label></td>
                <td><input type="text" name="productsVendor" id="productsVendor"><br></td>
            </tr>

            <tr>
                <td><label for="productsDescription">Products Description</label></td>
                <td><input type="text" name="productsDescription" id="productsDescription"><br></td>
            </tr>

            <tr>
                <td><label for="quantityInStock">Quantity In Stock</label></td>
                <td><input type="text" name="quantityInStock" id="quantityInStock"><br></td>
            </tr>   

            <tr>
                <td><label for="buyPrice">Buy Price</label></td>
                <td><input type="text" name="buyPrice" id="buyPrice"><br></td>
            </tr>  

            <tr>
                <td><label for="MSRP">MSRP</label></td>
                <td><input type="text" name="MSRP" id="MSRP"><br></td>
            </tr>
    </table>
    <div class=button>
        <?php
            if(isset($_GET['ubah'])){
        ?>
            <button name="aksi" type="submit" value="Simpan" class="biru">
                <i class="fa-regular fa-floppy-disk"></i>
                Simpan Perubahan
            </button>
        <?php
            } else {
        ?>
            <button name="aksi" type="submit" value="Tambahkan" class="biru">
                <i class="fa-regular fa-floppy-disk"></i>
                Tambahkan
            </button>
        <?php
            }
        ?>
        <a href="Products.php" type="button" class="merah">
            <i class="fa-solid fa-reply"></i>
            Kembali
        </a>
        </form>
    </div>
</body>
</html>