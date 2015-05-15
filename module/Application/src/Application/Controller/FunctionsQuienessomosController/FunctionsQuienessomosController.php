<?php
/* Nueva funcion */
    function interactua_php($vista)
    {
        switch($vista)
        {
            case "index":
                return utf8_encode("La vista index está interactuando con una nueva función PHP a través del controlador");
       
            case "fotos":
                return utf8_encode("La vista fotos está interactuando con una nueva función PHP a través del controlador");
            
             case "musica":
                return utf8_encode("La vista musica está interactuando con una nueva función PHP a través del controlador");
        }
    }
 /* Nueva funcion */
    /* imagenes */
function imagenes($id)
{
switch ($id)
{
    case 1:
        return "<img src='http://www.blog.bluemarkets.es/wp-content/uploads/2012/10/php_logo.jpg'>";
        break;
    case 2:
        return "<img src='http://walllook.com/images/jquery_logo.jpg'>";
        break;
    default:
        return "Seleccione una imagen";
        break;
}
}

function count_imagenes($count)
{
    $resultado = "";
    $x = 1;
    while ($x <= $count)
    {
  $resultado .= "<a href='http://OzOutletZf2.localhost/fotos/$x'>Seleccionar imagen $x</a><br>";
       $x++;
    }
    return $resultado;
}
/* imagenes */

