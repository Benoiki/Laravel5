<?php
/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 14/11/2015
 * Time: 19:59
 */

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Repository\EmailRepository;

class EmailController extends Controller
{
    public function getForm()
    {
        return view('email');
    }

    public function postForm(EmailRequest $request, EmailRepository $repository)
    {
        $repository->save($request->input('email'));

        return view('email_ok');
    }
}