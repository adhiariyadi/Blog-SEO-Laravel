@extends('template_backend.home')
@section('judul', 'Tambah Category')
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

  <form action="{{ route('category.store') }}" method="post">
    @csrf
    <div class="form-group">
      <label>Nama Kategory</label>
      <input type="text" class="form-control" name="name" autocomplete="off">
    </div>

    <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Kategory</button>
    </div>
  </form>
@endsection
