@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Add image</h1>
            </div>
            <div class="col-md-8">
                <form action="/store" class="mt-5" method="post" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputName">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image"
                                   aria-describedby="inputName">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
