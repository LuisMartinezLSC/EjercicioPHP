<html>
<head>
    <title>Ejercicio 5</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
    
<body>
    
    <div id="body">
            
            <ul class="nav nav-tabs">
  <li role="presentacion" class="active"><a href="index.php">Inicio</a></li>
</ul>   
        <center><h1>PROGRAMACION DE APLICACIONES WEB</h1></center>
        <center><h4 aling="center">Mostrar en pantalla cual es el mayor de tres numeros.</h4></center>
            <ul>
            <li>54</li><br>
            <li>10</li><br>
            <li>35</li><br>
        
                </ul>
        
        <br>
        <br>
        
        
    <center><?php
    $n1=54;
    $n2=10;
    $n3=35;
    
    //completa tu codigo
    // se busca la mayor
    if (($n1 > $n2) && ($n1 > $n3)) {
        echo 'El primero es la mayor';
    } elseif (($n2 > $n1) && ($n2 > $n3)) {
        echo 'El segundo es la mayor';
    } elseif (($n3 > $n1) && ($n3 > $n2)) {
        echo 'El tercero es la mayor';
    }
    
    echo '<br /><br />';
     ?></center>
            
        <br>
        <br>
        <br>
        <br>    
            <center><nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="Ejercicio4.php" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="Ejercicio1.php">1</a></li>
                <li><a href="Ejercicio2.php">2</a></li>
                <li><a href="Ejercicio3.php">3</a></li>
                <li><a href="Ejercicio4.php">4</a></li>
                <li><a href="Ejercicio5.php">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav></center>
        
        </div>
     <table align="center" style="width:100%; height:100px; "bgcolor="E3E3E3" ><!-- pie de pagina -->

		<!--pie de pagina -->
		    <tr>
			<td bgcolor="#DBDBDB">
			<font color="black">
				<center><p>
				<b> <span class=" glyphicon glyphicon-hand-right "> UNIVERSIDAD AUTONOMA DE CHIAPAS</span></b><br><br>
				<b><span class=" glyphicon glyphicon-user "> Martínez Pérez José Luis</span></b><br>
				</p></center>

			</tr>
			</td>
            </table>    
                   
            <script src="js/jquery-3.2.0.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
</body>
</html>