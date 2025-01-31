```php
<?php
function my_function($a, $b) {
  if ($a === 0) {
    return $b;
  }
  if ($b === 0) {
    return $a;
  }
  return $a + $b;
}

// Incorrect usage
echo my_function(0, 0); // Returns 0
// Correct Usage:
echo my_function(10,0); // Returns 10
echo my_function(0,10); //Returns 10
?>
```