<?php
namespace App\Http\Controllers;

use App\Models\Photos;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function show()
    {
        $data = Photos::all();
        return view('portfolio', ['members'=>$data]);
    }
}
