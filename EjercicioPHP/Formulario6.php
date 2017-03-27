<html>

    <head>
        <title> Resultado edad</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/menu.css">

    </head>

    <body>
        <div id="body">
            
            <ul class="nav nav-tabs">
  <li role="presentacion" class="active"><a href="Ejercicio6.php">Regresar</a></li>
</ul>   
        <center><h1>Resultado si es mayor o menor de edad</h1></center>
        <br>
        <br>
        <br>
        <br>    
        <br>
            
       
            <center><?php echo $_REQUEST['nombre'];
                echo "<br>";
                if ($_REQUEST['edad']>=18)
                {
                echo "Eres mayor de edad.";
                }
                else
                {
                echo "No eres mayor de edad";
                }
                echo"<br>";
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