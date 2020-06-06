@extends('template_backend.home')
@section('judul', 'Tambah Post')
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

  <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" name="judul" autocomplete="off">
    </div>
    <div class="form-group">
      <label>Kategori</label>
      <select class="custom-select" name="category_id">
        <option value="" holder>Pilih Kategori</option>
        @foreach ($category as $d)
          <option value="{{ $d->id }}">{{ $d->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Pilih Tags</label>
      <select class="form-control select2" multiple="" name="tags[]">
        @foreach ($tag as $d)
        <option value="{{ $d->id }}">{{ $d->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Content</label>
      <textarea class="summernote" name="content"></textarea>
    </div>
    <div class="form-group">
      <label>Thumbnail</label>
      <input type="file" class="form-control" name="gambar">
    </div>

    <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Post</button>
    </div>
  </form>
@endsection
