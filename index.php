<?php
// Абстракція
abstract class Shape {
    protected $color;

    public function __construct(Color $color) {
        $this->color = $color;
    }

    abstract public function draw();
}

// Реалізація
interface Color {
    public function fill();
}

// Конкретна реалізація кольору
class RedColor implements Color {
    public function fill() {
        return "Red";
    }
}

// Інший конкретний клас реалізації кольору
class GreenColor implements Color {
    public function fill() {
        return "Green";
    }
}

// Конкретний клас абстракції
class Circle extends Shape {
    public function draw() {
        return "Drawing a " . $this->color->fill() . " circle.";
    }
}

// Інший конкретний клас абстракції
class Square extends Shape {
    public function draw() {
        return "Drawing a " . $this->color->fill() . " square.";
    }
}

// Використання паттерна Міст
$redCircle = new Circle(new RedColor());
echo $redCircle->draw();  // Drawing a Red circle.

$greenSquare = new Square(new GreenColor());
echo $greenSquare->draw();  // Drawing a Green square.
