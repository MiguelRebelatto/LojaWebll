<?php
    $con=mysqli_connect("localhost","root","","test");
    $resultCarrossel = mysqli_query($con, "SELECT * FROM produtos ORDER BY id DESC LIMIT 3");    
    $i = 0;
    while($rowCarrossel = mysqli_fetch_array($resultCarrossel)):
        $i++;
        if ($i === 1){ $class = "<div class=\"carousel-item active\" style=\"width:100%;background-color: lightgrey;\">"; 
        }else{$class = "<div class=\"carousel-item\" style=\"width:100%;background-color: lightgrey;\">";}
        echo $class . "<img style=\"height: 350px;margin: auto;\" class=\"d-block img-fluid\" src=\"./imagensProdutos/" . $rowCarrossel['id'] . ".jpg\" alt=\"Third slide\"></div>";
    endwhile; 
?>
