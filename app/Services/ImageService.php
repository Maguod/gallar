<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageService
{
  public function all()
  {
    $images = DB::table('images')->select('*')->get();
    return $images->all();
  }
  
  public function add($image)
  {
    $name = $image->store('upload/images');
    /*верхнюю строку можно просто подставить в DB вместо $name*/
    DB::table('images')->insert(
      ['image' => $name]
    );
  }
  public function getOne($id)
  {
    $img = DB::table('images')
      ->select('*')
      ->where('id' , $id)
      ->first();
    return $img;
  }
  
  public function update($id, $image)
  {
    /*Удаляем старую картинку*/
    $img = DB::table('images')
      ->select('*')
      ->where('id' , $id)
      ->first();
  
    Storage::delete($img->image);
  
    /*Записываем новую картинку*/
    $filename = $image->store('upload/images');
    DB::table('images')
      ->where('id', $id)
      ->update(['image' => $filename]);
  }
  
  public function delete($id)
  {
    $img = $this->getOne($id);
    Storage::delete($img->image);
    DB::table('images')->where('id', $id)->delete();
  }
}