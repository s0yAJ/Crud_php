<?php 


class Plantilla{

    public static $instance = null;

    public static function Aplicar(){
        if(!self::$instance){
            self::$instance = new Plantilla();
        }
        return self::$instance;
    }

    public function __construct()
    {
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Agregar personal</title>
                <link rel="shortcut icon" href="https://cdn-icons-png.freepik.com/512/2921/2921226.png" type="image/x-icon">
                <link rel="stylesheet" href="style.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            </head>
            <body>
                
        <?php
    }

    public function __destruct()
    {
        ?>
        </body>
        </html>

        <?php
    }
}