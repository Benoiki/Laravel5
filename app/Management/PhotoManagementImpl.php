<?php
/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 14/11/2015
 * Time: 18:45
 */

namespace App\Management;


class PhotoManagementImpl implements PhotoManagement
{
 public function save($image){
     if($image->isValid()){
         $chemin = config('images.path');
         $extension = $image->getClientOriginalExtension();

         do{
             $nom = str_random(10).'.'.$extension;
         }while(file_exists($chemin.'/'.$nom));

         return $image->move($chemin, $nom);
     }

     return false;
 }
}