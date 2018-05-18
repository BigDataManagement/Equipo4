#   Objetivos Cumplidos

*   Se completó la parte del reto que nos ponía en la dificultad de identificar la estructura de un dataset de un gran tamaño para realizarle una limpieza y dejarlo en condiciones para ser procesado, para esto se realizó un script en Python que soluciona el problema específico presentado por el dataset “combined_data_4.txt” el cual era que el identificador de usuario estaba pegado con la fecha del usuario anterior.

![LEC](https://preview.ibb.co/k2u8d8/Captura.png)

*   Se completo la parte del reto que consiste en estructurar el dataset en formato JSON para realizar la carga a la base de datos Mongo, para esto se realizó un script en PHP que toma los datos del dataset anteriormente limpiado y lo crea con la estructura en formato Json.

![LEC](https://preview.ibb.co/esa6y8/photo5068987838476953591.jpg)

*   Se completo la parte del reto que consiste en subir los datos anteriormente limpiados y estructurados a la base de datos no relacional MongoDB, en este ocascion se nos presentaron algunos problemas que dificultaron mucho el desarrollo del proyeccto

![LEC](https://preview.ibb.co/gfOtd8/photo5068987838476953592.jpg)


#   Estrategia Adoptada

Nuestra estrategia para afrontar este reto principalmente consiste en el proceso de los datasets los cuales se deben limpiar y estructurar para luego ser cargados en la base de datos, por lo tanto nuestra estrategia se puede resumir en tres simples pasos:
* Limpiar
* Estructurar
* Cargar

#   Documentación de Algoritmos

*   Limpieza Python
    Este algoritmo toma el contenido del dataset y lo “limpia” eliminando el error presentado en los campos de  “user_id” y “Date” mencionado anteriormente. 
*   Estructuración PHP
    Este algoritmo toma el contenido del dataset ya limpiado y lo “Estructura” en formato Json.


#   Workflow

![LEC](https://image.ibb.co/dBcBBc/Captura.png)


#   Problemas Afrontados y soluciones

*   El primer problema con el que nos encontramos fue el identificar la estructura del dataset proporcionado y el darnos cuenta del error que este presentaba. La solución que adoptamos para este problema primeramente fue el realizar un análisis del dataset y de los datos que este contenía para identificar los errores, una vez realizado esto pudimos desarrollar un pequeño script que limpiara estos errores.

*   Un problema subsecuente surgió al momento de subir los datos a la base de datos Mongo, puesto que para realizar una buena subida mediante conexión debemos estructurar el contenido del dataset en formato Json. Para solucionar este contratiempo primeramente comenzamos por investigar la estructuración del formato JSON caso siguiente desarrollamos un script que permitiera procesar todo el contenido del dataset y transformarlo en el formato requerido.

*   Uno de los problemas de mayor dificultad que afrontamos fue que Mongo no permite subir archivos demasiado grandes de una vez por lo cual era necesario partir el documento y varios más pequeños para después subirlos o al menos esta era nuestra estrategia en un principio, pero gracias a la colaboración y la ayuda de los compañeros descubrimos un workbench para mongo(Studio 3T) que permite realizar la carga de grandes datasets a Mongo sin necesidad de particionarlos.

*   Otro problema o quizá reto, es el trabajar con mongoDB ya que ninguno de nosotros había trabajado con este tipo de base de datos, el cual instalarlo, entender la sintaxis, crear los documentos y sus collections fue nuevo y lo pudimos cumplir con las expectativas que teníamos.

*   La utilización de Workbench de mongo ya que existe dos tipos de programas el cual solo empezamos a trabajar con RobotMongo, según lo aprendido, ese tipo de programa es mas para la visualización de los datos, en cambio el Studio 3T trata más del manejo de los datos.

