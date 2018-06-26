<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'user', 'password', 'date_birth', 'gender', 'deficiency', 'cep', 'address', 'email'
    ];

    public function rules()
    {
        $id = ($this->id) ? ",".$this->id : "";
        return [
            'name'        => 'required',
            'user'        => 'required|unique:users,user'.$id,
            'password'    => 'required|min:6',
            'date_birth'  => 'required',
            'gender'      => 'required',
            'deficiency'  => 'required|not_in:0',
            'cep'         => 'required',
            'email'       => 'required|unique:users,email'.$id
        ];
    }

    public function rulesLogin()
    {
        return [
            'user'     => 'required',
            'password' => 'required|min:6'
        ];
    }

    public $messages = [
        'name.required'       => 'Nome é obrigatório.',
        'user.required'       => 'Usuário é obrigatório.',
        'user.unique'         => 'Usuário já cadastrado.',
        'password.required'   => 'Senha é obrigatória.',
        'password.min'        => 'Senha deve conter no mínimo 6 caracteres.', 
        'date_birth.required' => 'Data de nascimento é obrigatória.',
        'gender.required'     => 'Sexo é obrigatorio',
        'deficiency.required' => 'Dificiência é obrigatória.',
        'deficiency.not_in'   => 'Deficiência não informada.',
        'cep.required'        => 'CEP é obriatório.',
        'email.required'      => 'Email é obrigatório.', 
        'email.unique'        => 'Email já cadastrado.'
    ];

    public $messages_login = [
        'user.required'     => 'Usuário é obrigatório.',
        'password.required' => 'Senha é obrigatória.',
        'password.min'      => 'Senha deve conter no mínimo 6 caracteres.'
    ];

    public function getGenderAttribute($value)
    {
        return $value == 1 ? "Masculino" : "Feminino";
    }

    public function getDeficiencyAttribute($value)
    {
        return ($value == 1 ? "Não" : ($value == 2 ? "Física" : "Mental"));
    }
    
}
