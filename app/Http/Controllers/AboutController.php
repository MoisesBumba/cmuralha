<?php

namespace App\Http\Controllers;

use App\Models\Abaut;
use Illuminate\Http\Request;
use App\Http\Controllers\StandardController;

class AboutController extends StandardController
{
    protected $model;      
    protected $name = 'somos'; 
    protected $view = 'painel.about';
    protected $upload = ['name' => 'image', 'path' => 'about'];
    protected $route = 'sobre';

    public function __construct(Abaut $about) 
    {
        $this->model = $about;
    } 
    
    public function index()
    {
        
        $title = "Gestão {$this->name}";   

        $data = $this->model->paginate($this->totalPage);

        return view("{$this->view}.index", compact('data','title'));

    }
    

 

}
