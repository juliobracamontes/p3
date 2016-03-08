<html>
 <body>
<table border= "1">
   <thead>
     <tr>
       <th>Id</th>
       <th>Nombre</th>
       <th>Ap</th>
       <th>Am</th>
</tr>
</thead>
</tbody>

  <?php
    $personas= array(

    "0"=>array(
    "id"=> "0",
    "nombre"=> "Julio",
    "ap"=> "Bracamontes",
    "am"=> "Loera"
    ),

    "1"=>array(
    "id"=> "1",
    "nombre"=> "Isaac",
    "ap"=> "Bracamontes",
    "am"=> "Ramirez"
    ),

 "2"=>array(
    "id"=> "2",
    "nombre"=> "Lupita",
    "ap"=> "Ramirez",
    "am"=> "Diaz"
    ),

 "3"=>array(
    "id"=> "3",
    "nombre"=> "Agapito",
    "ap"=> "Lopez",
    "am"=> "Caste"
    ),

 "4"=>array(
    "id"=> "4",
    "nombre"=> "Torcuato",
    "ap"=> "Casimiro",
    "am"=> "Torres"
    ),

    );
?>

<?php
    Foreach ($personas as $k=>$personas){

?>
<tr>
<td><?php echo $personas["id"];?></td>
<td><?php echo $personas["nombre"];?></td>
<td><?php echo $personas["ap"];?></td>
<td><?php echo $personas["am"];?></td>
     
    
</tr>

  
<?php } ?>

     </tbody>
   </table>
</html>
