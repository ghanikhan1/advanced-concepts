<?php

namespace App\Http\Controllers;

use App\Interfaces\Square;
use App\Interfaces\PaymentProcessor;
use App\Libraries\Rectangle;
use App\Libraries\Circle;
use App\Libraries\Shape;
use App\Libraries\Vehicle;
use App\Libraries\Math;

use App\Libraries\Triangle;
use Illuminate\Http\Request;

class Tasks extends Controller
{
    public function index()
    {
//        $area = new Rectangle(5,5);
////        dd($area->getArea());
//        return view('tasks', [Rectangle::class,'getPerimeter' => $area->getPerimeter(), 'getArea' => $area->getArea()]);

//        $radius = new Circle(7);
//        return view('/tasks', [Circle::class, 'area' => $radius->getArea(), 'circumfrance' => $radius->getCircumfrance()]);

//        $calc = new Rectangle(4,5);
//        $tri = new Triangle(5,5);
//        return view('tasks', [Rectangle::class,'calc' => $calc, Triangle::class,'tri'=>$tri]);

//        $square = new Square(10);
//        dd($square->resize(70));

//        $brand = new Vehicle('Toyota', 'Rav4', '2023');
//        $brand->setBrand('Mercedez');
//        $brand->setModel('AMG');
//        $brand->setYear('2023');
//
//        return view('tasks',['brand'=> $brand->getBrand(),'model' => $brand->getModel(),'year' => $brand->getYear()]);
//dd(Math::add(2,2));
//        return view('tasks', [
//            'sum' => Math::add(3,3),
//            'sub' => Math::subtract(5,3),
//            'mul' => Math::multiply(5,5)
//        ]);


    }
}
