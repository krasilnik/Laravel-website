<?php
class Singleton {
    // The singleton object is stored in a static class field.
    private static $instance = null;

    // The Singleton constructor must always be hidden to prevent
    // Creating an object via the new operator.
    protected function __construct() { }

    // Singleton must not be clonable.
    protected function __clone() { }

    // This is a static method that controls access to the singleton instance. When
    // the first time it runs, it creates an instance of a singleton and puts it in
    // static field. On subsequent runs, it returns an object to the client,
    // stored in the static field.
    public static function getInstance(): Singleton {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

function singletonCheck() {
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();
    if ($s1 === $s2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
}

singletonCheck();
?>