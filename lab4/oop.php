<?php
class ParentClass {
    public int $parent_field;

    function __construct(int $parent_field) {
        $this->parent_field = $parent_field;
        echo 'Parent constructor<br>';
    }
}

class ChildClass extends ParentClass {
    public int $child_field;

    function __construct(int $parent_field, int $child_field) {
        parent::__construct($parent_field);
        $this->child_field = $child_field;
        echo 'Child constructor<br>';
    }
}

$parent = new ParentClass(10);
$child = new ChildClass(10, 20);
?>