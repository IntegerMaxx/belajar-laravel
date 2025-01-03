<?php
class UserModel{
    private static $user = [
        ['name' => 'sunarto', 'password' => '123'],
    ];

    public static function loginCheck($name, $password){
        foreach (self::$user as $users){
            if($users['name'] === $name && $users['password'] === $password){
                return true;
            }
        }
        return false;
    }
}
?>