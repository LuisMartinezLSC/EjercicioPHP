<html>

    <head>
        <title> Resultado</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/menu.css">

    </head>

    <body>
        <div id="body">
            
            <ul class="nav nav-tabs">
  <li role="presentacion" class="active"><a href="Ejercicio7.php">Regresar</a></li>
</ul>   
        <center><h3>Resultado de la distancia que recorre un proyectic</h3></center>
        <br>
        <br>
        <br>
        <br>    
        <br>
            
       
            <center><?php 
                extract($_REQUEST); 
                echo "<br>";
                $distancia= $velocidad* $tiempo;
                echo "La distancia optenida es: $distancia m";
            ?></center>
            
        <br>
        <br>
        <br>
        <br>    
       
        
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