<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seek extends Model
{
    protected $table = "seek";

    protected $fillable = [
        'topic', 'description', 'lat', 'lng', 'user_id'
    ];

    public function rules()
    {
        return [
            'topic' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'user_id' => 'required'
        ];
    }

    public $messages = [
        'topic.required' => 'Assunto é obrigatório.',
        'lat.required' => 'Latitude é obrigatória.',
        'lng.required' => 'Longitude é obrigatória.',
        'user_id.required' => 'Usuário não informado.'
    ];
}
