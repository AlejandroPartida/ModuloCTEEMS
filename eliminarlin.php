<?php
		
		require "conexion.php";

		extract($_GET);

		$eliminar = mysqli_query($conn, "DELETE FROM lin WHERE id_lineamiento = 'xd'");


		if ($eliminar) {
			echo "<script>alert('Se ha eliminado el registro'); location.href=''; </script>";
		}else{
			echo "<script>alert('Ocurrió un error, inténtelo de nuevo más tarde'); location.href=''; </script>";
		}




?>