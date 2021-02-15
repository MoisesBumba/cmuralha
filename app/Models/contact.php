<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;  

    protected $fillable = [
        'title', 'description', 'address', 'telephone', 'email','site','status',
    ];

    public function rules()
    {
      
            return [
                'title'          => 'required|min:3|max:100',
                'description'     => 'required|min:3|max:100',
                'address'   => 'required|min:3|max:100',
                'telephone'   => 'required|digits:9',
                'email'        => 'required|min:3|max:100',
                'site'         => 'required|min:3|max:100',
                'status'        => 'required|in:A,R',


                
                
        
            ];   
             
    }

    public function message()
    {
        return [
            'title.required'            => 'O Campo Titulo e Obrigatorio',
            'description.required'      => 'O Campo Descrição e Obrigatorio',
            'address.required'          => 'O Campo Endereço e Obrigatorio',
            'telephone.required'        => 'O Campo Telemovel e Obrigatorio',
            'email.required'            => 'O Campo Email e Obrigatorio',
            'site.required'             => 'O Campo Site e Obrigatorio',
            'status.required'           => 'O Campo Status e Obrigatorio',

        ];
    }
}
