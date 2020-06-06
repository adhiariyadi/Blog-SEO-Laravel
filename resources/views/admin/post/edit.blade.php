@extends('template_backend.home')
@section('judul', 'Edit Post')
@section('content')
  @if (count($errors)>0)
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        {{ $error }}
      </div>
    @endforeach
  @endif

  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session('success') }}
    </div>
  @endif

  <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" value="{{ $post->judul }}" name="judul" autocomplete="off">
    </div>
    <div class="form-group">
      <label>Kategori</label>
      <select class="custom-select" name="category_id">
        <option value="" holder>Pilih Kategori</option>
        @foreach ($category as $d)
          <option value="{{ $d->id }}"
            @if ($post->category_id == $d->id)
              selected
            @endif
          >{{ $d->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Pilih Tags</label>
      <select class="form-control select2" multiple="" name="tags[]">
        @foreach ($tag as $d)
          <option value="{{ $d->id }}"
            @foreach ($post->tags as $value)
              @if ($d->id == $value->id)
                selected
              @endif
            @endforeach
          >{{ $d->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Content</label>
      <textarea class="summernote" name="content">{{ $post->content }}</textarea>
    </div>
    <div class="form-group">
      <label>Thumbnail</label>
      <input type="file" class="form-control" name="gambar">
    </div>

    <div class="form-group">
      <button class="btn btn-primary btn-block">Update Post</button>
    </div>
  </form>
@endsection
