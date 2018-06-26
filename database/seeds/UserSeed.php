<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user_credentials = [
    		"name" =>"Admin", 
    		"user" => "admin", 
    		"password" => Hash::make("123456"), 
    		"date_birth" => "2018-01-01", 
    		"gender" => 1, 
    		"deficiency" => 1, 
    		"cep" => "11111111", 
    		"address" => "Teste",
    		"email" => "admin@admin.com", 
    		"remember_token" => Hash::make("123456"), 
    		"created_at" => "2018-01-01 00:00:00", 
    		"updated_at" => "2018-01-01 00:00:00"
    	];
        $user = new User();
        $user->create($user_credentials);
    }
}
