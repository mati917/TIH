<?php
include_once('post/submit.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postear</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/" type="image/x-icon">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <!-- CSS -->
<<<<<<< HEAD:post.php
    <link rel="stylesheet" href="css/post/post.css">
=======
    <link rel="stylesheet" href="/css/post/post.css">
>>>>>>> 1cad5fcdabc82d12492dd0a4463ba5a44e16c0f6:post.html
    <!-- Quill CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3b93b417c8.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <form method="POST" action="">
            <header class="row g-3">
                <div class="col-auto">
                    <label for="title" class="visually-hidden">Título</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Agrega un título">
                </div>
                <div class="col-auto">
                    <button type="submit" name="submit" class="btn btn-primary mb-3">Subir</button>
                </div>
                <div class="col-auto">
                    <a href="/" class="btn btn-danger mb-3">Volver</a>
                </div>
            </header>
<<<<<<< HEAD:post.php
            <?php
                if(!empty($statusMsg)){
                    echo $statusMsg;
                }
            ?>
            <!--CKEditor -->
            <textarea name="cuerpo" id="editor"></textarea>
=======
            
            <!-- Quill Editor -->
            <div id="editor">
                <p>Hello World!</p>
                <p>Some initial <strong>bold</strong> text</p>
                <p><br></p>
            </div>
>>>>>>> 1cad5fcdabc82d12492dd0a4463ba5a44e16c0f6:post.html
        </form>
    </div>
    
    
    
    
    <!-- Scripts -->
    
<<<<<<< HEAD:post.php
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
=======
    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var toolbarOptions = [
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        [{ 'font': [] }],
        
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote'],
                                                          // custom button values
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'align': [] }],
        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        ['link', 'image'],      // superscript/subscript
        
        ['clean']                                         // remove formatting button
        ];
        
        var quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });
>>>>>>> 1cad5fcdabc82d12492dd0a4463ba5a44e16c0f6:post.html
    </script>
    
    <!-- JQuery de Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>