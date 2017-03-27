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
  <li role="presentacion" class="active"><a href="Ejercicio9.php">Regresar</a></li>
</ul>   
        <center><h3>Resultado Importe neto</h3></center>
        <br>
        <br>
        <br>
        <br>    
        <br>
            
       
            <center><?php
            extract($_REQUEST,EXTR_SKIP);
    
            if($neto>=1500)
            {
                $resultado= $neto*0.16;
            }elseif($neto<1500){
                $resultado= $neto*0.1;
            }
                echo "El importe neto es: $resultado";
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