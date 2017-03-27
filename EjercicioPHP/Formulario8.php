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
  <li role="presentacion" class="active"><a href="Ejercicio8.php">Regresar</a></li>
</ul>   
        <center><h3>Resultado del dia correspondiente   </h3></center>
        <br>
        <br>
        <br>
        <br>    
        <br>
            
       
            <center><?php
            extract($_REQUEST); 
            switch ($dia) {
    case 1:
        echo 'El dia de la semana es: Domingo';
        break;
 
    case 2:
        echo 'El dia de la semana es: Lunes';
        break;
 
    case 3:
        echo 'El dia de la semana es: Martes';
        break;
 
    case 4:
        echo 'El dia de la semana es: Miércoles';
        break;
 
    case 5:
        echo 'El dia de la semana es: Jueves';
        break;
 
    case 6:
        echo 'El dia de la semana es: Viernes';
        break;
 
    case 7:
        echo 'El dia de la semana es: Sábado';
        break;
 
    default:
        echo 'No existe dia para este numero';
        break;
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