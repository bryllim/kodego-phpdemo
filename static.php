<?php

class student {
    public static $name = "Ivan";
    public static $pi = 3.1412345;

    static function helloWorld(){
        echo "Hello world!";
    }
}

// $student = new student();

// Static Properties

// echo $student->name;

echo student::$name;
echo student::$pi;

// Static Methods

student::helloWorld();


?>