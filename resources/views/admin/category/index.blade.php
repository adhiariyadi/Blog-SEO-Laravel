@extends('template_backend.home')
@section('judul', 'Category')
@section('content')
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session('success') }}
    </div>
  @endif

  <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Tambah Kategori</a><br><br>
  <table class="table table-striped table-hover table-sm table-bordered">
    <tr>
      <th>No</th>
      <th>Nama Kategori</th>
      <th>Action</th>
    </tr>
    @foreach ($category as $result => $d)
      <tr>
        <td>{{ $result + $category->firstitem() }}</td>
        <td>{{ $d->name }}</td>
        <td>
          <form action="{{ route('category.destroy', $d->id) }}" method="post">
            @csrf
            @method('delete')
            <a href="{{ route('category.edit', $d->id) }}" class="btn btn-success btn-sm">Edit</a>
            <button type="submit" class="btn btn-danger btn-sm" name="button">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
  {{ $category->links() }}
@endsection
