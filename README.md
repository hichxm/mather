# Mather

Mather is a library that will allow you to facilitate your mathematical operations in PHP, without using an external library.

## Example

```php
use Hichxm\Mather\Mather;

Mather::sum(10, 15); // return int(25)
Mather::sum(5, 0.5); // return float(5.5)

Mather::total(10, 15); // return int(25)
Mather::total(5, 0.5); // return float(5.5)

Mather::sub(10, 15); // return int(-5)
Mather::sub(0, 0.5); // return float(-0.5)

Mather::subtract(10, 15); // return int(-5)
Mather::subtract(0, 0.5); // return float(-0.5)
```