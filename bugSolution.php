```php
<?php
function my_function($a, $b) {
  if ($a === 0 && $b === 0) {
    return 0;
  } else if ($a === 0) {
    return $b;
  } else if ($b === 0) {
    return $a;
  } else {
    return $a + $b;
  }
}

// Correct usage
echo my_function(0, 0); // Returns 0
echo my_function(10,0); // Returns 10
echo my_function(0,10); //Returns 10
?>
```