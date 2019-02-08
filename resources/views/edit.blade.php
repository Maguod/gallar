@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5">Edit image</h1>
            </div>
            <div class="col-12 mb-3">
                <img src="/{{$image->image}}" alt="" class="img-thumbnail img_show">
            </div>
            <div class="col-md-8">
                <form action="/update/{{$image->id}}" class="mt-5" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="file_name">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="file-input" name="image" id="file_img"
                                   aria-describedby="file_name">
                            <label class="custom-file-label" for="file_img">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
