1.1)
 ¿ Qué es CSS y para qué se usa?
Las hojas de estilo es una tecnología que nos permite controlar la apariencia de una
página web. En un principio, los sitios web se concentraban más en su contenido que
en su presentación.
HTML no pone atención en la apariencia del documento, sino en la estructura.
CSS describe como los elementos dispuestos en la página son presentados al usuario.
CSS es un gran avance que complementa el HTML y la Web en general.
Con CSS podemos especificar estilos como el tamaño, fuentes, color, espaciado entre
textos y recuadros así como el lugar donde disponer texto e imágenes en la página.

1.2)
CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?
Podemos asociar las reglas de estilo a las marcas HTML de tres maneras:
• directamente a la marca,
• en el head de la página
• o agrupar las reglas de estilo en un archivo independiente con extensión *.css

    La regla tiene dos partes: un selector y la
declaración. A su vez la declaración está compuesta por una propiedad y el valor que
se le asigne.  El selector funciona como enlace entre el documento y el estilo, especificando los
elementos que se van a ver afectados por esa declaración.
La declaración es la parte de la regla que establece cuál será el efecto.

1.3) 
¿ Cuáles son las tres formas de dar estilo a un documento?
Las tres formás mas conocidas de dar estilo en un documento son las siguientes:
1-utizando una hoja de estilo externa que estará vinculada a un documento utilizando la etiqueta <link>, el cual debe ir situado en la sección <head>

2-utilizando el elemento <style></style>, en el interior del documento al que se le quiere dar estilo, y que generalmente se situaría en la sección <head>.
De esta forma, los estilos serán reconocidos antes que la página se cargue por completo.

3-utilizando estilos  directamente sobre aquellos elementos que lo permiten a través del atributo style="....". Dentro del <body>

1.4)
¿ Cuáles son los distintos tipos de selectores más utilizados?
Ejemplifique cada uno.
Los selectores más usados en la cotidianidad son la clase misma del elemento, el nombre del mismo , o el id.
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .titulos{
            background-color: tomato;
        }

        #titulo1{
            border: 1px solid black;
        }
        h1{
            font-size: 2em;
            color: #afafaf;
        }
    </style>
</head>
<body>
    <h1 class="titulos" id="titulo1">Holaaa</h1>
    <br>
    <h1> hola como te va</h1>

</body>
</html> -->

1.5) 
¿ Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?
Una pseudo-clase en CSS es una palabra clave que se añade a un selector y especifica un estado especial del elemento seleccionado. Las pseudo-clases permiten aplicar estilos a un elemento no solo en base a su ubicación en el árbol del documento, sino también en función de su estado dinámico o de una característica específica.
    Las más utilizadas aplicadas a vínculos:
1 :link Se utiliza para seleccionar un enlace que aún no ha sido visitado.
2 :visited Se utiliza para seleccionar un enlace que ya ha sido visitado por el usuario.
3 :hover Se aplica cuando el usuario pasa el cursor sobre el enlace.
4 :active: Se aplica al enlace en el momento en que se hace clic sobre él.
5 :focus: Se aplica cuando el enlace recibe el foco, como cuando se navega usando el teclado.

1.6)
¿ Qué es la herencia?
Se denomina herencia a cuando se le aplican las mismas propiedades de estilo de un elemento padre a sus hijos. No todas las propiedades se heredan.

1.7)
¿ En qué consiste el proceso denominado cascada?
Consiste en aplicar cambios de estilo a un elemento por medio de distintas formas, por ejemplo su clase y su id. 

2)
 <style>
      p#normal { /*Aplica estilo a todos los los párrafos cuyo id es "normal"*/
        font-family: arial,helvetica; /* Cambia la familia/tipografìa de la fuente */ 
        font-size: 11px; /* Cambia el tamaño de la fuente */
        font-weight: bold; /* Cambia el estilo de la fuente */
        }
        *#destacado { /*Aplica estilo a todos los elementos cuyo id es "destacado"*/
        border-style: solid; /* Cambia el estilo del borde */
        border-color: blue; /* Cambia el color del borde */
        border-width: 2px;  /* Cambia el ancho del borde */
        }
        #distinto { /* Aplico estilo a el elemento cuyo id es "distinto"*/
        background-color: #9EC7EB;   /* Cambia el color de fondo */
        color: red; /* Cambia el color de la letra */
        }
    </style>


