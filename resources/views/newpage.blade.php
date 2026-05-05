<?php

 // inheritence 
// class Notifactions {

//   public function __construct(public string $message ) 
//   {
   
//   }

//   public function send() {
//     echo "This is my new paragraph.<br>";
//   }
// }

// class EmailNotifaction extends Notifactions {
//   public function send() {
//     echo "Am I a fruit or a berry? ";
//   }
// }

// $strawberry = new EmailNotifaction("my name is ranjit singh");
// $strawberry->send();

 //class and construct 
// class songlist 
// {
//    public $name;
//    public $song;

//    public function __construct($name, $song)
//    {
//     $this->name = $name;
//     $this->song = $song;
//    }
//    public function shuffle()
//    {
//     shuffle($this->song);
//    }
// }
// $songlist = [];

// $songlist[] = new songlist('Panjabi songs',[
//     'The last ride',
//     'Video call',
//     'Toronto',
//     'Chit nahi lagda'
// ]);
// // $songlist[] = new songlist('nusrat fateh ali khan',[
// //     'khena galat galat',
// //     'dua na koi hor mangdi',
// // ]);
// $songlist[0]->shuffle();
// // $songlist[1]->shuffle();                   
// echo "<pre>";
// die(var_dump($songlist));
// echo "</pre>";


 // full explain class 
class calculation{
  public $a, $b, $c;
  function sum(){
    $this->c = $this->a + $this->b;
    return $this->c;
  }
  function sub(){
    $this->c = $this->a - $this->b;
    return $this->c;
  }
}
$obj = new calculation();
$obj->a = 20;
$obj->b = 10;

$obj1 = new calculation();
$obj1->a = 50;
$obj1->b = 35;

echo "velue of sum : ".$obj->sum()."<br>";
echo "velue of sub : ".$obj1->sub()."<br>";
echo "velue of sub : ".$obj->sub()."<br>";
?>