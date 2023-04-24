<?php 

 class Person {
   private $PIN ;
   private $password;

   public function getPIN(){
      return $this->$PIN ;
   }
   public function getpassword(){
      return $this->password ;
   }

    public function setPIN ($PIN){
        $this->PIN=$PIN;
    }

    public function setpassword ($password){
        $this->password=$password;
    }
                  






 }



?>