3)
 <style>
      p.quitar { /* Aplica estilo a los parrafos cuya clase es "quitar" */
        color: red; /* Cambia el color de la letra */
        }
        *.desarrollo { /* Aplica estilo a todos los elementos cuya clase es "desarrollo" */
        font-size: 8px; /* Cambia el tamaño de la fuente */
        }
        .importante { /* Aplica estilo a todos los elementos cuya clase es "importante"  */
        font-size: 20px; /* Cambia el tamaño de la fuente */
        }
    </style>
    <h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1> <!-- No se le aplican estilos a esta linea debido a que pertenece
    a la etiqueta h1. Para que se le apliquen los estilos de la clase "quitar" deberìa estar dentro de un pàrrafo -->

    <p class="quitar importante">Se pueden aplicar varias clases a la vez</p> <!-- Se le aplican los estilos de las dos clases a la vez
    , la clase "quitar" y la clase "importante". Dandole prioridad al màs especìfico-->

4)a-
    <style>
         * {color:green; } /* Le aplica color verde a todos los elementos del documento */
        a:link {color:gray }/* Le cambia el color inicial a link */
        a:visited{color:blue } /* Le cambia el color al link una vez que ya fue utilizado */
        a:hover {color:fuchsia } /* Le cambia el color al link cuando le pasamos el cursos por arriba */
        a:active {color:red } /* Le cambia el color al link cuando lo estamos pulsando con uno de los botones del mouse */
        p {font-family: arial,helvetica;font-size: 10px;color:black; } /* Le cambia a todos los parrafos la fuente de la familia, el tamaño y el color */
        .contenido{font-size: 14px;font-weight: bold; } /* Le cambia  a todos los elementos cuya clase es "contenido", el tamaño de la fuente y el estilo de la fuente*/
        
    </style>
     <p class="contenido" style="font-weight: normal;"> <!-- acá se le aplican los estilos de la clase contenido y a su vez se agrega un estilo in-line en dónde se cambia el estilo de tipografía -->
      <td><a href="http://www.google.com.ar">con un
        enlace</a></td> <!--acá no se aplica el estilo declarado con * porque los estilos a:** son más específicos  -->

4)b-
    <style>
            * {color:green; } /* Le aplica color verde a todos los elementos del documento */
            a:link {color:gray }/* Le cambia el color inicial a link */
            a:visited{color:blue } /* Le cambia el color al link una vez que ya fue utilizado */
            a:hover {color:fuchsia } /* Le cambia el color al link cuando le pasamos el cursos por arriba */
            a:active {color:red } /* Le cambia el color al link cuando lo estamos pulsando con uno de los botones del mouse */
            p {font-family: arial,helvetica;font-size: 10px;color:black; } /* Le cambia a todos los parrafos la fuente de la familia, el tamaño y el color */
            .contenido{font-size: 14px;font-weight: bold; } /* Le cambia  a todos los elementos cuya clase es "contenido", el tamaño de la fuente y el estilo de la fuente*/
            
        </style>

        <body class="contenido"> <!-- Le aplica a todo dentro del body el estilo de la clase "contenido", basicamente todo está en negrita y con el tamaño
        de fuente de 14px-->
        <p> Este es un texto................</p> <!-- Aquí no se le aplica el green ,ni el estilo de la clase "contenido" ,pues los estilos de <p> son más específicos que los del * y "contenido"-->
        <table>
        <tr>
        <td>Y esta es una tabla.......</td>  <!-- Si se aplica el color verde, ya que no está siendo modificado por un estilo más específico,como en los otros casos-->
        </tr>
        <tr>
        <td><a href="http://www.google.com.ar">con
        un enlace</a></td>
        </tr>
        </table>
    </body>
    

       






