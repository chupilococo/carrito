<?php
$productos = file_get_contents('assets/productos.json');
$productos= json_decode($productos,true);
$body='';

if(isset($_GET['item'])){
$item=$_GET['item'];
    if(array_key_exists($item,$productos)){
        $producto=$productos[$item];

        $body.="<div class='producto-view'>
                    <div class='producto-view-imgs'>
                        <img src='$producto[img1]' alt='Imagen del producto'/>
                        <img src='$producto[img2]' alt='Imagen del producto'/>
                        <img src='$producto[img3]' alt='Imagen del producto'/>
                    </div>
                    <div class='producto-view-info'>
                        <p class='producto-view-texto'>$producto[texto]</p>
                        <p class='producto-view-precio'>Precio: <span>$producto[precio]</span> <i class='fas fa-dollar-sign'></i> </p>
                    </div>
                </div>";




        $content=<<<CONTENT
        <section class="productos" >
        <h2>$producto[producto] </h2>
                $body
        </section>
CONTENT;
    }else{
        header("location:./?s=404");
    }


}else{
    foreach ($productos as $id => $producto ){
        $body .= "<div class='producto' >
                    <h3>".$producto['producto']."</h3>
                    <img src='".$producto['img2']."' alt='imagen del producto'>
                        <p>".$producto['desc']."</p>
                        <a class='btn-ver' href='?s=productos&item=".$id."'> ver </a>
                  </div>";
    }

    $content=<<<CONTENT
    <section class="productos" >
        <h2>Productos</h2>
            $body
    </section>
CONTENT;
}
