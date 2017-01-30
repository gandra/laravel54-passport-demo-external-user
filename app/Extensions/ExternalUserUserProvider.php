<?php
/**
 * Created by PhpStorm.
 * User: gandra
 * Date: 30.1.2017
 * Time: 11:50
 */

namespace App\Extensions;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider as IlluminateUserProvider;

class ExternalUserUserProvider implements IlluminateUserProvider
{

    public function retrieveById($identifier)
    {
        // TODO: Implement retrieveById() method.
        \Log::info('retrieveById START ... identifier: ' . $identifier);

        // PERFORM THE CALL TO MY BACK END WB SERVICE AND CREATE A NEW CustomUser USING THESE INFORMATION:

        $attributes = array(
            'custom_id' => '359-k',
            'custom_password' => \Hash::make('SuperSecret'),
            'name' => 'Dummy User 1',
        );

        $user = new CustomUser($attributes);

        return $user;

    }

    public function retrieveByToken($identifier, $token)
    {
        // TODO: Implement retrieveByToken() method.
        \Log::info('retrieveByToken START ... identifier: ' . $identifier);
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        // TODO: Implement updateRememberToken() method.
        \Log::info('updateRememberToken START');
    }

    public function retrieveByCredentials(array $credentials) {

        // TODO: Implement retrieveByCredentials() method.

        \Log::info('retrieveByCredentials START');
        \Log::info('INSERTED USER CREDENTIAL: '.$credentials['rut'] . ' ' .$credentials['password']);

        //$user = new User('Pippo', 'pippo@google.com', true);

        $attributes = array(
            'custom_id' => '359-k',
            'custom_password' => \Hash::make('SuperSecret'),
            'name' => 'Dummy User 2',
        );

        $user = new CustomUser($attributes);

        \Log::info('USER: '.(json_encode($user)));

        return $user;


    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        // TODO: Implement validateCredentials() method.
        \Log::info('validateCredentials START');
        // dd($credentials);
        $rut = $credentials['rut'];
        $password = $credentials['password'];
        $credentialsNew = [
            'rut' => $rut,
            'password' => $password
        ];

        return true;
    }

}