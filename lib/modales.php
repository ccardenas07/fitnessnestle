<?php
/**OPCION DE MODAL TERMINOS Y CONTRATOS**/
    switch ($_POST['opcion']){
        case "terminos":
            $imprimir = "<div id='titulo'>TERMINOS Y CONDICIONES</div>";
            $imprimir .=utf8_encode("<div>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est?ndar de las industrias desde el a?o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us? una galer?a de textos y los mezcl? de tal manera que logr? hacer un libro de textos especimen. No s?lo sobrevivi? 500 a?os, sino que tambien ingres? como texto de relleno en documentos electr?nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci?n de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y m?s recientemente con software de autoedici?n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</div>");
        break;
    }
    echo $imprimir;
?>
