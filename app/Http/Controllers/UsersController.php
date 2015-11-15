<?php
/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 12/11/2015
 * Time: 20:23
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getInfos(){
        return view('infos');
    }

    public function postInfos(Request $request){
        return 'Le nom entré est '.$request->input('nom');
    }
}