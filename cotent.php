<?php
    class Content{
        private $happy;
        private $years;
        private $success;
        private $injury;
    
    public function __contruct( 
        $happy,
        $years,
        $success,
        $injury
    ){
        $this->happy = $happy;
        $this->years = $years;
        $this->success = $success;
        $this->injury = $injury;
    }
    private function getAll(){        
        return $this->happy;
        return $this->years;
        return $this->success;
        return $this->injury;
    }
    private function setHappy($happy){
        $this->happy = $happy;
    }
    private function setYears($years){
        $this->years = $years;
    }
    private function setSuccess($success){
        $this->success = $success;
    }
    private function setInjury($injury){
        $this->injury = $injury;
    }
    public function createInput($key) {
        echo '<label for='. $key . '>'. $key .' : </label>';
        echo '<input type="text" class="input" name="' . $key . '" value="'. $this->getValue($key).'"> ';
         
    }
    }
?>