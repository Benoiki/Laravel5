<?php
/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 12/11/2015
 * Time: 19:55
 */

namespace App\Http\Controllers;


class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
}