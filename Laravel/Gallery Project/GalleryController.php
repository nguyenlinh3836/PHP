<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class GalleryController extends BaseController
{
    public function showGallery(){
        return view('gallery');
    }
}