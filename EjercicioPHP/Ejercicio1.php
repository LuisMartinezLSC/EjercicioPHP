<html>

    <head>
        <title> Ejercicio 1</title>
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
        <center><h4 aling="center"> Hacer un programa que sume, reste, multiplique y divida dos variables.</h4></center>
            <br>
            <br>
            <br>
    <center><?php 
        $numero1=10;
        $numero2=12;
        //sumar
        $suma=$numero1 + $numero2;
        echo "$numero1 + $numero2"."</br>";
        echo "suma= ".$suma."</br>";
        //restar
        $suma=$numero1 - $numero2;
        echo "$numero1 - $numero2"."</br>";
        echo "resta= ".$suma."</br>";
        //multiplicar
            $suma=$numero1 * $numero2;
        echo "$numero1 * $numero2"."</br>";
        echo "Multiplicar= ".$suma."</br>";
        //dividir
            $suma=$numero1 / $numero2;
        echo "$numero1 / $numero2"."</br>";
        echo "Dividir= ".$suma."</br>";
        
        
        
        ?></center>
            
        <br>
        <br>
        <br>
        <br>    
            <center><nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="index.php" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="Ejercicio1.php">1</a></li>
                <li><a href="Ejercicio2.php">2</a></li>
                <li><a href="Ejercicio3.php">3</a></li>
                <li><a href="Ejercicio4.php">4</a></li>
                <li><a href="Ejercicio5.php">5</a></li>
                <li>
                  <a href="Ejercicio2.php" aria-label="Next">
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