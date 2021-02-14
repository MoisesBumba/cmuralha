<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\StandardController;

class DoctorController extends StandardController 
{
    protected $model;      
    protected $name = 'Doutores'; 
    protected $view = 'painel.doctor';
    protected $upload = ['name' => 'image', 'path' => 'doctors'];
    protected $route = 'doctor';
    

    public function __construct(Doctor $doctor) 

    {
        $this->model = $doctor;
    }  
    
    public function index() 
    {
        $title = "Gestão {$this->name}";   

        $data = $this->model->paginate($this->totalPage);

        return view("{$this->view}.index", compact('data','title'));

    }
}
 