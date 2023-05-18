<?php
interface Shape
{
    public function calculatePerimeter();
    public function calculateArea();
}

abstract class ShapeName implements Shape
{
    abstract public function displayName();
}

class Triangle extends ShapeName
{
    public function calculatePerimeter()
    {
    }
    public function calculateArea()
    {
    }
    public function displayName()
    {
    }
}

$triangle = new Triangle();
echo $triangle instanceof Shape;
