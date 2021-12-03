# Respuestas de la parte práctica del examen de DWES 1a evaluación
Descripción general de las respuestas de la parte prática del examen.

## Pregunta 4
Se crean la clase padre y la clase hija. Instanciando la clase hija se comprueba que el acceso a una variable que existe o que es privada, activa los métodos mágicos en función de si se asigna valor (__set) o busca obtener cualquiera de las variables mencionadas (__get)

## Pregunta 5
Se ha creado un formulario con los controles especificados en el archivo "respuesta-pregunta5.php". Mediante el método POST, pasa la información al archivo "result.php" donde está toda la lógica:
* Variables para alamacenar información de los archivos (número subidos, nombre y tamaño en bytes) y directorio de subida (/uploads).
* Si los archivos enviados tienen un tamaño mayor a 0, se suben y modifican variables además de salir un mensaje de que input ha subido el archivo
* Se crea un "div" que resumirá los datos recibidos además de especificar, en el caso de que se añadieran archivos, el nombre y su tamaño.