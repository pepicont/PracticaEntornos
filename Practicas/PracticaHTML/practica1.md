<!-- 1. HTML es un lenguaje de marcado para la elaboración de páginas web. Es un estándar que sirve de referencia del software que conecta con la
elaboración de páginas web en sus diferentes versiones. Este fue creado y popularizado alrededor de 1990, y durante sus primeros 5 pasó por 
una seria de revisiones. Sus versiones fueron: HTML 1.0, HTML 2.0, HTML 3.0, HTML 3.2, HTML 4.01, HTML 5.0, siendo esta última la más reciente.

2. El W3C recomienda que los agentes de usuario y los autores (y en particular las herramientas de creación) produzcan documentos HTML 4.01 en vez 
de documentos HTML 4.0. Además, recomienda que los autores produzcan documentos HTML 4 en vez de documentos HTML 3.2. Por razones de compatibilidad 
con versiones anteriores, el W3C también recomienda que las herramientas que interpreten HTML 4 sigan dando soporte a HTML 3.2 y a HTML 2.0. 
                    
3. Desaprobado: Un elemento o atributo desaprobado es aquel que ha quedado anticuado por la presencia de estructuras nuevas. Los elementos desaprobados 
pueden declararse obsoletos en el futuro.

Obsoleto: Un elemento o atributo obsoleto es aquél para el cual no hay garantía de soporte por parte de un agente de usuario. Los elementos obsoletos 
han dejado de estar definidos en la especificación, pero se enumeran por motivos históricos en la sección de cambios del manual.

4. DTD = Document Type Declaration. Existen únicamente la declaración transitoria y estricta en HTML 4.01.

5. Metadatos: Los metadatos le permiten al programador, describir las características de la página web y ayudan a los navegadores web a entenderlas. 
Es decir, permite especificar metadatos legibles por máquina sobre documentos HTML y otros recursos accesibles por la red. El HTML permite a 
los autores especificar metadatos -- información sobre un documento más que contenido del propio documento -- de diferentes de maneras. Por ejemplo, para 
especificar el autor: <META name="Author" content="Dave Raggett">.


2.a. Este comentario puede ser colocado en cualquier parte del documento, preferentemente en una parte que sea legible al principio de la página.
Ayuda a mantener el orden al programar, indicando cuando fué revisado el documento, pero no es obligatorio.

2.b. Los tags div van dentro del body y sirven para organizar el código en "bloques" o "contenedores", son obligatorios para luego poder trabajar
correctamente con los estilos. El atributo id permite identificar los distintos divs, dandole un "nombre" a cada uno.

2.c. Los tags img se encuentran dentro del body y se utilizan para adjuntar una imágen en el documento. El atributo alt es donde debemos colocar el
link de nuestra imágen. El atributo alt permite al navegador entender de que trata la imagen, y también se utiliza por las herramientas de ayuda a 
personas con capacidades distintas, como personas ciegas. Las ids ya fueron explicadas. Name es utilizado para especificar un nombre de un metadato. 
Width y height sirven para darle un tamaño a la imágen. Longdesc nos permite agregar un link con una descripción más larga y detallada que el atributo
alt.

2.d. El tag meta va en el head. El atributo name ya fué explicado. Lang ayuda a determinar el lenguaje. Content es la lista de las keywords. Http-equiv 
se utiliza para darle una fecha de expiración al documento, al igual que content; donde debemos poner la fecha y hora exacta en cuando expirará.

2.e El tag a permite adjuntar un link. Href es donde debemos adjuntar dicho link. Type nos permite especificar el tipo de documento. Hreflang indica 
el lenguaje. El atributo charset es donde se ingresa la codificación de carácteres que utiliza. Rel ayuda a mejorar la accesibilidad, estableciendo una 
relación entre nuestra página y el link.

