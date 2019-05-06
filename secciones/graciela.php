<?php


$alt=rand(200,900);
$anc=rand(200,900);


$content=<<<CONTENT
<section class='hero' >
    <h2>Gracias, $_GET[usr]</h2>
    <p>Gracias por contactarte, vamos a tener en cuenta tu comentario/consulta</p>
    <p>Te dejo una linda imagne de Bill Murray</p>
    <img class="bill" src="http://fillmurray.com/$alt/$anc" alt=" imagen de bill murray">
</section>
CONTENT;
