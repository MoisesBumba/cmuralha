<?php

namespace App\Models;

use App\Http\Controllers\StandardController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'specialty', 'description', 'status', 'image',
    ];

    public function rules()
    {
      
            return [
                'name'          => 'required|min:3|max:100',
                'specialty'     => 'required|min:3|max:4000',
                'description'   => 'required|min:3|max:100',
                'status'        => 'required|in:A,R',
                'image'         => 'image',
                
        
            ];   
             
    }
}
 