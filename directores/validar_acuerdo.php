<?php if (empty($_POST['acuerdo[]'])&&empty($_POST['minuta'])&&empty($_POST['foto[]'])) {
 echo " no hola" ;
     

      

     
 
}else
{

	require("connection.php");
	 if(!$conn)
              {
                echo "error";
              }
              else
              {
              	$id=$_POST['minuta'];
              	 

    
     
              	$cantidad=$_POST['acuerdo'];
              		$nombrefoto=$_FILES['foto'] ['name'];
              			$ruta=$_FILES['foto'] ['tmp_name'];
         $h=1;
					  for ($i=0; $i <count($cantidad);$i++) 
					  {
					   	$acuerdos[$i]=$cantidad[$i];
					   	$revision[$i]=$_POST['revision'.$h];
					   	
					   	$h++;
					  }
					
					  for ($i=0; $i <count($cantidad);$i++) 
					  {  
					  
					   
					  	date_default_timezone_set('America/Monterrey');
      $fecha2=date('Y-m-d-g-i-s');
       
      $destino[$i] = "proyectos/nombre/minuta/" . "$fecha2.jpg"; 
       move_uploaded_file($ruta[$i],$destino[$i]);
					  
					   $query2=mysqli_query($conn,"INSERT INTO acuerdo VALUES(default,'".$acuerdos[$i]."','".$revision[$i]."','".$destino[$i]."','$id');");
					   if(!$query2)
					   {
					   	echo "error";
					   }else
					   {
					   	
					   	?>

				        <script>
				        window.alert("Acuerdos registrados correctamente");
				        location.href="minuta.php";
				        </script>
				       

					   	<?php
					   
					   }
					   	  	
					  }
                  
      			}
      			

}

              