# Trabajo-Integrador
PASOS QUE SE FUERON REALIZANDO PARA CONCLUIR EL TRABAJO FINAL 

- se ingresó el proyecto en la carpeta htdoc de xampp (esto es para que la BD reconozca el proyecto), todos los proyectos relacionados a las pag web lo va a mostrar el servidor local.

- en el proyecto se crea la carpeta "con_bd.php" // ésta hace que se cree una coneccion entre el vsc y la BD 

- se modifica el formulario original en "tp.integrador.php", donde en este caso, se cambian los div por input, junto con un botón input que enviará los datos a un archivo "registrador.php"
 
- en el "registrador.php" se crean dos if, el primero verifica que el botón fue presionado y el segundo que los campos de inut sean >= 1, de darse estas condiciones se reciben los parámetros de los input y se guardan en sus respectivas variables. 
- se crea la consulta sql para guardar registros: "INSERT INTO oradores(nombre, apellido,telefono,mail,titulo,tema) que son las variables, y los valores que se van a guardar.
 
 $resultado = mysqli_query($conex,$consulta); //sin conexión y consulta dan "ok" hace una cosa si no da error. 

-se crea la lista de oradores a la cual se accede desde "oradores" en el encabezado de la BD. Se crea una conexión con sql 
"Lista de Oradores.php": luego de la conexión se hace la consulta
// Consulta SQL 
$sql = "SELECT * FROM oradores";

 // Mostrar los datos en una tabla dinámica con estilo, si desde la página principal se presiona el botón Listado de Oradores te redirige a la tabla donde se puede ver la tabla con los registros. 
  echo "<h2><center>Listado de ORADORES suscriptos:</center></h2>";
  echo "<table border='1' style='border-collapse: collapse; width: 100%; background-color: #B5B2B2;'>";




 

