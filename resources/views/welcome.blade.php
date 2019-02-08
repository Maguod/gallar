@extends('layouts.layout')

@section('content')
    <div class="container gallary_container">
        <div class="row">
            <div class="col-12 text-center mt-5 mb-3">
                <h1>Max Gallary</h1>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">

          @foreach($images as $img)
                {{--{{dd($img)}}--}}
                <div class="col-md-3 mb-3">
                    <div class="img_box">
                        <img src="{{$img->image}}" class="img-thumbnail" alt="">
                    </div>
                    <div class="button_group">
                        <a href="/show/{{$img->id}}" class="btn btn-success full mb-1">Show</a>
                        <a href="/edit/{{$img->id}}" class="btn btn-warning full mb-1">Edit</a>
                        <a href="/delete/{{$img->id}}" onclick="return confirm('Do you sure?')" class="btn btn-danger
                        full
                        mb-1">Delete</a>
                    </div>
                </div>
          @endforeach

        </div>
    </div>
@endsection


