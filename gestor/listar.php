
<br>
<?php 
//Creamos Nuestra Función
function lista_archivos($carpeta){ //La función recibira como parametro un carpeta
if (is_dir($carpeta)) { //Comprovamos que sea un carpeta Valido
if ($dir = opendir($carpeta)) {//Abrimos el carpeta
echo '<ul>';
 while (($archivo = readdir($dir)) !== false){ //Comenzamos a leer archivo por archivo
if ($archivo != '.' && $archivo != '..'){ 
$nuevaRuta = $carpeta.$archivo.'/';
echo '<li>'; //Abrimos un elemento de lista 
if (is_dir($nuevaRuta)) { //Si la ruta que creamos es un carpeta entonces:
echo '<b>'.$nuevaRuta.'</b>'; //Imprimimos la ruta completa resaltandola en negrita
lista_archivos($nuevaRuta);//Volvemos a llamar a este metodo para que explore ese carpeta.
} else { //si no es un carpeta:
echo 'Archivo: '.$archivo; //simplemente imprimimos el nombre del archivo actual
}
 '</li>'; //Cerramos el item actual y se inicia la llamada al siguiente archivo
}
}//finaliza 
echo '</ul>';//Se cierra la lista
closedir($dir);//Se cierra el archivo
}
}else{//Finaliza el If de la linea 12, si no es un carpeta valido, muestra el siguiente mensaje
echo 'No Existe la carpeta';
}				
}//Fin de la Función	 
//Llamamos a la función
lista_archivos("./subidas/");
?>
