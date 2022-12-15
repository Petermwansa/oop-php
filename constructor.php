<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Constructors</title>
</head>
<body>
    <p>
        <?php
            class Hello {
                protected $lang;   //the protected means only available in the class
                function __construct ($lang) {
                    $this->lang = $lang;
                }

                function greet () {
                    if( $this->lang == 'fr' ) return 'Bonjour';
                    if( $this->lang == 'es' ) return 'Hola';
                    if( $this->lang == 'ru' ) return 'Здравствуйте';

                    //if non of the above is true
                    return 'Hello';
                }
            }

            $hi = new Hello('ru');
            echo $hi->greet()."\n";
        ?>
    </p>
</body>
</html>