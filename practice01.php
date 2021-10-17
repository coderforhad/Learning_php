<!-- Practice01 class, function, method, properties -->
<?php
    class person {
        public $name = "Forhad Ahmed";
        public $age = 27;

        public function salary(){
            return "My Salary is 20,000 taka";
        }
        public function company($comname){
            return "My Company name: ".$comname;
        }
    }

    $obj = new person;

    echo $obj-> name;

    echo "<br>";

    echo $obj-> salary();

    echo "<br>";

    echo $obj-> company("DataSoft System Bangladesh Limited");
?>