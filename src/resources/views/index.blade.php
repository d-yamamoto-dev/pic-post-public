<form method="POST" action="/" enctype="multipart/form-data">
  @csrf
  <input type="file" name="picture">
  <button>upload</button>
</form>

@foreach($pictures as $picture)

<img src="{{ asset($picture->file_path) }}" width="300" height="300" alt="" >

@endforeach
