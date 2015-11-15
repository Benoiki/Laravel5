<?php
/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 15/11/2015
 * Time: 09:50
 */

namespace App\Repository;

use App\User;


class UserRepository extends ResourceRepository {

    public function __construct(User $user)
    {
        $this->model = $user;
    }
}