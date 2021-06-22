# Design Patterns
## _Implementation of various Design Patterns in PHP_

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/ea8501b9f7e6440ca4115f68b90b8d6f)](https://www.codacy.com/gh/pablosanches/design-patterns/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=pablosanches/design-patterns&amp;utm_campaign=Badge_Grade)
[![Build Status](https://travis-ci.org/pablosanches/design-patterns.svg?branch=master)](https://travis-ci.org/pablosanches/design-patterns)

## Design Patterns implemented

    - Abstract Factory
    - Adapter
    - Builder
    - Bridge

## Installation

All you have to do is give a git clone in this repository and run a composer install in the root folder of the project ;).

Install the dependencies and devDependencies and start the server.

    ```sh
        git clone https://github.com/pablosanches/design-patterns.git
        composer install
    ```

## Usage

### Abstract Factory
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

### Adapter
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
### Builder
    ```php
        use PabloSanches\DesignPatterns\Builder\ConcreteBuilder1;
        use PabloSanches\DesignPatterns\Builder\Director;

        // Prints: "Product parts: PartA1"
        $director = new Director();
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        $director->buildMinimalViableProduct();
        echo $builder->getProduct()->listParts();

        // Prints: "Product parts: PartA1, PartB1, PartC1"
        $director = new Director();
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        $director->buildFullFeaturedProduct();
        echo $builder->getProduct()->listParts();

        // Prints: "Product parts: PartA1, PartC1"
        $director = new Director();
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        $builder->producePartA();
        $builder->producePartC();

        echo $builder->getProduct()->listParts();
    ```

### Bridge
    ```php
        use PabloSanches\DesignPatterns\Bridge\Abstraction;
        use PabloSanches\DesignPatterns\Bridge\ConcreteImplementationA;
        use PabloSanches\DesignPatterns\Bridge\ConcreteImplementationB;
        use PabloSanches\DesignPatterns\Bridge\ExtendedAbstraction;

        // Prints: "Abstraction: Base operation with:ConcreteImplementationA: Here's the result on the platform A."
        $implementation = new ConcreteImplementationA();
        $abstraction = new Abstraction($implementation);

        echo $abstraction->operation();

        // Prints: "ExtendedAbstraction: Extended operation with:ConcreteImplementationA: Here's the result on the platform B."
        $implementation = new ConcreteImplementationB();
        $abstraction = new ExtendedAbstraction($implementation);
        echo $abstraction->operation();
    ```

### That's it! Now enjoy it! ;)
