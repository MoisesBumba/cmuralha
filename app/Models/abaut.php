<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abaut extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'status', 'image',
    ];

    public function rules()
    {
      
            return [
                'title'         => 'required|min:3|max:100',
                'description'   => 'required|min:3|max:4000',
                'status'        => 'required|in:A,R',
                'image'         => 'image',
                
        
            ];  
             
    }
}
