@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit New Post</h1>
</div>
<a href="/dashboard/posts" class="btn btn-success mb-3"><span data-feather="arrow-left"></span>Back to all my posts</a>

<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data"> 
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>        
        <div class="mb-3">
            <div for="category_id" class="form-label">Category</div>
            <select class="form-select" name="category_id">
            @foreach ($categories as $category)
                @if(old('category_id', $post->category_id) == $category->id)
                    <option id="category" value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option id="category" value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <div for="section_id" class="form-label">Section</div>
            <select class="form-select" name="section_id">
            @foreach ($sections as $section)
                @if(old('section_id', $post->section_id) == $section->id)
                    <option id="section" value="{{ $section->id }}" selected>{{ $section->name }}</option>
                @else
                    <option id="section" value="{{ $section->id }}">{{ $section->name }}</option>
                @endif
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price', $post->price)}}">
            @error('price')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Post Image</label>
            <input type="hidden" name="oldImage" value="{{ $post->image }}">
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
                <img class="img-preview img-fluid mb-3 col-sm-5" >
            @endif
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <div for="desc" class="form-label">Description</div>
            @error('desc')
                <p class="text-danger" >{{ $message }}</p>
            @enderror
            <input id="desc" type="hidden" name="desc" required value="{{ old('desc', $post->desc)}}">
            <trix-editor input="desc"></trix-editor>
        </div>
    <button type="submit" value="submit" class="btn btn-primary mt-3">Update Post</button>
    </form>
</div>

<script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFEvent){
            imgPreview.src = oFEvent.target.result;
        }
    }
</script>
@endsection