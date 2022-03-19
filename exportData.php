<?php
    $connection = mysqli_connect('localhost','root','','upp');

        $sqlCatSel = "SELECT * from register";
        $selectCatQuery = mysqli_query($connection,$sqlCatSel);
        
        
   if(mysqli_num_rows($selectCatQuery)>0){
       $delimiter =',';
       $fileName = 'data'.time().'.csv';
       $f = fopen('php://memory','w');
       $fields = array('name','cognomi','dob','email','cellulare','provincia','regioni','giorini','privacy');
       fputcsv($f,$fields,$delimiter);

       while($row=mysqli_fetch_assoc($selectCatQuery)){

           $linData = array($row['name'],$row['cognomi'],$row['dob'],$row['email'],$row['cellulare'],$row['provincia'],$row['regioni'],$row['giorini'],$row['privacy']);
            fputcsv($f,$linData,$delimiter);

        }

        fseek($f,0);

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="'.$fileName.'"');

        fpassthru($f);





    }

    exit;



?>

<td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['cognomi'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['cellulare'] ?></td>
                    <td><?php echo $row['provincia'] ?></td>
                    <td><?php echo $row['regioni'] ?></td>
                    <td><?php echo $row['giorini'] ?></td>
                    <td><?php echo $row['privacy'] ?></td>