<?php

class Animal {
    public function falar() {
        print('Falar');
    }
}

class Cachorro extends Animal {

    public function falar() {
        print('au au au');
        print('<br>');
        parent::falar();
    }
    
    public function main() {
        $this->falar();
    }

}

$cachorro = new Cachorro;
$cachorro->main();
?>


<!-- public scope to make that property/method available from anywhere, other classes and instances of the object.

private scope when you want your property/method to be visible in its own class only.

protected scope when you want to make your property/method visible in all classes that extend current class including the parent class. -->