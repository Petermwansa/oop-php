<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Classes</title>
</head>
<body>
    <p>
        <?php
            class Person {
                public $fullname = false;
                public $givenname = false;
                public $familyname = false;
                public $room = false;

                function get_name() {
                    if( $this -> fullname !== false ) return $this->fullname;
                    if ( $this-> familyname !== false && $this->givenname !== false) {
                        return $this->givenname . ' ' . $this->familyname;
                    }

                    return false;
                }
            }


            $peter = new Person();
            $peter->fullname = "Peter Mwansa";
            $peter->room = "1047A";


            $moses = new Person();
            $moses->familyname = "Mwansa Chitundu";
            $moses->givenname = "Moses";
            $moses->room = "S17M";

            print $peter->get_name() . "\n";
            printf('============');
            print $moses->get_name() . "\n";


        ?>
    </p>
</body>
</html>