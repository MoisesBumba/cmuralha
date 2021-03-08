<?php

namespace App\Http\Controllers;

use App\Models\Abaut;


use Illuminate\Http\Request;

class SiteController extends Controller
{
    private $about; 

    public function __construct(Abaut $about)
    {   
        
        $this->about = $about; 
    }

    public function index() 

    {
        $title = 'Clínica Grande Muralha da China'; 

        
        $dadosabout = $this->about
                    ->where('status', 'A')
                    ->get();

        return view('site.home.index', compact('title', 'dadosabout') ); 
        
    }
 
}
