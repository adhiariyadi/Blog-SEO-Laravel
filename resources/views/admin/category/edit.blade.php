@extends('template_backend.home')
@section('judul', 'Edit Category')
@section('content')
  @if (count($errors)>0)
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        {{ $error }}
      </div>
    @endforeach
  @endif

  <form action="{{ route('category.update', $category->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="form-group">
      <label>Nama Kategory</label>
      <input type="text" class="form-control" value="{{ $category->name }}" name="name" autocomplete="off">
    </div>

    <div class="form-group">
      <button class="btn btn-primary btn-block">Update Kategory</button>
    </div>
  </form>
@endsection
