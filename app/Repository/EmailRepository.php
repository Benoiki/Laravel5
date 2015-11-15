<?php
/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 14/11/2015
 * Time: 20:24
 */

namespace App\Repository;


interface EmailRepository
{
    public function save($mail);
}