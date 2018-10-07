# Mather

## Table of Contents

* [DivisionByZeroException](#divisionbyzeroexception)
* [Mather](#mather)
    * [total](#total)
    * [subtract](#subtract)
    * [multiply](#multiply)
    * [divide](#divide)
    * [power](#power)
    * [sum](#sum)
    * [sub](#sub)
    * [mul](#mul)
    * [div](#div)
    * [pow](#pow)
    * [PI](#pi)
    * [PLANCK](#planck)
    * [LIGHT_SPEED](#light_speed)
    * [MEISSEL_MERTENS](#meissel_mertens)
    * [STEFAN_BOLTZMANN](#stefan_boltzmann)

## DivisionByZeroException

Class DivisionByZeroException



* Full name: \Hichxm\Mather\Exceptions\DivisionByZeroException
* Parent class: 


## Mather

Class Mather



* Full name: \Hichxm\Mather\Mather


### total

Sum all the numbers between them

```php
Mather::total( float|integer $numbers ): float|integer
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numbers` | **float&#124;integer** |  |




---

### subtract

Sum all the numbers between them

```php
Mather::subtract( float|integer $numbers ): float|integer
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numbers` | **float&#124;integer** |  |




---

### multiply

Multiply the numbers between them

```php
Mather::multiply( float|integer $numbers ): float|integer
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numbers` | **float&#124;integer** |  |




---

### divide

Divide the first term by the second

```php
Mather::divide( float|integer $a, float|integer $b ): float|integer
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$a` | **float&#124;integer** |  |
| `$b` | **float&#124;integer** |  |




---

### power

Return a number to the power x

```php
Mather::power( integer|float $base, integer|float $exp ): float|integer
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **integer&#124;float** |  |
| `$exp` | **integer&#124;float** |  |




---

### sum



```php
Mather::sum( float|integer $numbers ): float|integer
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numbers` | **float&#124;integer** |  |



**See Also:**

* \Hichxm\Mather\Traits\Operation::total() 

---

### sub



```php
Mather::sub( float|integer $numbers ): float|integer
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numbers` | **float&#124;integer** |  |



**See Also:**

* \Hichxm\Mather\Traits\Operation::sub() 

---

### mul



```php
Mather::mul( float|integer $numbers ): float|integer
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numbers` | **float&#124;integer** |  |



**See Also:**

* \Hichxm\Mather\Traits\Operation::multiply() 

---

### div



```php
Mather::div( float|integer $a, float|integer $b ): float|integer
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$a` | **float&#124;integer** |  |
| `$b` | **float&#124;integer** |  |



**See Also:**

* \Hichxm\Mather\Traits\Operation::divide() 

---

### pow



```php
Mather::pow(  $base,  $exp ): float|integer
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **** |  |
| `$exp` | **** |  |



**See Also:**

* \Hichxm\Mather\Traits\Operation::power() 

---

### PI

Returns the value of PI

```php
Mather::PI(  ): float
```



* This method is **static**.



---

### PLANCK

Returns the value of PLANCK constant (J/s)

```php
Mather::PLANCK(  ): float
```



* This method is **static**.



---

### LIGHT_SPEED

Returns the value of LIGHT SPEED constant (m/s)

```php
Mather::LIGHT_SPEED(  ): integer
```



* This method is **static**.



---

### MEISSEL_MERTENS

Returns the value of MEISSEL MERTENS constant

```php
Mather::MEISSEL_MERTENS(  ): float
```



* This method is **static**.



---

### STEFAN_BOLTZMANN

Returns the value of STEFAN BOLTZMANN constant (kg/s^3/K^4)

```php
Mather::STEFAN_BOLTZMANN(  ): float
```



* This method is **static**.



---



--------
> This document was automatically generated from source code comments on 2018-10-07 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
