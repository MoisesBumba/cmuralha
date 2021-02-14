<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\StandardController;

class ServiceController extends StandardController
{
    protected $model;      
    protected $name = 'Serviços'; 
    protected $view = 'painel.service';
    protected $upload = ['name' => 'image', 'path' => 'services'];
    protected $route = 'servicos';
    

    public function __construct(Service $service)

    {
        $this->model = $service;
    } 
    
    public function index() 
    {
        $title = "Gestão {$this->name}";  

        $data = $this->model->paginate($this->totalPage);

        return view("{$this->view}.index", compact('data','title'));

    }

}
