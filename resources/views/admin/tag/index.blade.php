@extends('template_backend.home')
@section('judul', 'Tag')
@section('content')
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session('success') }}
    </div>
  @endif

  <a href="{{ route('tag.create') }}" class="btn btn-primary btn-sm">Tambah Tag</a><br><br>
  <table class="table table-striped table-hover table-sm table-bordered">
    <tr>
      <th>No</th>
      <th>Nama Tag</th>
      <th>Action</th>
    </tr>
    @foreach ($tag as $result => $d)
      <tr>
        <td>{{ $result + $tag->firstitem() }}</td>
        <td>{{ $d->name }}</td>
        <td>
          <form action="{{ route('tag.destroy', $d->id) }}" method="post">
            @csrf
            @method('delete')
            <a href="{{ route('tag.edit', $d->id) }}" class="btn btn-success btn-sm">Edit</a>
            <button type="submit" class="btn btn-danger btn-sm" name="button">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
  {{ $tag->links() }}
@endsection
