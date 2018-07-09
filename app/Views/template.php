<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <title>Sistema de Cadastro em MVC - ULTIAMTE PHP</title>
    </head>
 <?php print_r(DIRETORIO_BASE);
?>
    <body>
         <div class="container">
            <?php
if (isset($viewName)) {$path = viewsPath() . $viewName . '.php';
    if (file_exists($path)) {require_once $path;}
}
?>
         </div>
    </body>
</html>