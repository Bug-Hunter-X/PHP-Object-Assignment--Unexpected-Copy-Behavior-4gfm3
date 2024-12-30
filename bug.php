In PHP, a common yet subtle error arises when dealing with references and object assignments. Consider this scenario: 
```php
class MyClass {
    public $value = 0;
}

$object1 = new MyClass();
$object2 = $object1; // Assignment, not referencing!
$object2->value = 10;

echo $object1->value; // Outputs 10, unexpected by some
```
Many developers expect `$object1->value` to remain 0.  The assignment `$object2 = $object1` creates a *copy* of the object, not a reference. Changes to `$object2` therefore affect the copied object, and not the original.