<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Response;

class ImagesController extends Controller
{
        public function index()
    {
        $images = Image::all();
        $response = Response::json($images,200);

        return $response;
    }
}
