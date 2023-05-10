<?php 

class Man{
    public $name = 'Raj';
    private $age = '25';
    protected $add = 'badda';

    public function info()
    {
        return 'Name = ' .$this -> name  . '<br>' .'Age = '.$this-> age;
    }
    
}
class Rajinfo extends Man{
    public function sms()
    {
       return 'Address = '.$this -> add;
    }
}

$raj = new Rajinfo;
echo $raj -> info();
echo '<br>';
echo $raj -> sms();



?>