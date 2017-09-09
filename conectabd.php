<!-- Conexión a Bases de Datos.

<?php 

function conectarse() 
{

   $host = "localhost";
   $usuario = "root";
   $password = "";
   $BaseDatos = "estudiante";
 
   if (!($link=mysql_connect($host,$usuario,$password))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db($BaseDatos,$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 

   return $link; 
} 


?> 
