<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\StandardController;

class ContactController extends StandardController 
{
    protected $model;      
    protected $name = 'Contacto';  
    protected $view = 'painel.contact';
    protected $upload = ['name' => 'image', 'path' => 'contacts']; 
    protected $route = 'contact'; 
    

    public function __construct(Contact $contact) 

    {
        $this->model = $contact;
    }  
    
    public function index() 
    {
        $title = "Gestão {$this->name}";   

        $data = $this->model->paginate($this->totalPage);

        return view("{$this->view}.index", compact('data','title'));

    }
}
