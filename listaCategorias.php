<?php 
	$con=mysqli_connect("localhost","root","","test");

    $resultCat = mysqli_query($con,"SELECT * FROM categorias");
    while($rowCat = mysqli_fetch_array($resultCat))
    {
    	echo'<a href="#" class="list-group-item">'. $rowCat['nome'].'</a>' . $rowCat['id'];
    }
?>