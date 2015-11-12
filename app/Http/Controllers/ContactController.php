<?php
/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 12/11/2015
 * Time: 20:51
 */

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getForm(){
        return view('contactForm');
    }

    public function postForm(ContactRequest $request){
        Mail::send('emails.contact', $request->all(), function($message){
            $message->to('benoit.natus@gmail.com')->subject('Contact');
        });

        return view('contactConfirm');
    }
}