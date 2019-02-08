<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
  private $images;
  public function __construct(ImageService $images)
  {
     $this->images = $images;
  }
  
  function index() {
    
    return view('welcome', ['images' => $this->images->all() ]);
  }

  function create() {
    return view('create');
  }
  function store( Request $request){

      $name = $request->file('image');
      $this->images->add($name);
      return redirect('/');

  }
  
  function show($id) {
   $img = $this->images->getOne($id);
    return view('show', ['image' => $img->image]);
  }
  
  function edit($id) {
    $img = $this->images->getOne($id);
    return view('edit', ['image' => $img]);
  }
  
  function update(Request $request, $id){
    $this->images->update($id, $request->image );
    return redirect('/');
  }
  
  function delete($id) {
    $this->images->delete($id);
    return redirect('/');
  }
}
