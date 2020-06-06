@extends('template_backend.home')
@section('judul', 'Post Yang Sudah Dihapus')
@section('content')
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session('success') }}
    </div>
  @endif

  <table class="table table-striped table-hover table-sm table-bordered">
    <tr>
      <th>No</th>
      <th>Nama Post</th>
      <th>Kategori</th>
      <th>Daftar Tags</th>
      <th>Creator</th>
      <th>Thumbnail</th>
      <th>Action</th>
    </tr>
    @foreach ($post as $result => $d)
      <tr>
        <td>{{ $result + $post->firstitem() }}</td>
        <td>{{ $d->judul }}</td>
        <td>{{ $d->category->name }}</td>
        <td>
          @foreach ($d->tags as $tag)
            <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
          @endforeach
        </td>
        <td>{{ $d->users->name }}</td>
        <td>
          <img src="{{ asset( $d->gambar ) }}" class="img-fluid" width="100" alt="">
        </td>
        <td>
          <form action="{{ route('post.kill', $d->id) }}" method="post">
            @csrf
            @method('delete')
            <a href="{{ route('post.restore', $d->id) }}" class="btn btn-success btn-sm">Restore</a>
            <button type="submit" class="btn btn-danger btn-sm" name="button">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
  {{ $post->links() }}
@endsection
