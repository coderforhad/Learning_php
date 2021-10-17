<!-- $this keyword! with object oriented php -->

<?php
    class person {
        public $name;
        public $company;
        public $designation;
        public $salary;

        public function getName(){
            return $this-> name;
        }

        public function getCompany(){
            return $this-> company;
        }

        public function getDesignation(){
            return $this-> designation; 
        }

        public function getSalary(){
            return $this-> salary;
        }

        public function setName($name){
            $this-> name= $name;
        }

        public function setCompany($company){
            $this-> company= $company;
        }

        public function setDesignation($designation){
            $this-> designation= $designation;
        }

        public function setSalary($salary){
            $this-> salary= $salary;
        }

    }

    $personobj = new person;
    $personobj-> setName("Forhad Ahmed");
    $personobj-> setCompany("DataSoft System Bangladeh Limited");
    $personobj-> setDesignation("Port Operation Exicutive");
    $personobj-> setSalary(20000);

    echo $personobj-> getName();
    echo "<br>";
    echo $personobj-> getCompany();
    echo "<br>";
    echo $personobj-> getDesignation();
    echo "<br>";
    echo $personobj-> getSalary();
    echo "<br>";


?>