<?php
    $connection = mysqli_connect('localhost','root','','upp');

    

    if(isset($_GET['subcat'])){
        $output='';
        $d = $_GET['subcat'];
        $sqlCatSel = "SELECT * from region WHERE `category`='$d'";
        $selectCatQuery = mysqli_query($connection,$sqlCatSel);
        while($row = mysqli_fetch_assoc($selectCatQuery)){
            $output .='<option value="'.$row["subCategoy"].'">'.$row["subCategoy"].'</option>';
            
        }
        echo $output;
    }




?>