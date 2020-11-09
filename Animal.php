<?php

class Animal {
    public $name = 'Animal';
    protected $idade;
    private $peso = 24.5;

    protected function falar() {
        print("ANIMAL FALAR!!");
    }
}

class Cachorro extends Animal {
    public $peso = 23;

    public function __construct() {
        $this->name = 'Rodolfo';
    }

    public function falar() {
        print($this->name);
        print('<br>');
        print($this->peso);
        print('au au au');
        parent::falar();
    }
}

$animal = new Animal;
// $animal->falar();

$cachorro = new Cachorro;
$cachorro->falar();

print('<br>');
print('<br>');
print('<br>');

$arr_var = [1, 2, 3, 4, 5];
foreach ($arr_var as $value) {
    // print('$key: ' . $key);
    print('$value: ' . $value);
    print('<br>');
}

print('<br>');
print('<br>');
$arr_people = [
    'Nome: ' => 'Harry Potter',
    'Idade: ' => 23,
    'Escola: ' => 'Hogwarts'
];

print($arr_people['Nome: ']);

foreach ($arr_people as $key => $value) {
    print($key . $value);
    if($value == 23) {
        break;
    }
    print('<br>');
}

print('<br>');
for($i=0; $i <= 5; $i++) {
    print('$i:> ' . $i);
    print('<br>');
}


print('<br>');
print('<br>');
$j = 0;
while($j < 5) {
    print('$j:> ' . $j);
    print('<br>');  
    $j++;
}


$k = 0;
do {
    print('$k:> ' . $k);
    print('<br>');  
    $k++;
} while($k < 5);