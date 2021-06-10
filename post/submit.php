<?php
// Incluing DB config
require_once('inc/db.php');


// If the form is submitted
if(isset($_POST['submit'])){
    // Get editor content
    $editorContent = $_POST['cuerpo'];
    $editorTitle = $_POST['title'];

    // Check whether the editor content is empty
    if(!empty($editorContent)){
        // Insert editor content in the database
        $insert = $db->query("INSERT INTO Post(Nombre, Cuerpo) VALUES ('$editorTitle', '$editorContent');");

        // If DB insertion is seccessful
        if($insert){
            $statusMsg = '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                ¡Enviado correctamente!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }else{
            $statusMsg = '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                ¡Ha ocurrido un problema! Lo sentimos mucho...
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    }else{
        $statusMsg = '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Para subir el post, el editor necesita contenido.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
}