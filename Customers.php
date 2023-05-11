<?php
    include 'koneksi database.php';

    $query1 = "SELECT * FROM customers;";
    $sql1 = mysqli_query($conn, $query1);

    $no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Customers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Customers</title>
</head>
<body>
    <h1>Data Customers</h1>
    <a href="inputcustomers.php" type="button" class="tambah">
        <i class="fa-solid fa-plus"></i>
        Tambah Data
    </a>
    <table border="2">
        <thead>
            <tr>
                <th>Customer Number</th>
                <th>Customer Name</th>
                <th>Contact Last Name</th>
                <th>Contact First Name</th>
                <th>Phone</th>
                <th>Address Line 1</th>
                <th>Address Line 2</th>
                <th>City</th>
                <th>State</th>
                <th>Postal Code</th>
                <th>Country</th>
                <th>Sales Rep Employee Number</th>
                <th>Credit Limit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($result1 = mysqli_fetch_assoc($sql1)){
        ?>
            <tr>
                <td>
                    <?php echo $result1["customerNumber"]; ?>
                </td>
                <td>
                    <?php echo $result1["customerName"]; ?>
                </td>
                <td>
                    <?php echo $result1["contactLastName"]; ?>
                </td>
                <td>
                    <?php echo $result1["contactFirstName"]; ?>
                </td>
                <td>
                    <?php echo $result1["phone"]; ?>
                </td>
                <td>
                    <?php echo $result1["addressLine1"]; ?>
                </td>
                <td>
                    <?php echo $result1["addressLine2"]; ?>
                </td>
                <td>
                    <?php echo $result1["city"]; ?>
                </td>
                <td>
                    <?php echo $result1["state"]; ?>
                </td>
                <td>
                    <?php echo $result1["postalCode"]; ?>
                </td>
                <td>
                    <?php echo $result1["country"]; ?>
                </td>
                <td>
                    <?php echo $result1["salesRepEmployeeNumber"]; ?>
                </td>
                <td>
                    <?php echo $result1["creditLimit"]; ?>
                </td>
                <td>
                    <div class=logo>
                        <a href="inputcustomers.php?ubah=<?php echo $no++?>" type="button" class="button">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <a href="updatecustomers.php?ubah=<?php echo $no++?>" type="button" class="button">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <a href="customers.php" type="button "class="button">
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