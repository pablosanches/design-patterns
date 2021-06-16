# Design Patterns
## _Implementation of various Design Patterns in PHP._

[![Build Status](https://travis-ci.org/pablosanches/design-patterns.svg?branch=master)](https://travis-ci.org/pablosanches/design-patterns)

## Design Patterns implemented

- Abstract Factory;
- Adapter;

## Installation

All you have to do is give a git clone in this repository and run a composer install in the root folder of the project ;).

Install the dependencies and devDependencies and start the server.

```sh
git clone https://github.com/pablosanches/design-patterns.git
composer install
```

## Usage

##Abstract Factory.
```php
use PabloSanches\DesignPatterns\AbstractFactory\ConcreteFactory1;
use PabloSanches\DesignPatterns\AbstractFactory\ConcreteFactory2;

$factory = new ConcreteFactory1();
$productA = $factory->createProductA();
$productB = $factory->createProductB();

// Prints: The result of the product A1.
echo $productA->usefulFunctionA();

// Prints: The result of the product B1.
$productB->usefulFunctionB();

// Prints: 'The result of the B1 collaborating with the (The result of the product A1.)
$productB->anotherUsefulFunctionB($productA);

$factory = new ConcreteFactory2();
$productA = $factory->createProductA();
$productB = $factory->createProductB();

// Prints: The result of the product A2.
$productA->usefulFunctionA();

// Prints: The result of the product B2.
$productB->usefulFunctionB();

// Prints: 'The result of the B2 collaborating with the (The result of the product A2.)
$productB->anotherUsefulFunctionB($productA);
```

##Adapter.
```php
use PabloSanches\DesignPatterns\Adapter\Target;
use PabloSanches\DesignPatterns\Adapter\Adaptee;
use PabloSanches\DesignPatterns\Adapter\Adapter;

// Prints: "Target: The default target's behavior."
$target = new Target();
echo $target->request();


// Prints: ".eetpadA eht fo roivaheb laicepS"
$adaptee = new Adaptee();
echo $adaptee->specificRequest()

// Prints: "Adapter: (TRANSLATED) Special behavior of the Adaptee."
$adapter = new Adapter($adaptee);
echo $adapter->request()
```

### That's it! Now enjoy it! ;)