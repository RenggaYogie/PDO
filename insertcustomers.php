<?php
    include "koneksi database.php";

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "Tambahkan"){
            $customerNumber = $_POST['customerNumber'];
            $customerName = $_POST['customerName'];
            $contactLastName = $_POST['contactLastName'];
            $contactFirstName = $_POST['contactFirstName'];
            $phone = $_POST['phone'];
            $addressLine1 = $_POST['addressLine1'];
            $addressLine2 = $_POST['addressLine2'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $postalCode = $_POST['postalCode'];
            $country = $_POST['country'];
            $salesRepEmployeeNumber = $_POST['salesRepEmployeeNumber'];
            $creditLimit = $_POST['creditLimit'];

            $query = "INSERT INTO Customers VALUES('$customerNumber', '$customerName', '$contactLastName','$contactFirstName','$phone','$addressLine1','$addressLine2','$city','$state','$postalCode','$country','$salesRepEmployeeNumber','$creditLimit')";
            $sql = mysqli_query($conn, $query);
            
            if($sql){
                echo "Data Berhasil Ditambahkan <a href='Customers.php'>[Home]</a>";
            } else {
                echo "Data Gagal";
            }
        } else if($_POST['aksi'] == "Simpan"){
            echo "edit data";
        }
    }
?>