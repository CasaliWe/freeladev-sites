<?php
namespace Repositories;

use Models\Login;

class LoginRepository {
    public static function getLogin() {
        return Login::where('idlogin', '1')->first();
    }
}