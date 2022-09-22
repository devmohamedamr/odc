<?php



// class car{
//     public $color;

//     public function move(){
//         echo "move";
//     }
// }

// $ob1 = new car;
// $ob1->color = "Red";
// print_r($ob1);

// echo "<hr>";

// $ob2 = new car;
// $ob2->color = "green";
// print_r($ob2);








class calc{
    public $x,$y;

    public function add(){
         echo $this->x + $this->y;   
    }

    public function mult(){
        echo $this->x *$this->y;
    }

    public function sub(){
        echo $this->x - $this->y;
    }

    public function div(){
        echo $this->x / $this->y;
    }
}


// $c = new calc;
// $c->add(10,20);
// echo "<hr>";

// $c->mult(20,20);




$c = new calc;
$c->x = 10;
$c->y = 20;

$c->sub();







