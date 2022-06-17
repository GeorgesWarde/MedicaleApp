<?php
require_once('models/role.php');
require_once('models/user.php');
require_once('models/token.php');

function authenticate($mysqli, $tokenValue)
{
    $token = Token::findByToken($mysqli, $tokenValue);
    if (!$token) {
        return false;
    }
    $user = User::findByUsername($mysqli, $token->username);
    $role = Role::getRoleById($mysqli, $user->roleId);
    $user->roleName = $role->name;
    return $user;
}
