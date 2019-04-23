<?php
$productos = file_get_contents('assets/productos.json');
$productos= json_decode($productos,true);
$body='';

if(isset($_GET['item'])){
$item=$_GET['item'];
    if(array_key_exists($item,$productos)){
        $producto=$productos[$item];
        $content=<<<CONTENT
        <section class="productos" >
        <h2>Producto $producto[producto] </h2>
                $body
        </section>
CONTENT;
    }


}else{
    foreach ($productos as $id => $producto ){
        $body .= "<div class='producto' >
                    <h3>".$producto['producto']."</h3>
                    <img src='".$producto['img']."' alt='imagen del producto'>
                        <p>".$producto['desc']."</p>
                        <a href='?s=productos&item=".$id."'> ver </a>
                  </div>";
    }

    $content=<<<CONTENT
    <section class="productos" >
        <h2>Productos</h2>
            $body
    </section>
CONTENT;
}