2.f El tag table se utiliza en el body para crear una tabla. El atributo width se utiliza para determinar el ancho de la tabla. El atributo summary 
se utiliza para dar un breve resumen de lo que se trata la tabla, es util para la accesibilidad. El tag caption contiene el título de la tabla y el 
atributo align determina la alinación, en este caso arriba. El tag tr se utiliza dentro de la etiqueta table para establecer una fila. El tag th se 
utiliza dentro de los tag tr para establecer los "headers" o "encabezados" de la tabla . El atributo scope en esta etiqueta se utiliza para indicar 
a que celdas se aplica el encabezado. Td indica una celda de la tabla. el tag td se utiliza dentro del tag tr para especificar las celdas de contenido 
de la tabla.


3.a.  --> 
<!-- <a href="http://www.google.com.ar">Click aquí para ir a Google</a> ------------------------------ Se abre Google en la misma pestaña
<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a> -------------- Se abre Google en una nueva pestaña
<a href="http://www.google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help"> --- Al no tener contenido ni etiqueta de cierre, no podemos darle click.
<a href="#">Click aquí para ir a Google</a> ----------------------------------------------------- Permite darle click, pero no tiene ninguna dirección, por lo cuál no hace nada.
<a href="#arriba">Click aquí para volver arriba</a> --------------------------------------------- Es un ancla, nos permite movernos dentro de un mismo documento.
<a name="arriba" id="arriba"></a> --------------------------------------------------------------- No tiene contenido, ni un link de rediccionamiento, no puede ser utilizado.


3.b. 
<p><img src="im1.jpg" alt="imagen1" /><a href="http://www.google.com.ar">Click aquí</a></p> ----- Al darle click al texto, nos lleva a google en una nueva pestaña.
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> Click aquí</p> ---- No nos lleva a ningún lado.
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" />Click aquí</a></p> ----- Al darle click al texto o imagen, nos lleva a Google en una nueva pestaña.
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> <a href="http://www.google.com.ar">Click aquí</a></p> -- La imagen y el link puede tener distintos links, en este caso redireccionan al mismo sitio. -->


<!-- 3.c. La diferencia es que en la primer tabla se utiliza th para los titulos de la tabla, lo cuál hace que la letra sea negrita; en la segunda tabla utiliza
td, por lo cuál debe aplicar strong para lograr el mismo efecto y el align center para asegurarse que quede centrado.


3.e. La diferencia está en que la primera tabla tiene 2 filas reales y el título está dentro del tag caption. Está bien implementado mientras que la 
segunda tabla tiene 3 filas pero la primera ocupa las 3 columnas con un div con texto centrado. Dando a parecer que es el título. Visualmente son las dos 
iguales, nada más que la primera tiene 2 filas "reales" mientras que la otra tiene 3. -->


<!-- 3.f. La diferencia es que colspan extiende una celda a través de múltiples columnas en una fila. y que rowspan extiende una celda a través de múltiples 
filas en una columna. -->


<!-- 3.g. La diferencia entre estas tablas es que la primera tiene padding entre las celdas , es decir que hay un espacio entre las celdas en si 
y el borde externo que delimita la tabla. Mientras que la segunda tabla no tiene padding. La otra diferencia es que la primera tabla tiene 3 filas 
y 3 columnas "reales", mientras que la segunda tiene 3 filas y 2 columnas "reales". Aunque visualmente sean iguales. -->


<!-- 3.h. Estos formularios tienen distintas acciones: el primero manda los datos a un archivo php, el segundo no hace nada, y el tercero envía los datos a 
una dirección de mail. Además, utilizan distintos metodos para el manejo de la información: post para información sensible y get para información 
general que puede ser mostrada en la url. El primero y tercero cuentan con fieldset, el cuál enmarca el formulario, es puramente estético, mientras que 
el segundo no esta enmarcado, simplemente tiene un título. -->


<!-- 3.i. En el primer caso, el boton cuenta con una imágen y texto en negrita, mientras que en el segundo es un input de tipo botón. -->


<!-- 3.j. En el primer caso, solo podemos seleccionar una opción debido a que tienen el mismo name, mientras que en el segundo caso podemos seleccionar
ambas a la vez, ya que cuentan con distinto name. -->


<!-- 3.k. La diferencia está en el atributo multiple, este le da a las opciones una scrollbar, mientras que en el primer caso se despliega un menu al darle 
click. -->