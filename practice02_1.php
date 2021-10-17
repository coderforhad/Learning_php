<!-- $this keyword! with object oriented php -->

<?php
    class person {
        public $name;
        public $company;
        public $designation;
        public $salary;

        public function __construct($name, $company, $designation, $salary){
            $this-> name= $name;
            $this-> company= $company;
            $this-> designation= $designation;
            $this-> salary= $salary;
        }

        public function messege(){
            return "<br>".$this-> name."<br>".$this-> company. "<br>". $this-> designation. "<br>" .$this-> salary. "!";
        }

    }

    $personobj = new person("Forhad Ahmed", "DataSoft System Bangladeh Limited", "Port Operation Exicutive", 20000);

    echo $personobj-> messege();

    // $personobj-> setName("Forhad Ahmed");
    // $personobj-> setCompany("DataSoft System Bangladeh Limited");
    // $personobj-> setDesignation("Port Operation Exicutive");
    // $personobj-> setSalary(20000);

    // echo $personobj-> getName();
    // echo "<br>";
    // echo $personobj-> getCompany();
    // echo "<br>";
    // echo $personobj-> getDesignation();
    // echo "<br>";
    // echo $personobj-> getSalary();
    // echo "<br>";


?>