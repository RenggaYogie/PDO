<?php
    include "koneksi database.php";

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "Tambahkan"){
            $productsCode = $_POST['productsCode'];
            $productsName = $_POST['productsName'];
            $productsLine = $_POST['productsLine'];
            $productsScale = $_POST['productsScale'];
            $productsVendor = $_POST['productsVendor'];
            $productsDescription = $_POST['productsDescription'];
            $quantityInStock = $_POST['quantityInStock'];
            $buyPrice = $_POST['buyPrice'];
            $MSRP = $_POST['MSRP'];

            $query = "INSERT INTO Products VALUES('$productsCode', '$productsName', '$productsLine','$productsScale','$productsVendor','$productsDescription','$quantityInStock','$buyPrice','$MSRP')";
            $sql = mysqli_query($conn, $query);
            
            if($sql){
                echo "Data Berhasil Ditambahkan <a href='Products.php'>[Home]</a>";
            } else {
                echo "Data Gagal";
            }
        } else if($_POST['aksi'] == "Simpan"){
            echo "edit data";
        }
    }
?>