<?php

$productos = file_get_contents('assets/productos.json');

$productos= json_decode($productos,true);

//echo '<pre>';
//var_dump($productos);


$body='';

echo '<pre>';

foreach ($productos as $id => $producto ){
    $body .= "<div class='producto' ><h3>".$producto['producto']."</h3>
                    <img src='https://unsplash.it/200/200' alt=''>
                    <!--<p>".$producto['texto']."</p> -->   
              </div>";
}

//print_r($body);

echo '</pre>';

$content=<<<CONTENT
<section >
    <h2>Productos</h2>
    <div class="productos">
        $body
    </div>
</section>
CONTENT;
