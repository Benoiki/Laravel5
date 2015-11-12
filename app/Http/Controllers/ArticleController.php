<?php
/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 12/11/2015
 * Time: 20:06
 */

namespace App\Http\Controllers;


class ArticleController extends Controller
{
    public function showArticle($n){
        return view('article')->withNumero($n);
    }
}