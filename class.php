<?php


//Инкапсуляция - способы взаимодействия свойств и методов внутри класса
//
//Полиморфизм - возможность использования методов производного класса, которой не существует на момент создания базового класса
//
//Наследование - способ создания класса на основе базового класса

//class Car {
//    protected $model = 'Toyota';
//
//    public function getModel(){
//        $model = mb_strtolower($this->getOriginalModel());
//        $model[0] = mb_strtoupper($model[0]);
//        return $model;
//    }
//
//    public function getOriginalModel(){
//        return trim($this->model);
//    }
//
//    public function setModel($model){
//        $model = mb_strtolower($model);
//        $model[0] = mb_strtoupper($model[0]);
//        $this->model = $model;
//    }
//}
//
//$car = new Car;
//echo $car->getModel();
//$car->setModel("Audi");
//echo $car->getModel();

class Person{
//    protected $age = 0;
//    protected $isAlive = true;
//
//
//
//    // Будет проживать один год
//    // Рандомно решается, умрёт ли в этом году
//    function live(){
//        $rand = rand(0, 15);
//        if ($rand){
//            $this->age++;
//        }
//        else{
//            $this->isAlive = false;
//        }
//    }
//
//    function isAlive(){
//        return $this->isAlive;
//    }
//
//    function getAge(){
//        return $this->age;
//    }

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }

    function setName($name){
        $this->name = $name;
        return $this;
    }

}

//$person = new Person('Bob');
//
//echo $person
//    ->setName('John')
//    ->getName();


//$person->__construct('John');
//$city = [];
//foreach (range(1, 1000) as $value){
//    $city[] = new Person;
//}
//
//echo $city[mt_rand(0, 999)]->getAge();
//while ($person->isAlive()){
//    $person->live();
//}
//
//echo "Человек умер в {$person->getAge()} лет((";

//class Queue{
//    protected $queue = [];
//
//    function add($item){
//        $this->queue[] = $item;
//        return $this;
//    }
//
//    function pop(){
//        $this->queue = array_shift($this->queue);
//        return $this;
//    }
//}

//class BinaryTree {
//
//    protected $value;
//    protected $right;
//    protected $left;
//
//    public function __construct($value = null) {
//        $this->value = $value;
//    }
//
//    function value() {
//        return $this->value;
//    }
//
//    function add($value) {
//
//        if (!$this->value()) {
//            $this->value = $value;
//            return;
//        }
//
//        if ($value > $this->value()) {
//            if (!$this->right)
//                $this->right = new BinaryTree($value);
//            else
//                $this->right->add($value);
//        } else {
//            if (!$this->left)
//                $this->left = new BinaryTree($value);
//            else
//                $this->left->add($value);
//        }
//
//    }
//
//    function max() {
//        if (!$this->right)
//            return $this->value();
//        return $this->right->max();
//    }
//
//    function min() {
//        if (!$this->left)
//            return $this->value();
//        return $this->left->min();
//    }
//
//}
//
//$tree = new BinaryTree();
//$tree->add(5);
//$tree->add(6);
//$tree->add(7);
//
//$tree->add(4);
//$tree->add(3);
//$tree->add(2);
//
//echo $tree->max();
//echo $tree->min();

