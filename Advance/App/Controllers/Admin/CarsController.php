<?php

namespace App\Controllers\Admin;

use App\Models\Car;
//use App\Models\Cars;
use App\Services\CarsService;
use App\Validators\CarsValidator;
use Core\View;

class CarsController extends BaseController
{
    public function index()
    {
        $cars = Car::all();
//        dd($cars);
        View::render('admin/cars/index', compact('cars'));
    }
    public function create()
    {
        View::render('admin/cars/create');
    }

    public function store()
    {
        $fields = filter_input_array(INPUT_POST, $_POST);
        $validator = new CarsValidator();

        if (CarsService::create($fields, $validator)){
            redirect('admin/cars');
        }

        View::render('admin/cars/create', $this->getErrors($fields, $validator));
    }

    public function edit(int $id)
    {
        $car = Car::find($id); //
        View::render('admin/cars/edit', compact('car'));
    }

    public function update(int $id)
    {
        $fields = filter_input_array(INPUT_POST, $_POST);
        $validator = new CarsValidator();

        if (CarsService::update($id, $fields, $validator)){
            redirect('admin/cars');
        }

        $params = array_merge(
            $this->getErrors($fields, $validator),
            ['car' => (object)$fields]
        );

        View::render('admin/cars/edit', $params);

    }

    public function destroy(int $id)
    {

        Car::find($id)->destroy();
        redirect('admin/cars');
    }
}