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
  <li role="presentacion" class="active"><a href="Ejercicio10.php">Regresar</a></li>
</ul>   
        <center><h3>Resultado</h3></center>
        <br>
     
            
       
            <center><?php
extract($_REQUEST,EXTR_SKIP);
     
    echo "La tabla de multiplicar del $tabla es: <br> ";
                echo "<br>";
            for($i=1; $i<=10; $i++)
            {
    echo("$tabla*$i=".$tabla*$i."<br>");
            }
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