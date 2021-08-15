<?php


namespace App\Traits;


use App\Http\Resources\UserResource;
use App\Models\User;

trait AuthTrait
{
    public function gurad()
    {
        return 'api';
    }

    public function Model()
    {
        return User::class;
    }
    public function resource()
    {
        return UserResource::class;
    }
    public function loginCredentials()
    {
        return [
            'email','password'
        ];
    }
}
