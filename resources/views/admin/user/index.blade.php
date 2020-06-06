@extends('template_backend.home')
@section('judul', 'User')
@section('content')
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session('success') }}
    </div>
  @endif

  <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Tambah User</a><br><br>
  <table class="table table-striped table-hover table-sm table-bordered">
    <tr>
      <th>No</th>
      <th>Nama User</th>
      <th>Email</th>
      <th>Type</th>
      <th>Action</th>
    </tr>
    @foreach ($user as $result => $d)
      <tr>
        <td>{{ $result + $user->firstitem() }}</td>
        <td>{{ $d->name }}</td>
        <td>{{ $d->email }}</td>
        <td>
          @if ( $d->tipe )
            <span class="badge badge-info">Administrator</span>
          @else
            <span class="badge badge-warning">Author</span>
          @endif
        </td>
        <td>
          <form action="{{ route('user.destroy', $d->id) }}" method="post">
            @csrf
            @method('delete')
            <a href="{{ route('user.edit', $d->id) }}" class="btn btn-success btn-sm">Edit</a>
            <button type="submit" class="btn btn-danger btn-sm" name="button">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
  {{ $user->links() }}
@endsection
