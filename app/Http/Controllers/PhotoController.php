<?php
/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 14/11/2015
 * Time: 17:48
 */

namespace App\Http\Controllers;


use App\Http\Requests\ImagesRequest;
use App\Management\PhotoManagement;

class PhotoController extends Controller
{
    public function getForm(){
        return view('imageForm');
    }

    public function postForm(ImagesRequest $request, PhotoManagement $photoSaver){

        if($photoSaver->save($request->file('image'))){
            return view('photo_ok');
        }

        return redirect('photo/form')
            ->with('error', 'Désolé mais votre image ne peut pas être envoyée !');
    }
}