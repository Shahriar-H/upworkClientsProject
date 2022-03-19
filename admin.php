<?php
    $connection = mysqli_connect('localhost','root','','upp');

        $sqlCatSel = "SELECT * from register";
        $selectCatQuery = mysqli_query($connection,$sqlCatSel);
        
   if($connection){
       echo '';
   }else{
       echo mysqli_connect_error();
   }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        .tablb{
            display: flex;
            justify-content: center;
        }
        table{
            border-collapse: collapse;
            width: 70%;

        }
        th{
            background-color: rgb(3, 114, 179);
            color: white;
        }
        .csvdiv{
            display: flex;
            justify-content: center;
        }
        .csvD{
            background-color: rgb(3, 114, 179);
            color: white;
            padding:10px;
            text-align: center;
        }
        th, td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <h3 style="text-align: center;">The page will be restdicted</h3>
    <div class="csvdiv">
        <a  style="text-align: center;" class="csvD" href="./exportData.php">CSV Download</a>
    </div>
    <hr><br><br>
    <div class="tablb">
    <table border="1">
        
        <tbody>
        <tr>
                <th>Name</th>
                <th>Cognome</th>
                <th>Dob</th>
                <th>Email</th>
                <th>cellulare</th>
                <th>provincia</th>
                <th>Regione</th>
                <th>Giorni</th>
                <th>Privacy</th>
            </tr>
            
            <?php
                while($row = mysqli_fetch_assoc($selectCatQuery)){
            ?>
                <tr>        
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['cognomi'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['cellulare'] ?></td>
                    <td><?php echo $row['provincia'] ?></td>
                    <td><?php echo $row['regioni'] ?></td>
                    <td><?php echo $row['giorini'] ?></td>
                    <td><?php echo $row['privacy'] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    </div>
</body>
</html>