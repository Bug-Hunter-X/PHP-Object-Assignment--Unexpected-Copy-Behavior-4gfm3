To maintain a reference, use the `&` operator:
```php
class MyClass {
    public $value = 0;
}

$object1 = new MyClass();
$object2 = &$object1; // Now $object2 references $object1
$object2->value = 10;

echo $object1->value; // Outputs 10, as expected when using references
```
Alternatively, if you explicitly want to copy, ensure that you understand the object copying behavior, and handle it appropriately in your code.  The choice between pass-by-value (copying) and pass-by-reference is crucial and often determines the correct approach for your code design.  Understanding the difference is key to preventing these types of errors.