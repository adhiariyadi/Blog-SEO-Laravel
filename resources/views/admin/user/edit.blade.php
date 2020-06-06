@extends('template_backend.home')
@section('judul', 'Tambah User')
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

  <form action="{{ route('user.update', $user->id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
      <label>Nama User</label>
      <input type="text" class="form-control" name="name" value="{{ $user->name }}" autocomplete="off">
    </div>
    <div class="form-group">
      <label>Email User</label>
      <input type="email" class="form-control" name="email" value="{{ $user->email }}" autocomplete="off" readonly>
    </div>
    <div class="form-group">
      <label>Tipe User</label>
      <select class="custom-select" name="tipe">
        <option value="" holder>Pilih Tipe User</option>
        <option value="1" holder
        @if ($user->tipe == 1)
          selected
        @endif
        >Administrator</option>
        <option value="0" holder
        @if ($user->tipe == 0)
          selected
        @endif
        >Author</option>
      </select>
    </div>
    <div class="form-group">
      <label>Password User</label>
      <input type="password" class="form-control" name="password" autocomplete="off">
    </div>

    <div class="form-group">
      <button class="btn btn-primary btn-block">Update User</button>
    </div>
  </form>
@endsection
