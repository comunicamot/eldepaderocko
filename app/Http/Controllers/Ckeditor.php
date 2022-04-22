<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class Ckeditor extends Controller
{
    public $name_dir = '/image/ck/';
    
    public function upload(Request $request){
      try {
          $url = $request->getSchemeAndHttpHost() . $this->name_dir;
          $file = $request->file('upload');
          $name = $file->getClientOriginalName();
          $file->move(public_path() . $this->name_dir, $file->getClientOriginalName());
         
        return response()->json(["url"=>$url.$name]);
      } catch (\Throwable $th) {
          \Log::debug($th);
      }
    }
}
