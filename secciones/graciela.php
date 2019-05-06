<?php


$alt=rand(200,900);


$content=<<<CONTENT
<section class='hero graciela' >
    <h2>Gracias, $_GET[usr].</h2>
    <p>Gracias por contactarte, vamos a tener en cuenta tu comentario/consulta</p>
    <p>Te dejo una linda imagne de un gatito</p>
    <img class="bill" src="http://placekitten.com/$alt/$alt" alt=" imagen de -bill murray- em digo, de un gato">
</section>
CONTENT;
