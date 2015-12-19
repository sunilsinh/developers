<?php 

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
        static ::who(); // late static binding 
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();