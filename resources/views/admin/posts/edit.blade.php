@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('admin.posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">
                            Modifica titolo
                        </label>
                        <input type="text" name="title" value="{{old('title', $post->title)}}">
                    </div>
                    <div class="form-group">
                        <label for="description">
                            Modifica descrizione
                        </label>
                        <textarea name="description" id="description" cols="30" rows="10">
                            {{old('description', $post->description)}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Insert An Immage</label>
                        <input type="file" name="image" value="{{old('image', $post->image)}}" class="form-control-file">
                    </div>
                    <button class="btn btn-success">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection 