<?php
/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 14/11/2015
 * Time: 20:25
 */

namespace App\Repository;

use App\Email;

class EmailRepositoryImpl implements EmailRepository
{
    protected $email;

    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    public function save($mail)
    {
        $email = new $this->email;
        $email->email = $mail;
        $email->save();
    }
}