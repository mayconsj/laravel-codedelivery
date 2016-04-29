<?php
/**
 * Created by PhpStorm.
 * User: Maycon
 * Date: 29/04/2016
 * Time: 18:05
 */

namespace CodeDelivery\OAuth2;


class PasswordGrantVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email' => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}