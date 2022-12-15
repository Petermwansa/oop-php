<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance in PHP</title>
</head>
<body>
    <?php
        class Hello {
            protected $lang;
            function __construct($lang) {

            }
            
            function greet () {
                if ( $this->lang == 'fr' ) return "Bonjour";
                if ( $this->lang == 'es' ) return "Hola";
                if ( $this->lang == 'ru' ) return "Здравствуйте";
            }
        }

        class Social extends Hello {

            function bye() {
                if( $this->lang == 'fr' ) return "Au revoir";
                if( $this->lang == 'es' ) return "Adios";
                if( $this->lang == 'ru' ) return "Пока";

                return "Goodbye";

            }
        }

        $hi = new Social('es');
        echo $hi->greet()."\n";
        echo $hi->bye()."\n";
    ?>
</body>
</html>